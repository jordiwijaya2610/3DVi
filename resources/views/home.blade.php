@extends('layout.navbar')
@section('content')
    <div class="container" style="display: flex; flex-direction: column; width:100%;">
       
            <div class="containerWelcome"style="display: flex; justify-content: center; align-items:center">
              <div class="containerSearchBar" style="display: flex; justify-content: center; width:fit-content;  align-items:center">
                <div class="containerSearchText" >
                  <input type="text" name="" id="" class="containerSearchTextInput" placeholder="Search">
                 
                </div>
                <div class="containerSearchIcon" >
                  <button class="containerSearchBtn">
                    <img src="search.png" alt="" style="width: 15px;height:15px">
                  </button>
                </div>
              </div>
             
            </div>
            <div class="containerTableOut" style="display: flex;">
              <div class="container" style="display: flex; flex-direction: column; align-items:center;width:fit-content">
                <div class="containerAddButton" style="display: flex; justify-content: flex-start; align-items:flex-start;width:100%">
                  <div class="containerAddBackground">
                    <button class="containerAddBtn">
                      <div class="containerTextAdd" style="display: flex; justify-content: center; width:fit-content;  align-items:center">
                        <div class="containerPlusIcon">
                          +
                        </div>
                        <div class="containerAddDiseaseText">
                          Add Disease
                        </div>
                      </div>
                    </button>
                  </div>
                 
  
                </div>
                <div class="containerTable" style="display: flex; justify-content: center;">
                  <div class="containerInsideTable">

                  
                  <table width= 100%; height=100%>
                      <tr style="line-height: 40px; height: 40px;">
                        <th  width= 40%;>Disease</th>
                        {{-- <th width= 40%>Disease Information</th> --}}
                        <th  width= 40%>Action</th>

                      </tr>
                      <tr  style="line-height: 40px; height: 40px;">
                        <td>Influenza</td>
                        <td style="text-align: center;">
                          <button class="buttonActions">
                            <img src="delete.png" alt="" style="width: 25px;height:25px">
                          </button>
                          <button class="buttonActions">
                            <img src="edit.png" alt="" style="width: 25px;height:25px">
                          </button>

                        </td>
                      </tr>
                      <tr  style="line-height: 40px; height: 40px;">
                        <td>Influenza</td>
                        <td style="text-align: center;">
                          <button class="buttonActions">
                            <img src="delete.png" alt="" style="width: 25px;height:25px">
                          </button>
                          <button class="buttonActions">
                            <img src="edit.png" alt="" style="width: 25px;height:25px">
                          </button>

                        </td>
                      </tr>
                      <tr  style="line-height: 40px; height: 40px;">
                        <td>Influenza</td>
                        <td style="text-align: center;">
                          <button class="buttonActions">
                            <img src="delete.png" alt="" style="width: 25px;height:25px">
                          </button>
                          <button class="buttonActions">
                            <img src="edit.png" alt="" style="width: 25px;height:25px">
                          </button>

                        </td>
                      </tr>
                      <tr  style="line-height: 40px; height: 40px;">
                        <td>Influenza</td>
                        <td style="text-align: center;">
                          <button class="buttonActions">
                            <img src="delete.png" alt="" style="width: 25px;height:25px">
                          </button>
                          <button class="buttonActions">
                            <img src="edit.png" alt="" style="width: 25px;height:25px">
                          </button>

                        </td>
                      </tr>
                      <tr  style="line-height: 40px; height: 40px;">
                        <td>Influenza</td>
                        <td style="text-align: center;">
                          <button class="buttonActions">
                            <img src="delete.png" alt="" style="width: 25px;height:25px">
                          </button>
                          <button class="buttonActions">
                            <img src="edit.png" alt="" style="width: 25px;height:25px">
                          </button>

                        </td>
                      </tr>
                      <tr  style="line-height: 40px; height: 40px;">
                        <td>Influenza</td>
                        <td style="text-align: center;">
                          <button class="buttonActions">
                            <img src="delete.png" alt="" style="width: 25px;height:25px">
                          </button>
                          <button class="buttonActions">
                            <img src="edit.png" alt="" style="width: 25px;height:25px">
                          </button>

                        </td>
                      </tr>
                      <tr  style="line-height: 40px; height: 40px;">
                        <td>Influenza</td>
                        <td style="text-align: center;">
                          <button class="buttonActions">
                            <img src="delete.png" alt="" style="width: 25px;height:25px">
                          </button>
                          <button class="buttonActions">
                            <img src="edit.png" alt="" style="width: 25px;height:25px">
                          </button>

                        </td>
                      </tr>
                      <tr  style="line-height: 40px; height: 40px;">
                        <td>Influenza</td>
                        <td style="text-align: center;">
                          <button class="buttonActions">
                            <img src="delete.png" alt="" style="width: 25px;height:25px">
                          </button>
                          <button class="buttonActions">
                            <img src="edit.png" alt="" style="width: 25px;height:25px">
                          </button>

                        </td>
                      </tr>
                      <tr  style="line-height: 40px; height: 40px;">
                        <td>Influenza</td>
                        <td style="text-align: center;">
                          <button class="buttonActions">
                            <img src="delete.png" alt="" style="width: 25px;height:25px">
                          </button>
                          <button class="buttonActions">
                            <img src="edit.png" alt="" style="width: 25px;height:25px">
                          </button>

                        </td>
                      </tr>
                      <tr  style="line-height: 40px; height: 40px;">
                        <td>Influenza</td>
                        <td style="text-align: center;">
                          <button class="buttonActions">
                            <img src="delete.png" alt="" style="width: 25px;height:25px">
                          </button>
                          <button class="buttonActions">
                            <img src="edit.png" alt="" style="width: 25px;height:25px">
                          </button>

                        </td>
                      </tr>
                      
                      {{-- <tr class="noBorder" style="line-height: 30px; height: 30px;">
                        <td style="border: none"></td>
                        <td style="border: none"></td>

                      </tr> --}}
                    
                    
                     
                     
                    </table>
                  </div>
                </div>
              </div>
                
                   
                
            </div>
            <div class="containerView" style="display: flex; justify-content: center;align-items: center; width:100%;">
                <a href="" class="btnViewHome">View Disease</a>
            </div>

    
    
    </div>

    
    
@endsection