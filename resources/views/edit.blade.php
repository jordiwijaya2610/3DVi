@extends('layout.navbar')
@section('content')
    <div class="container" style="display: flex; flex-direction: column; width:100%;">
            <div class="containerWelcome" style="display: flex; justify-content: center; width:100%;">
                Influenza
            </div>
            <div class="containerModel"style="display: flex; flex-direction: row; justify-content: space-evenly; align-content: center; ">
                    <div class="model" >
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


