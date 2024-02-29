import * as THREE from 'three';
import { OrbitControls } from 'three/examples/jsm/controls/OrbitControls';
import { GLTFLoader } from 'three/examples/jsm/loaders/GLTFLoader';
import { RoomEnvironment } from 'three/examples/jsm/environments/RoomEnvironment';

// Initialize Three.js scene
const scene = new THREE.Scene();

//Light
const ambientLight = new THREE.AmbientLight(0xffffff, 0.2);
scene.add(ambientLight);

const spotLight = new THREE.SpotLight(0xffffff, 1.2);
spotLight.position.set(0, 10, 0);
spotLight.castShadow = true;
spotLight.angle = 0.45;
spotLight.penumbra = 0.3;

spotLight.shadow.focus = 1;
scene.add(spotLight);

//Camera
const camera = new THREE.PerspectiveCamera(45, 320 / 400, 0.1, 1000);
camera.position.z = 0.3;
camera.lookAt(scene.position);

//Renderer
const canvas = document.querySelector('canvas');
const renderer = new THREE.WebGLRenderer({ canvas, antialias: true, alpha: true});
renderer.setSize(320, 400);
// renderer.setClearColor(0xA3A3A3);
renderer.toneMapping = THREE.ACESFilmicToneMapping;
renderer.toneMappingExposure = 1;
renderer.outputEncoding = THREE.sRGBEncoding;
renderer.shadowMap.enabled = true;

const environment = new RoomEnvironment( renderer );
const pmremGenerator = new THREE.PMREMGenerator( renderer );
scene.environment = pmremGenerator.fromScene( environment ).texture;

//Controls
const controls = new OrbitControls(camera, canvas);
controls.enableDamping = true;
controls.enablePan = false;
controls.enableZoom = false;
controls.autoRotate = true;
controls.autoRotateSpeed = 1.5;

let mixer = null;

// Load GLTF model
const loader = new GLTFLoader();
loader.setPath('assets/models/');
loader.load('k-vrc__love_death__robots.glb', function (gltf) {
    const model = gltf.scene;
    model.scale.set(0.01, 0.01, 0.01);
    model.position.y = -0.1;
    scene.add(model);

    if(model && model.animations && mixer === null) {
        mixer = new THREE.AnimationMixer(model);
        mixer.clipAction(gltf.animations[0]).play();
    }

    model.traverse(function (child) {
        if (child.isMesh) {
            console.log(child);

            child.castShadow = true;
            child.receiveShadow = true;
        }
    });

}, undefined, function (error) {
    console.error(error);
});

renderer.setAnimationLoop(() => {
    renderer.render(scene, camera);
    controls.update();

    if (mixer) {
        mixer.update(0.007);
    }
});
