
var camera, scene, renderer;
var geometry, material, mesh;
var meshFloor;
var USE_WIREFRAME = false;

var div = document.createElement('div');
div.id = '3dClo';
div.style.height = '100vh';
div.style.display = 'flex';
document.getElementById("content").insertBefore(div, document.getElementsByClassName("product-flags")[0]);
init();
animate();

function init() {
    //мягкий окружающий свет
    Light = new THREE.AmbientLight(0x888888); //цвет
    
    //точечный источник света
    pointLight = new THREE.PointLight(0xffffff, 1.5, 18); //цвет, интенсивность, 3ий хз
    pointLight.position.set(0, 3, 1); //позиция
    pointLight.castShadow = true; //отбрасывает ли тени
    pointLight.shadow.camera.near = 0.1; //ближняя граница просчитывания
    pointLight.shadow.camera.far = 100; //дальняя граница просчитывания

    //камера
    camera = new THREE.PerspectiveCamera(50, window.innerWidth / window.innerHeight, 0.01, 4000); //глубина резкости, пропорции, ближняя граница просчитывания, и дальняя
    //camera = new THREE.PerspectiveCamera(50, 88 , 0.01, 4000);
    camera.position.set(1, 1, 1); //позиция
    camera.lookAt(new THREE.Vector3(0, 0, 0)); //куда камера смотрит
    
    //крутилка модели
    controls = new THREE.OrbitControls(camera, document.getElementById('3dClo'));
    controls.minPolarAngle = 1.4; //минимально возможное вращение по вертикали
    controls.maxPolarAngle = 1.4; //максимально возможное кручение по горизонтали
    controls.enablePan = false; //можно ли перетаскивать камеру мышкой

    //controls.target.set( -3000, 5000, 9000 );
    controls.update();
    
    //сцену создает
    scene = new THREE.Scene();
    
    //добавляет в сцену истояники света
    scene.add(Light);
    scene.add(pointLight);
    
    //материал для искусственной тени под моделью
    var mat = new THREE.MeshPhongMaterial();
    mat.map = new THREE.ImageUtils.loadTexture("modules/threejsviewport/views/img/gray+.png");//путь к картинке
    mat.transparent = true;//есть ли прозрачность
    mat.side = THREE.DoubleSide; //двухсторонняя ли
    mat.depthWrite = false; //хз
    //mat.color = new THREE.Color(0xff0000);
    
    //плоскость для искусственной тени
    meshFloor = new THREE.Mesh(
            new THREE.PlaneGeometry(0.7, 0.7, 0.7, 0.7),//размер х, размер у, размер полигональности по оси х, тоже по оси у
            mat //какой материал поверхности
            );
    meshFloor.rotation.x -= Math.PI / 2; //повернуть плоскость на 90 градусов(а то по умолчанию стоит вертикально)
    meshFloor.position.set(0, -0.5, 0); //опустить плоскость на 0.5(под ноги модели)
    meshFloor.receiveShadow = true; //рисовать ли тени на плоскости
    
    //добавить плоскость тени в сцену
    scene.add(meshFloor);

    // загрузчик модели
    var loader = new THREE.GLTFLoader();

    // грузануть glTF
    loader.load(
            // путь
            'modules/threejsviewport/views/models_3d/4.gltf',
            // вызываеться, когда модель загружена
                    function (gltf) {
                        /*  var bb = new THREE.Box3()
                         bb.setFromObject(gltf.scene);
                         bb.center(controls.target);
                         controls.update(); */
                        const myModel = gltf.scene;
                        
                        //перебирает ВСЕ поверхности модели и говорит им отбрасывать и рисовать тени(но не работает)
                        myModel.traverse(function (child) {
                            if (child.isMesh) {
                                child.castShadow = true;
                                child.receiveShadow = true;
                            }
                        });

                        // ресайз объекта до максимального размера в еденицу и постановка его в центр координат
                        var mroot = gltf.scene;
                        var bbox = new THREE.Box3().setFromObject(mroot);
                        //var cent = bbox.getCenter(new THREE.Vector3());
                        var size = bbox.getSize(new THREE.Vector3());
                        //Rescale the object to normalized space
                        var maxAxis = Math.max(size.x, size.y, size.z);
                        mroot.scale.multiplyScalar(1.0 / maxAxis);
                        bbox.setFromObject(mroot);
                        //bbox.getCenter(cent);
                        //bbox.center(controls.target);
                        //controls.update();
                        bbox.getSize(size);
                        //Reposition to 0,halfY,0
                        //mroot.position.copy(cent).multiplyScalar(-1);
                        mroot.position.y -= (size.y * 0.5);
                        scene.add(gltf.scene);
                    },
                    
                            // выполняеться пока все еще не загрузилось
                            function (xhr) {
                                console.log((xhr.loaded / xhr.total * 100) + '% loaded');
                            },
                            // когда есть ошибки
                                    function (error) {
                                        console.log('An error happened');
                                    }
                );
                            /*geometry = new THREE.BoxGeometry( 0.2, 0.2, 0.2 );
                             material = new THREE.MeshNormalMaterial();
                             mesh = new THREE.Mesh( geometry, material );
                             scene.add( mesh );*/
                            //renderer = new THREE.WebGLRenderer({ alpha: true });
                            
                            //блок конечной отрисовки
                            renderer = new THREE.WebGLRenderer({antialias: true, alpha: true});//сглаживание пикселизации, включение прозрачности
                            //renderer.setClearColor(0xEEEEEE);
                            renderer.setClearColor(0xaaaaaa, 0);//цвет фона, прозрачность от 0 до 1
                            renderer.shadowMap.enable = true; //включены ли тени
                            renderer.shadowMap.type = THREE.BasicShadowMap; //выбор типа теней
                            renderer.gammaOutput = true; //гамма-коррекция
                            renderer.gammaFactor = 2.2;  //какая гамма
                            //renderer.setPixelRatio( window.devicePixelRatio );
                            //document.body.appendChild( renderer.domElement );
                            renderer.domElement.style.width = "100%";
                            renderer.domElement.style.height = "100%";
                            //renderer.setSize(window.innerWidth, window.innerHeight); //размер экрана отрисовки
                                                                               
                            document.getElementById('3dClo').appendChild(renderer.domElement); //куда в HTML пихать экран отрисовки
                            //window.addEventListener( 'resize', onWindowResize, false ); //для адаптивности, событие при изменении размера экрана в реальном времени
                        }
