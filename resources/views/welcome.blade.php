@extends('layout.navbar')
@section('content')
    <div class="container" style="display: flex; flex-direction: column; width:100%;">
       
            <div class="containerWelcome" style="display: flex; justify-content: center; width:100%;">
                Welcome to 3DVi
            </div>
            <div class="containerModel"style="display: flex; flex-direction: row; justify-content: space-evenly; align-content: center; width:100%;">

                    <div class="modelBackground"style="display: flex; justify-content: between; " >
                        <model-viewer style="height: 170px; width:170px" id="modelSkripsi1" src='../assets/body.glb' ar shadow-intensity="1" camera-controls touch-action="pan-y" disable-pan></model-viewer>
                    </div>
                    <div class="modelBackground"style=" display: flex; justify-content: between; ">
                        <model-viewer style="height: 170px; width:170px" id="modelSkripsi1" src='../assets/muscular.glb' ar shadow-intensity="1" camera-controls touch-action="pan-y" disable-pan></model-viewer>
                    </div>
                    <div class="modelBackground"style=" display: flex; justify-content: between; ">
                        <model-viewer style="height: 170px; width:170px" id="modelSkripsi1" src='../assets/organs.glb' ar shadow-intensity="1" camera-controls touch-action="pan-y" disable-pan></model-viewer>
                    </div>
                    <div class="modelBackground"style=" display: flex; justify-content: between; ">
                        <model-viewer style="height: 170px; width:170px" id="modelSkripsi1" src='../assets/skeletal.glb' ar shadow-intensity="1" camera-controls touch-action="pan-y" disable-pan></model-viewer>
                    </div>
             
            </div>
            <div class="containerView" style="display: flex; justify-content: center;align-items: center; width:100%;">
                <a href="" class="btnViewHome">View Disease</a>
            </div>

    
    
    </div>

    
    
@endsection