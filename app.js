import * as THREE from 'three';
import { GLTFLoader } from 'three/examples/jsm/loaders/GLTFLoader.js';
import { VRButton } from 'three/examples/jsm/webxr/VRButton.js';

let camera, scene, renderer, model;
let rotateSpeed = 0.05;
let scaleSpeed = 0.1;

init();
animate();

function init() {
    // Set up scene
    scene = new THREE.Scene();
    scene.background = new THREE.Color(0xeeeeee);

    // Set up camera
    camera = new THREE.PerspectiveCamera(70, window.innerWidth / window.innerHeight, 0.1, 1000);
    camera.position.set(0, 1.6, 3);

    // Set up renderer
    renderer = new THREE.WebGLRenderer({ canvas: document.getElementById('canvas'), antialias: true });
    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.xr.enabled = true;

    // Add VR button
    document.body.appendChild(VRButton.createButton(renderer));

    // Load 3D model
    const loader = new GLTFLoader();
    loader.load('path_to_your_model.glb', function(gltf) {
        model = gltf.scene;
        scene.add(model);
    });

    // Add lights
    const light = new THREE.DirectionalLight(0xffffff, 1);
    light.position.set(1, 1, 1).normalize();
    scene.add(light);

    // Button interactions
    document.getElementById('rotateLeft').onclick = () => rotateModel(rotateSpeed);
    document.getElementById('rotateRight').onclick = () => rotateModel(-rotateSpeed);
    document.getElementById('scaleUp').onclick = () => scaleModel(1 + scaleSpeed);
    document.getElementById('scaleDown').onclick = () => scaleModel(1 - scaleSpeed);

    // Handle window resize
    window.addEventListener('resize', onWindowResize, false);
}

function rotateModel(speed) {
    if (model) {
        model.rotation.y += speed;
    }
}

function scaleModel(scaleFactor) {
    if (model) {
        model.scale.set(model.scale.x * scaleFactor, model.scale.y * scaleFactor, model.scale.z * scaleFactor);
    }
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
    renderer.render(scene, camera);
}
