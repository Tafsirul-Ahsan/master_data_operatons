<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 CRUD Application</title>
<style>
    
    .logo{
        float:right;

    }
    .imgs{
        align-items: center;
        border-radius: 10%;
        width: 10%;
        height: 40%;

    }
    .img{
        background-color:teal;
        border-radius: 15%;
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 30%;

    }
    .detail-container {
        display: block;
        margin-left: auto;
        margin-right: auto;
        margin-top: 0px;
        width: 100%;
        
                
        }
        .font-bold {
            font-weight: bold; 
            font-size: 14px; 
            margin-left: 5%;
           
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 25%;
            }
        .center2 {
            margin-top:7px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 30%;
        }
        .center3 {
            margin-top:30px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
        .logo-bold{
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            margin: 0%;
                 }

        .header-text{
             text-align: center;
             font-size: 19px;
             font-weight: bold;
             margin: 0%;
             background-color: navy;
             color: white;
        }
        .idback-text{
            text-align: center;
             font-size: 20px;
             font-weight: bold;
             margin-top: 15px;
             background-color: navy;
             color: yellow;
             width: 100%;

        }
</style>    
</head>
<body>
<div>
    
    <img src="C:\xampp\htdocs\master_data_operatons\public\img\degreelogo.png" class="center">
    <h1 class="logo-bold">Est. 1969</h1>
    <h1 class="header-text">HAJIGONJ  DEGREE COLLEGE</h1>
    <img class="center2" src="C:\xampp\htdocs\master_data_operatons\public\img\student.png">
    <h1 style="color: blue; font-size: 17px; font-weight:blod; text-align:center;">ROMJAN AHAMED SOBUJ</h1>
    <div class="detail-container">
    <span class="font-bold">Class&nbsp; &nbsp; &nbsp;    : HSC XI-XII</span><br>
    <span class="font-bold">Roll&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; : BM201603</span><br>
    <span class="font-bold">Section&nbsp; &nbsp;: BM</span><br>
    <span class="font-bold">Year&nbsp; &nbsp; &nbsp;&nbsp; : 2020-21</span><br>
    <span class="font-bold">Mobile&nbsp; &nbsp;&nbsp;: 8801684-086753</span><br>
    </div>
    <img src="C:\xampp\htdocs\master_data_operatons\public\img\signdegree.png" width="100%">
    <h1 class="header-text">www.hajigonjdc.edu.bd</h1>
</div>
<div>
    <h1 class="idback-text" >STUDENT ID CARD</h1>
    <div class="center3">{!! QrCode::size(150)->backgroundColor(255,255,255)->generate('BM201603'); !!}</div>
    <h1 style="color: black; font-size: 17px; font-weight:blod; text-align:center; margin-top:25px;">ROMJAN AHAMED SOBUJ</h1>
    <p style="text-align: center;">Please send back the card to the <br> address given below if otherwise found</p>
    <h3 style="text-align: center;"> Hajigonj Degree College <br> Hajigonj, Chandpur <br>Phone:01819483550/<br>01551-129744</h3>
</div>
</body>
</html>   