import * as THREE from "three";
import { OrbitControls } from 'jsm/controls/OrbitControls.js';

// Function to get dimensions
function getDimensions() {
  const width = (window.innerWidth <= 500) ? 500 : window.innerWidth;
  const height = (window.innerWidth <= 500) ? 500 : window.innerHeight;
  return { width, height };
}

// Function to adjust the globe size
function adjustGlobeSize() {
  return (window.innerWidth <= 500) ? 1.8 : 2.5;
}

// Set initial dimensions and globe size
let { width, height } = getDimensions();
let globeSize = adjustGlobeSize();

const scene = new THREE.Scene();
scene.background = null;
const camera = new THREE.PerspectiveCamera(75, width / height, 0.1, 1000);
camera.position.z = 5;
const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
renderer.setSize(width, height);

// Create a container for all Earth-related elements
const earthContainer = document.querySelector('.earth-container');
earthContainer.appendChild(renderer.domElement);

const earthGroup = new THREE.Group();
earthGroup.rotation.z = -3 * Math.PI / 180;
scene.add(earthGroup);

// Create OrbitControls with no zoom
const controls = new OrbitControls(camera, renderer.domElement);
controls.enableZoom = false;

const detail = 12;

// Create a video element
const video = document.createElement('video');
video.src = 'assets/imgs/Newmap.mp4';
video.loop = true;
video.muted = true;
video.setAttribute('playsinline', ''); // Ensure video plays inline on iOS
video.play().catch(error => {
  console.error('Video play failed:', error);
  // Show some UI to inform the user that interaction is needed
  // For example, you could display a play button that the user needs to click
});

// Create a video texture from the video element
const texture = new THREE.VideoTexture(video);
texture.minFilter = THREE.LinearFilter;
texture.magFilter = THREE.LinearFilter; // Ensure the texture filters are set
texture.format = THREE.RGBFormat; // Explicitly set texture format if needed

// Create geometry and scale it initially
let geometry = new THREE.IcosahedronGeometry(1, detail);
geometry.scale(globeSize, globeSize, globeSize);

const material = new THREE.MeshBasicMaterial({
  map: texture,
  side: THREE.DoubleSide,
});

const earthMesh = new THREE.Mesh(geometry, material);
earthGroup.add(earthMesh);

// Raycaster for detecting mouse clicks
const raycaster = new THREE.Raycaster();
const mouse = new THREE.Vector2();

let rotationPaused = false; // Variable to track whether rotation is paused

function onMouseClick(event) {
  // Calculate mouse position in normalized device coordinates
  mouse.x = (event.clientX / window.innerWidth) * 2 - 1;
  mouse.y = -(event.clientY / window.innerHeight) * 2 + 1;

  // Set the raycaster origin and direction based on the mouse position
  raycaster.setFromCamera(mouse, camera);

  // Check for intersections with the earth mesh
  const intersects = raycaster.intersectObject(earthMesh);

  // If there are intersections, handle the click
  if (intersects.length > 0) {
    // Perform actions based on the clicked area
    const uv = intersects[0].uv;
    console.log('UV coordinates:', uv);
    handleClickOnGlobe(uv);
    
    rotationPaused = true;
  } else {
    // Clicked outside of the earth, resume rotation
    removePopup();
    rotationPaused = false;
  }
}

function handleClickOnGlobe(uv) {
  const aspectRatio = window.innerWidth / window.innerHeight;

  // Define ranges for different regions on the globe based on aspect ratio
  let indiaRange, australiaRange;
  if (aspectRatio >= 16 / 9) { // Wide aspect ratio (e.g., desktop)
    indiaRange = { u1: 0.66, u2: 0.70, v1: 0.40, v2: 0.60 };
    australiaRange = { u1: 0.75, u2: 0.90, v1: 0.25, v2: 0.55 };
  } else { // Narrow aspect ratio (e.g., mobile)
    indiaRange = { u1: 0.66, u2: 0.70, v1: 0.35, v2: 0.65 };
    australiaRange = { u1: 0.75, u2: 0.90, v1: 0.20, v2: 0.60 };
  }
  
  if (isInRange(uv, indiaRange)) {
    showPopup('#india-popup');
  } else if (isInRange(uv, australiaRange)) {
    showPopup('#australia-popup');
  } else {
    showPopup('#leisure-popup');
  }
}

// Function to show the popup
function showPopup(popupSelector) {
  // Hide all popups
  const popups = document.querySelectorAll('.popup');
  popups.forEach(popup => {
    popup.style.display = 'none';
  });

  // Show the selected popup
  const popup = document.querySelector(popupSelector);
  popup.style.display = 'block';

  rotationPaused = true; // Pause rotation while popup is displayed
}

// Function to remove the existing popup
function removePopup() {
  const popups = document.querySelectorAll('.popup');
  popups.forEach(popup => {
    popup.style.display = 'none';
  });
}

function isInRange(uv, range) {
  return (
    uv.x >= range.u1 && uv.x <= range.u2 &&
    uv.y >= range.v1 && uv.y <= range.v2
  );
}

window.addEventListener('click', onMouseClick, false);

function animate() {
  requestAnimationFrame(animate);
  
  if (video.readyState === video.HAVE_ENOUGH_DATA) {
    texture.needsUpdate = true;
  }

  // Rotate the Earth mesh only if rotation is not paused
  if (!rotationPaused) {
    earthMesh.rotation.y -= 0.003;
  }

  // Render the scene
  renderer.render(scene, camera);
}

animate();

function handleWindowResize() {
  const { width: newW, height: newH } = getDimensions();
  camera.aspect = newW / newH;
  camera.updateProjectionMatrix();
  renderer.setSize(newW, newH);

  // Adjust globe size and recreate geometry
  const newGlobeSize = adjustGlobeSize();
  geometry.dispose(); // Dispose the old geometry
  geometry = new THREE.IcosahedronGeometry(1, detail);
  geometry.scale(newGlobeSize, newGlobeSize, newGlobeSize);

  // Update the earth mesh with the new geometry
  earthMesh.geometry = geometry;
}

window.addEventListener('resize', handleWindowResize, false);
