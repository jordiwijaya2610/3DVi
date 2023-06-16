@extends('layout.navbar')
@section('content')
    <div class="container" style="display: flex; flex-direction: column; width:100%;">
            <div class="containerWelcome" style="display: flex; justify-content: center; width:100%;">
                Influenza
            </div>
            <div class="containerModel"style="display: flex; flex-direction: row; justify-content: space-evenly; align-content: center; ">
                    <div class="model"style="display: flex;flex-direction: column; justify-content: center; align-items:center" >
                        <div class="containerBackground">
                            <div class="containerAddDiseaseText"style="display: flex; justify-content: center; align-content: center; ">
                                Edit Disease
                            </div>
                            <div class="containerForm">
                                <div class="containerAddInput">
                                    <div class="containerEditText">
                                        <label for="DiseaseName">Disease Name</label>
                                        <input type="text" name="" id="DiseaseName" placeholder="Influenza" class="editInfoName">
                                    </div>
                                </div>
                                <div class="containerInfoInput">
                                    <div class="containerAddText">
                                        <label for="DiseaseInformation">Disease Information</label>
                                        <textarea id="DiseaseInformation" name="DiseaseInformation" maxlength="200" rows="4" cols="50" class="editInfoDisease" placeholder="Disease Information"></textarea>
                                  
                                        {{-- <input type="text" name="" id="" placeholder="Disease Name" class="InputInfo"> --}}
                                    </div>
                                </div>
                                <div class="containerColorInput">
                                    <div class="containerChooseText">
                                        <label for="">Choose a part</label>
                                    </div>
                                    <div class="containerChooseColorText">
                                        <label for="">Choose color</label>
                                    </div>
                                    <div class="containerColorInputModel">
                                        <div class="containerBackgroundColorInputModel">
                                            <div class="containerColorInputModelName">
                                                <label for="NeckColor">Brain</label>
                                            </div>
                                            <div class="containerColorInputModelColor">
                                                <div class="boxColorInput">
                                                    <input type="color" id="NeckColor" class="ColorInputModel" list="NeckColorID" value="#ffffff" name="NeckColor">
                                                    <input type="hidden" class="form-control" id="NeckName" placeholder="influenza" value="Neck" name="NeckName">
                                                    <datalist style="width: 10px;height:10px" id="NeckColorID" class="datalistColor">
                                                    <option value="#ffffff">
                                                    <option value="#42f55d">
                                                    <option value="#c5f542">
                                                    <option value="#f5a742">
                                                    <option value="#f54242">
                                                    </datalist>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="containerAdd">
                                    <a href="" class="btnAddDisease">Edit Disease</a>
                                </div>
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


