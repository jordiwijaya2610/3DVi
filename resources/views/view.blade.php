@extends('layout.navbar')
@section('content')
    <div class="container" style="display: flex; flex-direction: column; width:100%;">
     
            <div class="containerWelcome" style="display: flex; justify-content: center; width:100%;">
                Influenza
            </div>
            <div class="containerModel"style="display: flex; flex-direction: row; justify-content: space-evenly; align-content: center; ">
                    <div class="model"style="display: flex;flex-direction: column; justify-content: center; align-items:center" >
                        <button class="accordion" id="accordion">Disease Information</button>
                           
                            <div class="panel">
                                
                                <div class="panel-text">
                                    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.asdasdasdjkbnasojdnaskdnaklsdnakl;sdnaklsdnaklsdnaklsdnklasdnaklsdn</p>
                                </div>
                                <div class="lastUpdateText">
                                    Last update : 24 January 2023, 15:00
                                </div>
                                
                            </div>
                    </div>
                    <div class="modelBackgroundView"style=" display: flex; flex-direction: column;">
                        <div class="containerLegend" style="display: flex; justify-content: end;margin-top: 4px;margin-right:4px" >
                            <div class="containerColorLegend" style="height:120px;width:120px;display:flex;align-items: center;flex-direction: column;background-color: white;color:black;padding: 4px;border-radius:4px">
                                <div class="containerColorDisease" style="display: flex;justify-content: start;width:100%">
                                    <div class="containerColor" style="width:30px;height:30px;display: flex;justify-content: start">
                                        <div class="containerColor1" style="background-color: white;width:20px;height:20px;border-color: black;border-style:solid"></div>
                                    </div>
                                    <div class="containerColorText1"style="font-size:10px;display: flex;justify-content: start">
                                        Not Affected
                                    </div>
                                </div>
                                <div class="containerColorDisease"style="display: flex;justify-content: start;width:100%">
                                    <div class="containerColor"style="width:30px;height:30px;display: flex;justify-content: start" >
                                        <div class="containerColor2"style="background-color: yellow;width:20px;height:20px;border-color: black;border-style:solid"></div>
                                    </div>
                                    <div class="containerColorText2"style="font-size:10px">
                                        Slightly Affected
                                    </div>
                                </div>
                                <div class="containerColorDisease"style="display: flex;justify-content: start;width:100%">
                                    <div class="containerColor"style="width:30px;height:30px;display: flex;justify-content: start" >
                                        <div class="containerColor2"style="background-color: orange;width:20px;height:20px;border-color: black;border-style:solid"></div>
                                    </div>
                                    <div class="containerColorText2"style="font-size:10px">
                                        Moderately Affected
                                    </div>
                                </div>
                                <div class="containerColorDisease"style="display: flex;justify-content: start;width:100%">
                                    <div class="containerColor"style="width:30px;height:30px;display: flex;justify-content: start" >
                                        <div class="containerColor2"style="background-color: red;width:20px;height:20px;border-color: black;border-style:solid"></div>
                                    </div>
                                    <div class="containerColorText2"style="font-size:10px">
                                        Highly Affected
                                    </div>
                                </div>
                                
                                

                            </div>
                        </div>
                        <div class="container" style="display: flex; justify-content: center;">
                            <model-viewer style="height: 500px; width:300px" id="modelSkripsi1" src='../assets/body.glb' ar shadow-intensity="1" camera-controls touch-action="pan-y" disable-pan></model-viewer>
                        </div>
                        <div class="containerIconView" style="display: flex;flex-direction: row; justify-content: space-evenly;align-items: center;height:100%">
                            <div class="containerIcon">
                                <img src="body.png" style="width: 35px;height:35px;">
                            </div>
                            <div class="containerIcon">
                                <img src="muscle.png" style="width: 35px;height:35px;">
                            </div>
                            <div class="containerIcon">
                                <img src="organs.png" style="width: 35px;height:35px;">
                            </div>
                            <div class="containerIcon">
                                <img src="skeletal.png" style="width: 35px;height:35px;">
                            </div>
                        </div>
                       
                    </div>
             
            </div>
            {{-- <div class="containerView" style="display: flex; justify-content: center;align-items: center; width:100%;">
                <a href="" class="btnViewBack">Back</a>
            </div> --}}
            <div class="containerBtnView" style="display: flex; justify-content: space-between;align-items: center; width:100%;">
                <div class="containerViewEdit" style="display: flex; justify-content: end;align-items: center; width:100%;margin-right: 10px">
                    <a href="" class="btnViewEdit"><img src="/edit.png"style="width: 35px;height:35px;" alt=""></a>
                </div>
                <div class="containerViewDelete" style="display: flex; justify-content: start;align-items: center; width:100%;margin-left: 10px">
                    <a href="" class="btnViewDelete"><img src="/delete.png"style="width: 35px;height:35px;" alt=""></a>
                </div>
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


