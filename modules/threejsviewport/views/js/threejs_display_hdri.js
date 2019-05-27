//if ( WEBGL.isWebGLAvailable() === false ) {
//    document.body.appendChild( WEBGL.getWebGLErrorMessage() );
//}

var camera, scene, renderer;
//var geometry, material, mesh;
var container, controls;

init();
animate();
document.getElementById('3dClo').style.height = "auto";
document.getElementById('3dClo').style.width = "100%";

function init() {

    //var light = new THREE.AmbientLight( 0x505050 ); // soft white light
    //camera = new THREE.PerspectiveCamera( 70, window.innerWidth / window.innerHeight, 0.01, 10 );
    //camera.position.z = 1;
    camera = new THREE.PerspectiveCamera(50, window.innerWidth / window.innerHeight, 0.01, 4000);
    camera.position.set(1, 1, 1);
    camera.lookAt(new THREE.Vector3(0, 0, 0));
    //camera = new THREE.PerspectiveCamera( 45, window.innerWidth / window.innerHeight, 0.25, 20 );
    //camera.position.set( - 1.8, 0.9, 2.7 );
    controls = new THREE.OrbitControls(camera);
    //controls.minPolarAngle=1.4;
    //controls.maxPolarAngle=1.4;
    controls.enablePan = false;
    //controls.target.set( -3000, 5000, 9000 );
    controls.update();

    scene = new THREE.Scene();
    //scene.add( light );

    var loader = new THREE.RGBELoader().setPath('img/hdri/');
    loader.load('studio_small_05_1k.hdr', function (texture) {

        texture.encoding = THREE.RGBEEncoding;
        texture.minFilter = THREE.NearestFilter;
        texture.magFilter = THREE.NearestFilter;
        texture.flipY = true;

        var cubeGenerator = new THREE.EquirectangularToCubeGenerator(texture, {resolution: 1024});
        cubeGenerator.update(renderer);
        var pmremGenerator = new THREE.PMREMGenerator(cubeGenerator.renderTarget.texture);
        pmremGenerator.update(renderer);
        var pmremCubeUVPacker = new THREE.PMREMCubeUVPacker(pmremGenerator.cubeLods);
        pmremCubeUVPacker.update(renderer);
        var envMap = pmremCubeUVPacker.CubeUVRenderTarget.texture;

        var loader = new THREE.GLTFLoader();
        loader.load(
                '3d/gltf/4.gltf',
                function (gltf) {
                    gltf.scene.traverse(function (child) {
                        if (child.isMesh) {
                            child.material.envMap = envMap;
                        }
                    });

                    var mroot = gltf.scene;
                    var bbox = new THREE.Box3().setFromObject(mroot);
                    //var cent = bbox.getCenter(new THREE.Vector3());
                    var size = bbox.getSize(new THREE.Vector3());
                    //Rescale the object to normalized space
                    var maxAxis = Math.max(size.x, size.y, size.z);
                    mroot.scale.multiplyScalar(1.0 / maxAxis);
                    bbox.setFromObject(mroot);
                    //bbox.getCenter(cent);
                    bbox.getSize(size);
                    //Reposition to 0,halfY,0
                    mroot.position.y -= (size.y * 0.5);
                    scene.add(gltf.scene);
                },
                function (xhr) {
                    console.log((xhr.loaded / xhr.total * 100) + '% loaded');
                },
                // called when loading has errors
                        function (error) {
                            console.log('An error happened');
                        }
                );

                pmremGenerator.dispose();
                pmremCubeUVPacker.dispose();
                 
            }); 

    renderer = new THREE.WebGLRenderer({antialias: true, alpha: true});
    renderer.setPixelRatio(window.devicePixelRatio);
    renderer.setSize(window.innerWidth / 2.5, window.innerHeight / 2.5);
    renderer.gammaOutput = true;
    //renderer.setClearColor( 0x000000, 0 );
    //container.appendChild( renderer.domElement );    
    document.getElementById('3dClo').appendChild(renderer.domElement);

    window.addEventListener('resize', onWindowResize, false);

    // stats
    // stats = new Stats();
    // container.appendChild( stats.dom );

}

function animate() {
    requestAnimationFrame(animate);
    renderer.render(scene, camera);
    // stats.update();
}

function onWindowResize() {
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(window.innerWidth / 2.5, window.innerHeight / 2.5);
}