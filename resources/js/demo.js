
import * as THREE from 'three';
import { OrbitControls } from 'three/examples/jsm/controls/OrbitControls';
import { GLTFLoader } from 'three/examples/jsm/loaders/GLTFLoader';
import { RoomEnvironment } from 'three/examples/jsm/environments/RoomEnvironment';

// Initialize Three.js scene
const scene = new THREE.Scene();

// //Light
// const ambientLight = new THREE.AmbientLight(0xffffff, 0.2);
// scene.add(ambientLight);

// const spotLight = new THREE.SpotLight(0xffffff, 1.2);
// spotLight.position.set(0, 10, 0);
// spotLight.castShadow = true;
// spotLight.angle = 0.45;
// spotLight.penumbra = 0.3;

// spotLight.shadow.focus = 1;
// scene.add(spotLight);

//Camera
const camera = new THREE.PerspectiveCamera( 90, window.innerWidth / window.innerHeight, 0.1, 100 );
camera.position.set(-3.795354855379777, 1.6636033724212393,1.451388543485175);

//Renderer
const canvas = document.querySelector('canvas');
const renderer = new THREE.WebGLRenderer({ canvas, antialias: true, alpha: true });
renderer.setSize(window.innerWidth, window.innerHeight);
renderer.setClearColor(0xA3A3A3);
renderer.toneMapping = THREE.ACESFilmicToneMapping;
renderer.toneMappingExposure = 1;
renderer.outputEncoding = THREE.sRGBEncoding;
renderer.shadowMap.enabled = true;


const environment = new RoomEnvironment(renderer);
const pmremGenerator = new THREE.PMREMGenerator(renderer);
scene.environment = pmremGenerator.fromScene(environment).texture;


//Controls
const controls = new OrbitControls(camera, canvas);
controls.enableDamping = true;
controls.rotateSpeed = - 0.25;
controls.dampingFactor = 0.005;
controls.panSpeed = 0.001;
controls.zoom0 = 0;
controls.maxPolarAngle = Math.PI / 2


const loader = new GLTFLoader();
loader.setPath('assets/models/swedish-royal/');
loader.load('scene.gltf', function (gltf) {
    const model = gltf.scene;
    model.position.set(0.65,-1.02,-0.53);

    scene.add(model);
}, undefined, function (error) {
    console.error(error);
});

renderer.setAnimationLoop(() => {
    renderer.render(scene, camera);
    controls.update();
});