// 1ый вариант функции для адаптивности 
// contenedor.clientWidth / contenedor.clientHeight; -это типа размеры берущиеся прям у бразуера пользователя
// window.innerWidth, window.innerHeight  - это какойто более стандартный способ взятия размеров экрана
//function onWindowResize() {
//camera.aspect = contenedor.clientWidth / contenedor.clientHeight; //тут берут размер экрана У ПОЛЬЗОВАТЕЛЯ
//camera.updateProjectionMatrix();
//renderer.setSize(contenedor.clientWidth, contenedor.clientHeight);
//}

    //функция финального рендера и для анимации
    function animate() {
    resizeCanvasToDisplaySize();
    requestAnimationFrame(animate);
    renderer.render(scene, camera);
    document.getElementsByClassName('images-container')[0].style.display = 'none';
    }

function resizeCanvasToDisplaySize() {
  const canvas = renderer.domElement;
  // look up the size the canvas is being displayed
  const width = canvas.clientWidth;
  const height = canvas.clientHeight;

  // adjust displayBuffer size to match
  if (canvas.width !== width || canvas.height !== height) {
    // you must pass false here or three.js sadly fights the browser
    renderer.setSize(width, height, false);
    camera.aspect = width / height;
    camera.updateProjectionMatrix();

    // update any render target sizes here
  }
}

clored.onclick = getreddress() {
    
  };