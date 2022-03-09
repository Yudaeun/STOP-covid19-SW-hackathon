<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>가꿈</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dongle&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: 'Nanum Gothic', sans-serif;
}
        body {
            background-image: url('../image/art/art_background.png');
            margin: auto;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .title{
            text-align:center;
            top:30px;
            margin-left:15px;
            font-size: 25px;
            position: fixed;
            color: #fff;
        }
        .btn{
            top:110px; 
            text-align: center;
            position: relative;
            
        }
        .art_list{
            top:120px;
            position:relative;
            text-align: center;
            overflow:scroll;
            height:400px;
        }
        .go_live_btn{
            top:700px;
            text-align: center;
            position:absolute;
        }
        input{
            width:330px;
            height: 32px;
            font-size: 15px;
            border: 0;
            border-radius: 10px;
            outline: none;
            padding-left: 10px;
        }
    </style>
    <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js"></script>
</head>

<body>
    <div class="title" onclick="back()">
        <img src="../image/art/back.png"  style="margin-top:10px;">
       미술전시
    </div> 

    <div>
        <div class="btn">
            <input type="text" placeholder="공연을 검색해 보세요">
            <div style="margin-right:175px;">
                    <img src="../image/art/hot_button.png"  style="margin-top:10px; padding-right:5px;">
                    <img src="../image/art/new_button.png"  style="margin-top:10px;">
            </div>
            <img src="../image/art/tag.png" >
        </div>
    </div>

    
    <div class="art_list"> 
        <img src="../image/art/draw1.png" style="margin-top:10px;">
        <img src="../image/art/draw2.png" style="margin-top:10px;">
        <img src="../image/art/draw1.png" style="margin-top:10px;">
        <img src="../image/art/draw2.png" style="margin-top:10px;">
    </div>
    
    <div class="go_live_btn" onclick="go_to_live()">
                <img src="../image/art/gotolive.png"  >
        </div>
   
    <script>
        function go_to_live(){
            location.href="../page03_livestreet/";
        }
        function back(){
            history.back(-1);
        }
    </script>
</body>
</html>