<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.0.1/model-viewer.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</head>
<body>
   
    <div class="container-fluid d-flex flex-row" style="">

            <div class="d-flex justify-content-start">
                <img src="Logo.png" style="width: 130px;height:70px;">
            </div>
            <div class="d-flex justify-content-start align-items-center">
                <a href="" class="btnView">View</a>
                {{-- <a href="" class="btnManage">Manage Disease</a> --}}
            </div>
            <div class="container-fluid d-flex justify-content-end align-items-center">
                {{-- <img src="Login.jpg" style="width: 27px; height:27px; "> --}}
               
                <img src="Logout.png" style="width: 27px; height:27px;">
            </div>
   
 

    </div>

    <div class="container.fluid ms-3 me-3"style="">
        <div class="background">
            @yield('content')
        </div>
    
    </div>
    
</body>
<footer>
    <div class="container" style="display: flex; justify-content: center; flex-direction: row; align-items: center; width:100%;">
        &copy; 3D Visualization
    </div>
</footer>
</html>

