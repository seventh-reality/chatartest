import * as THREE from 'three';
import { GLTFLoader } from 'three/examples/jsm/loaders/GLTFLoader.js';
import { RGBELoader } from 'three/examples/jsm/loaders/RGBELoader.js';
import { VRButton } from 'three/examples/jsm/webxr/VRButton.js';

let camera, scene, renderer, model, mixer, clock;
let currentModelIndex = 0;
const models = ['80d9e4b53b2448a4bb1411a7ff3e63a7.glb', 'path_to_model2.glb']; // Paths to your models
const hotspots = [];

init();
animate();

function init() {
    // Initialize scene
    scene = new THREE.Scene();

    // Initialize camera
    camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
    camera.position.set(0, 1.6, 3);

    // Initialize renderer
    renderer = new THREE.WebGLRenderer({ canvas: document.getElementById('canvas'), antialias: true });
    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.xr.enabled = true;
    document.body.appendChild(VRButton.createButton(renderer));

    // Load environment map for reflections
    new RGBELoader()
        .setPath('path_to_hdr/')  // Replace with the path to your HDR files
        .load('royal_esplanade_1k.hdr', function (texture) {
            texture.mapping = THREE.EquirectangularReflectionMapping;
            scene.environment = texture;
        });

    // Load the first model
    loadModel(models[currentModelIndex]);

    // Add lighting
    const ambientLight = new THREE.AmbientLight(0xffffff, 0.4);
    scene.add(ambientLight);

    const directionalLight = new THREE.DirectionalLight(0xffffff, 1.0);
    directionalLight.position.set(5, 10, 7.5);
    scene.add(directionalLight);

    // Initialize clock for animations
    clock = new THREE.Clock();

    // Button interactions
    document.getElementById('playAnimation').onclick = playAnimation;
    document.getElementById('switchModel').onclick = switchModel;

    // Hotspot interactions
    document.getElementById('hotspot1').onclick = function () {
        alert('Hotspot 1 clicked!');
    };
    document.getElementById('hotspot2').onclick = function () {
        alert('Hotspot 2 clicked!');
    };
    document.getElementById('hotspot3').onclick = function () {
        alert('Hotspot 3 clicked!');
    };

    // Handle window resize
    window.addEventListener('resize', onWindowResize, false);
}

function loadModel(modelPath) {
    if (model) {
        scene.remove(model);
    }

    const loader = new GLTFLoader();
    loader.load(modelPath, function (gltf) {
        model = gltf.scene;
        scene.add(model);

        if (gltf.animations.length) {
            mixer = new THREE.AnimationMixer(model);
            const action = mixer.clipAction(gltf.animations[0]);
            action.play();
        }

        // Add 3D hotspots
        addHotspots();
    });
}

function playAnimation() {
    if (mixer) {
        const action = mixer.existingAction(mixer._actions[0].getClip());
        if (action) {
            action.reset();
            action.play();
        }
    }
}

function switchModel() {
    currentModelIndex = (currentModelIndex + 1) % models.length;
    loadModel(models[currentModelIndex]);
}

function onWindowResize() {
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(window.innerWidth, window.innerHeight);
}

function animate() {
    renderer.setAnimationLoop(render);
}

function render() {
    const delta = clock.getDelta();
    if (mixer) mixer.update(delta);

    // Update hotspots based on model position (if needed)
    updateHotspots();

    renderer.render(scene, camera);
}

function addHotspots() {
    // Example to add a hotspot in the 3D scene
    const hotspot1 = createHotspot(0, 1, -1);
    const hotspot2 = createHotspot(1, 1, -1);
    const hotspot3 = createHotspot(-1, 1, -1);

    hotspots.push(hotspot1, hotspot2, hotspot3);
    scene.add(hotspot1, hotspot2, hotspot3);
}

function createHotspot(x, y, z) {
    const geometry = new THREE.SphereGeometry(0.05, 32, 32);
    const material = new THREE.MeshBasicMaterial({ color: 0xff0000 });
    const hotspot = new THREE.Mesh(geometry, material);
    hotspot.position.set(x, y, z);
    hotspot.userData = { id: `hotspot${hotspots.length + 1}` };
    return hotspot;
}

function updateHotspots() {
    hotspots.forEach(hotspot => {
        // Convert 3D position to 2D screen coordinates
        const vector = hotspot.position.clone().project(camera);
        const x = (vector.x * 0.5 + 0.5) * window.innerWidth;
        const y = -(vector.y * 0.5 - 0.5) * window.innerHeight;

        // Update corresponding HTML hotspot position
        const htmlHotspot = document.getElementById(hotspot.userData.id);
        if (htmlHotspot) {
            htmlHotspot.style.left = `${x}px`;
            htmlHotspot.style.top = `${y}px`;
        }
    });
}
