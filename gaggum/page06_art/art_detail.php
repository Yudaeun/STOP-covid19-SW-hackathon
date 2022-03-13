<!DOCTYPE html>
<html lang="en">
<link href="../page01_myhome/myhome.css" rel="stylesheet" type="text/css" />
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>가꿈</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dongle&display=swap" rel="stylesheet">
<script src="http://code.jquery.com/jquery-latest.js"></script> 
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
        .art{
            text-align: center; 
            position:relative;
        }
        .ticket-icon{
            text-align: center;
            left: 75%;
            top: 50px;
            position: fixed;
            color: #fff;
        }
        .back_btn{
            text-align:center;
            top:30px;
            margin-left:15px;
            font-size: 50px;
            position: fixed;
            color: #fff;
        }
        .description_box{
            text-align: center; 
            width:100%;
            position:absolute;
            top:800px;
        }
        .description_txt{
            margin-top:10px;
            text-align:left;
            word-break:keep-all;
            position:absolute;
            margin-left:70px;
            margin-right:70px;
        }
        .title{
            font-weight:bold;
            font-size:23px;
            margin-bottom:30px;
        }
        .gray_txt{
            font-size:15px;
            color:#CACACA;
        }
        .black_txt{
            font-size:15px;
        }
        
    </style>
</head>

<body on="detectBottom()">
<div id="toast"></div>
        <div class="art">
            <img src="../image/art3/cover.png" width="396px">  
            
             <div class="description_box">
                <img src="../image/art3/Rectangle.png" width="396px"> 
                
            </div>
            <div class="description_txt">
                    <div class="title">
                        과제하기 싫은 여인
                    </div>
                    <div class="gray_txt">
                        작가
                    </div>
                    <div class="black_txt">
                        박박박
                    </div>
                    <p></p>
                    <div class="gray_txt">
                        Size
                    </div>
                    <div class="black_txt">
                        12x16” (30.5x40.6 cm)
                    </div>
                    <p ></p>
                    <div class="gray_txt">
                        작품
                    </div>
                    <div class="black_txt">
                        유화에 캔버스
                    </div>
                    <p style="margin-bottom:40px;"></p>
                    <hr color="#CACACA">
                    <div class="black_txt">
                    올해 아르코미술관 기획전시는 팬데믹 이후 이동 제한의 상황에서 변화한 이동의 의미를 살피는 주제 기획전 'To you: 당신의 방향'(2월24일~4월24일)으로 시작한다. 이어지는 기획초대전은 재외 한인 출신 작가인 곽영준과 사라 세진 장(Sara van der Heide)의 2인전(5월19일~7월17일)으로 국적, 젠더 등의 이분법적 정의를 해체하고 다중적 정체성과 그 함의를 탐구한다.  
                    </div>
                    <p></p>
                </div>
        </div>
            
            <div class="back_btn">
                    <img src="../image/art/back.png"  style="margin-top:10px;" onClick="history.back();">
                
                </div> 

                <div class="ticket-icon" style=" float: left;" onclick="point_toast();">
                        <img src="../image/Ticket.png"> 
                        <div style="float: right; font-size: 18px;  color: #fff; margin-left: 2px;"> 380 </div>
                </div>

                <script>
                     function point_toast(){
        toast("100 포인트가 적립되었습니다! 적립에는 최대 5분까지 소요될 수 있습니다.")
    }
    let removeToast;
function toast(string) {
    const toast = document.getElementById("toast");
    toast.classList.contains("reveal") ?
        (clearTimeout(removeToast), removeToast = setTimeout(function () {
            document.getElementById("toast").classList.remove("reveal")
        }, 2000)) :
        removeToast = setTimeout(function () {
            document.getElementById("toast").classList.remove("reveal")
        }, 2000)
    toast.classList.add("reveal"),
        toast.innerText = string
}
var data=0;

$(window).scroll(function(){ 
    var scrT = $(window).scrollTop();
  
     //console.log(scrT); 
     
     if(scrT >= 513 && data==0){ 
        point_toast();
        data=1;
    } else { 
       
     } })


</script>
</body>
</html>