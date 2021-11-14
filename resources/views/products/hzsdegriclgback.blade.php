<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 CRUD Application</title>
<style>
    
    .center3 {
            margin-top:25px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
        
        .idback-text{
            text-align: center;
             font-size: 20px;
             font-weight: bold;
             background-color: navy;
             color: yellow;
             width: 100%;
             padding-top: 7px;
             padding-bottom: 7px;
             

        }
</style>    
</head>
<body>
<div>
    <h1 class="idback-text" >STUDENT ID CARD</h1>
    <div class="center3">{!! QrCode::size(150)->backgroundColor(255,255,255)->generate('BM201603'); !!}</div>
    <h1 style="color: black; font-size: 17px; font-weight:blod; text-align:center; margin-top:25px;">ROMJAN AHAMED SOBUJ</h1>
    <p style="text-align: center;">Please send back the card to the <br> address given below if otherwise found</p>
    <h3 style="text-align: center;"> Hajigonj Degree College <br> Hajigonj, Chandpur <br>Phone: 01819483550/<br>01551-129744</h3>
</div>
</body>
</html>   