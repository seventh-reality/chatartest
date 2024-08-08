// Initialize PlayCanvas app
const canvas = document.getElementById('canvas');
const app = new pc.Application(canvas, {
    mouse: new pc.Mouse(canvas),
    touch: new pc.TouchDevice(canvas),
    elementInput: new pc.ElementInput(canvas),
    keyboard: new pc.Keyboard(window),
});
app.start();

// Set canvas resolution
app.setCanvasFillMode(pc.FILLMODE_FILL_WINDOW);
app.setCanvasResolution(pc.RESOLUTION_AUTO);
window.addEventListener('resize', () => app.resizeCanvas());

// Set up the scene
app.scene.ambientLight = new pc.Color(0.5, 0.5, 0.5);

// Create camera entity
const camera = new pc.Entity();
camera.addComponent('camera', {
    clearColor: new pc.Color(0.1, 0.1, 0.1)
});
camera.addComponent('script');
app.root.addChild(camera);

// Enable WebXR AR
camera.addComponent('xr', { 
    type: pc.XRTYPE_AR, 
    spaceType: pc.XRSPACETYPE_LOCAL 
});
camera.xr.start(camera);

// Create directional light
const light = new pc.Entity();
light.addComponent('light', {
    type: 'directional',
    color: new pc.Color(1, 1, 1),
    intensity: 1.5,
    castShadows: true
});
light.setLocalEulerAngles(45, 30, 0);
app.root.addChild(light);

// Load HDR environment for reflections
app.assets.loadFromUrl('path_to_hdr/hdr_file.hdr', 'texture', function (err, asset) {
    if (!err) {
        asset.resource.type = pc.TEXTURETYPE_RGBM;
        app.scene.skyboxMip = 2;
        app.scene.setSkybox(asset.resource);
    }
});

let currentModelIndex = 0;
const models = ['80d9e4b53b2448a4bb1411a7ff3e63a7.glb', 'c9c572b946de4f6b9f0fcc7043c23ea0.glb'];  // Model paths
let modelEntity, animationComponent;

// Load the first model
loadModel(models[currentModelIndex]);

// Function to load and switch models
function loadModel(url) {
    if (modelEntity) {
        app.root.removeChild(modelEntity);
        modelEntity.destroy();
    }

    const glbLoader = new pc.AssetRegistry().loadFromUrlAndFilename(url, 'model', 'model');
    glbLoader.on('load', function (err, asset) {
        modelEntity = new pc.Entity();
        modelEntity.addComponent('model', {
            type: 'asset',
            asset: asset,
        });

        // Set animation component if the model has animations
        if (asset.resource.animations.length > 0) {
            animationComponent = new pc.AnimComponent();
            modelEntity.addComponent('anim', {
                activate: true,
                loop: true,
                assets: [asset.resource.animations[0]]
            });
        }
        
        modelEntity.setLocalPosition(0, 0, -1);
        app.root.addChild(modelEntity);
    });
}

// Function to play animation
document.getElementById('playAnimation').onclick = function () {
    if (animationComponent) {
        const animController = modelEntity.anim;
        if (animController) {
            animController.play();
        }
    }
};

// Function to switch model
document.getElementById('switchModel').onclick = function () {
    currentModelIndex = (currentModelIndex + 1) % models.length;
    loadModel(models[currentModelIndex]);
};

// Handle hotspot clicks
document.getElementById('hotspot1').onclick = function () {
    alert('Hotspot 1 clicked! Add your logic here.');
};

document.getElementById('hotspot2').onclick = function () {
    alert('Hotspot 2 clicked! Add your logic here.');
};

document.getElementById('hotspot3').onclick = function () {
    alert('Hotspot 3 clicked! Add your logic here.');
};

// Update function
app.on('update', function (dt) {
    // Update scene
});
