import * as THREE from 'three';
import { GLTFLoader } from 'three/examples/jsm/loaders/GLTFLoader.js';
import { RGBELoader } from 'three/examples/jsm/loaders/RGBELoader.js';
import { VRButton } from 'three/examples/jsm/webxr/VRButton.js';

let camera, scene, renderer, model, mixer, clock;
let currentModelIndex = 0;
let models = ['model1.glb', 'model2.glb'];  // Add paths to your models

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

    // Add VR button
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
    renderer.render(scene, camera);
}
