@extends('layout.navbar')
@section('content')
    <div class="container" style="display: flex; flex-direction: column; width:100%;">
     
            <div class="containerWelcome" style="display: flex; justify-content: center; width:100%;">
                Influenza
            </div>
            <div class="containerModel"style="display: flex; flex-direction: row; justify-content: space-evenly; align-content: center; ">
                    <div class="model"style="display: flex;flex-direction: column; justify-content: between; align-items:center" >
                        <button class="accordion" id="accordion">Disease Information</button>
                            <div class="panel">
                                <div class="panel-text">
                                    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.asdasdasdjkbnasojdnaskdnaklsdnakl;sdnaklsdnaklsdnaklsdnklasdnaklsdn</p>
                                </div>
                                
                            </div>
                    </div>
                    <div class="modelBackgroundView"style=" display: flex; flex-direction: column;">
                        <div class="container" style="display: flex; justify-content: center;">
                            <model-viewer style="height: 170px; width:170px" id="modelSkripsi1" src='../assets/body.glb' ar shadow-intensity="1" camera-controls touch-action="pan-y" disable-pan></model-viewer>
                        </div>
                        <div class="containerIconView" style="display: flex;flex-direction: row; justify-content: space-evenly;align-items: center;height:100%">
                            <div class="containerIcon">
                                <img src="body.png" style="width: 16px;height:16px;">
                            </div>
                            <div class="containerIcon">
                                <img src="muscle.png" style="width: 16px;height:16px;">
                            </div>
                            <div class="containerIcon">
                                <img src="organs.png" style="width: 16px;height:16px;">
                            </div>
                            <div class="containerIcon">
                                <img src="skeletal.png" style="width: 16px;height:16px;">
                            </div>
                        </div>
                       
                    </div>
             
            </div>
            <div class="containerView" style="display: flex; justify-content: center;align-items: center; width:100%;">
                <a href="" class="btnViewBack">Back</a>
            </div>

       
    
    </div>

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;
        var accordion = document.getElementById("accordion")
        
        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
              panel.style.display = "none";
              accordion.style.borderRadius= "20px";
              
            } else {
              panel.style.display = "block";
              accordion.style.borderBottomLeftRadius= "0px";
              accordion.style.borderBottomRightRadius= "0px";
             
            }
          });
        }
        </script>

    
    
@endsection


