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
            font-size: 37px;
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
            height:460px;
        }
        .art{
            margin:3px;
            position:relative;
        }
        .like{
            position:absolute;
        }
        .go_live_btn{
            top:700px;
            text-align: center;
            position:absolute;
        }
        .ticket-icon{
            text-align: center;
            left: 75%;
            top: 50px;
            position: fixed;
            color: #fff;
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
        .art_image{
            position:relative;
        }
        .art_text{
            position:absolute;
            text-align:left;
            top:50%;
            margin-left:40px;
            word-break:keep-all;
        }
        .art_title{
            color: #fff;
            font-weight:bold;
            font-size:19px;
        }
        .art_artist{
            color: #fff;
            font-size:13px;
        }
        .art_description{
            color: #fff;
            font-size:13px;
        }
        .tag{
            color: #BABABA;
            font-size:13px;
        }
        .like{
            position:absolute;
            top:15px;
            right:36px;
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
    
    <div class="ticket-icon" style=" float: left;">
            <img src="../image/Ticket.png"> 
            <div style="float: right; font-size: 18px;  color: #fff; margin-left: 2px;"> 380 </div>
    
    </div>
    
    <div>
        <div class="btn">
            <input id="input" type="text" placeholder="공연을 검색해 보세요" onkeyup="if(window.event.keyCode==13){search();}">
            <div style="margin-right:175px;">
                    <img class="hot" src="../image/art/hot_button.png"  style="margin-top:10px; padding-right:5px;">
                    <img src="../image/art/new_button.png"  style="margin-top:10px;">
            </div>
            <img src="../image/art/tag.png" style="margin-top:10px;">
        </div>
    </div>

    
    <div class="art_list"> 
        <div class="art">
            <div class="art_image">
                <img src="../image/art/draw_chicken.png" style="margin-top:10px;" onClick="location.href='art_page.php'">
            </div>
             <div  class="like">
                <img src="../image/art/like_empty.png" style="margin-top:10px;">
            </div>
            <div class="art_text">
                <div class="art_title">박박박의 미술관 특별 전시</div>
                <div class="art_artist">박박 외 4명</div>
                <div class="art_description">미래를 지향하는 여성작가들이 그리는 신비로운 미술의 세계 현재 신사동 박박박 미술관에서 현장 전시 중</div>
                <div class="tag">#박박박의_미술관 #미래 #유화</div>
            </div>
           
           
        </div>
        
        <div class="art">
            <div class="art_image">
                <img src="../image/art/draw_human.png" style="margin-top:10px;" onClick="location.href='art_page.php'">
            </div>
            <div  class="like">
                <img src="../image/art/like_empty.png" style="margin-top:10px;">
            </div>
            <div class="art_text">
                <div class="art_title">봄이 오는 소리</div>
                <div class="art_artist">김데이</div>
                <div class="art_description">봄을 그린 작품들을 소개합니다.</div>
                <div class="tag">#봄 #자연 #디지털아트</div>
            </div>
        </div>
        
        <div class="art">
            <div class="art_image">
                <img src="../image/art/draw_chicken.png" style="margin-top:10px;" onClick="location.href='art_page.php'">
            </div>
            <div  class="like">
                <img src="../image/art/like_empty.png" style="margin-top:10px;">
            </div>
            <div class="art_text">
                <div class="art_title">박박박의 미술관 특별 전시</div>
                <div class="art_artist">박박 외 4명</div>
                <div class="art_description">미래를 지향하는 여성작가들이 그리는 신비로운 미술의 세계 현재 신사동 박박박 미술관에서 현장 전시 중</div>
                <div class="tag">#박박박의_미술관 #미래 #유화</div>
            </div>
        </div>
        
        <div class="art">
            <div class="art_image">
                <img src="../image/art/draw_human.png" style="margin-top:10px;" onClick="location.href='art_page.php'">
            </div>
            <div  class="like">
                <img src="../image/art/like_empty.png" style="margin-top:10px;">
            </div>
            <div class="art_text">
                <div class="art_title">봄이 오는 소리</div>
                <div class="art_artist">김데이</div>
                <div class="art_description">봄을 그린 작품들을 소개합니다.</div>
                <div class="tag">#봄 #자연 #디지털아트</div>
            </div>
        </div>
        
    </div>
    
    <div class="go_live_btn" onclick="go_to_live()">
                <img src="../image/art/gotolive.png"  >
        </div>
   
    <script>
        
           
        
        function test(h){
            console.log("test");
        }
        function go_to_live(){
            location.href="../page03_livestreet/";
        }
        function back(){
            history.back(-1);
        }
        function search(){
            var input_val,art,art_title,art_artist,art_description,tag,i;
            input_val=document.getElementById('input').value;
           
            art=document.getElementsByClassName("art");
            
            for(i=0;i<art.length;i++){
                art_title=art[i].getElementsByClassName('art_title');
                art_artist=art[i].getElementsByClassName('art_artist');
                art_description=art[i].getElementsByClassName('art_description');
                tag=art[i].getElementsByClassName('tag');
                if(art_title[0].innerText.indexOf(input_val)<0
                    &&art_artist[0].innerText.indexOf(input_val)<0
                    &&art_description[0].innerText.indexOf(input_val)<0
                    &&tag[0].innerText.indexOf(input_val)<0){
                    art[i].style.display="none";
                }else{
                    art[i].style.display="block";
                }
            }
        }
        var j;
        var like_btn=document.getElementsByClassName('like');
        for(j=0;j<like_btn.length;j++){
           like_btn[j].addEventListener("click",e=>{
               var src_add=e.target.src;
               //console.log(typeof(src_add));
               if(src_add.indexOf("like_full.png")>-1){
                    e.target.src="../image/art/like_empty.png";
               }else if(src_add.indexOf("like_empty.png")>-1){
                   e.target.src="../image/art/like_full.png";
               }
                
           });
        }
    </script>
</body>
</html>