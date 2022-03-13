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
        .title{
            margin-top:100px;
            margin-left:30px;
            font-size: 30px;
            color: #fff;
        }
        .name{
            margin-top:10px;
            margin-left:30px;
            font-size: 16px;
            color: #CBCBCB;
        }
        .main_text{
            margin-top:10px;
            margin-left:30px;
            margin-right:30px;
            font-size: 15px;
            color: #CBCBCB;
            line-height:125%;
        }
        .draw{
            padding:0px;
        }
        #total-menu-icon{
            bottom:40px;
            left:45%;
            position: fixed;
        }
        .modal {
            position: absolute; 
            top: 0; 
            left: 0; 
            width: 100%; 
            height: 100%;
            display: none; 
            background-color: rgba(0, 0, 0, 0.4);
        }
        .modal_body { 
            position: fixed; 
            top: 50%; 
            left: 50%;
            width: 230px; 
            height: 480px; 
            padding: 40px; 
            text-align: center; 
            background-color: #F9B7BF; 
            border-radius: 40px; 
            box-shadow: inset 0px 0px 10px 5px rgba(34, 36, 38, 0.15); 
            transform: translateX(-50%) translateY(-50%); 
        }
        .menu_modal_body { 
            position: fixed; 
            top: 50%; 
            left: 19%;
            width: 230px; 
            height: 92%; 
            padding: 40px; 
            text-align: center; 
            background-color: #ffffff; 
            border-radius: 30px; 
            
            transform: translateX(-50%) translateY(-50%); 
         }
        #x-icon{
            text-align: center;
            left: 87%;
            top: 29px;
            position: fixed;
            }
        #friend-icon{
            text-align: center;
            left:14%;
            top: 255px;
            position: fixed;
        }
        #myhome-icon{
            text-align: center;
            left:18%;
            top: 85px;
            position: fixed;
        }
        #setting-icon{
            text-align: center;
            left:55%;
            top: 255px;
            position: fixed;
        }
        #dm-icon{
            text-align: center;
            left:53%;
            top: 71px;
            position: fixed;
        }
        #art-btn{
            text-align: center;
            left:14%;
            top: 425px;
            position: fixed;
            
        }
        
    </style>
    
</head>

<body>
    <div class="back_btn">
        <img src="../image/art/back.png"  style="margin-top:10px;" onClick="history.back();">
    
    </div> 

    <div class="ticket-icon" style=" float: left;">
            <img src="../image/Ticket.png"> 
            <div style="float: right; font-size: 18px;  color: #fff; margin-left: 2px;"> 380 </div>
    
    </div>
    
    <div>
        <div class="title">미래를 위한 전시</div>
        <div class="name">
            작가 박박박
            <img src="../image/art2/plus.png">
        </div>
       <div class="main_text">
       올해 아르코미술관 기획전시는 팬데믹 이후 이동 제한의 상황에서 변화한 이동의 의미를 살피는 주제 기획전 'To you: 당신의 방향'(2월24일~4월24일)으로 시작한다. 이어지는 기획초대전은 재외 한인 출신 작가인 곽영준과 사라 세진 장(Sara van der Heide)의 2인전(5월19일~7월17일)으로 국적, 젠더 등의 이분법적 정의를 해체하고 다중적 정체성과 그 함의를 탐구한다.  
       </div>
    </div>

    <div class="draw">
        <img src="../image/art2/draw6.png" onClick="location.href='art_detail.php'" width="375px" style="margin-left:10px; margin-top:10px;">
        <div>
            <div >
                <img src="../image/art2/draw3.png" style="margin-left:13px;" width="180px" onClick="location.href='art_detail.php'" >
                <img src="../image/art2/draw2.png" style="float:right; margin-right:13px;" height="360px;" onClick="location.href='art_detail.php'">
                <img src="../image/art2/draw5.png" width="180px" style="margin-left:13px;" onClick="location.href='art_detail.php'">
            </div>
            
        </div>
        <div>
            <img src="../image/art2/draw.png"width="180px" style="margin-left:13px;" onClick="location.href='art_detail.php'">
            <img src="../image/art2/draw4.png"width="180px" style="float:right; margin-right:13px;" onClick="location.href='art_detail.php'">        
        </div>
    </div>
    <div class="btn-open-modal" id="total-menu-icon" >
    <img src="../image/total_menu_icon.png" alt="">
    </div>

    <div class="modal">
            <div class="modal_body">
            <div class="close-area" id="x-icon">
            <img src="../image/myhome/xicon.png">
            <div id="myhome-icon" onclick="myhome_link()">
            <img src="../image/myhome/Home.png">
            </div>
            <div id="friend-icon" onclick="friend_link()">
            <img src="../image/myhome/friend.png">
            </div>
            <div id="setting-icon" onclick="setting_link()">
            <img src="../image/myhome/setting.png">
            </div>
            <div id="dm-icon" onclick="dm_link()">
            <img src="../image/myhome/DM.png">
            </div>
            <div id="art-btn" onclick="art_btn_link()">
            <img src="../image/myhome/art_btn.png">
            </div>
            </div>
            </div>
    </div>


    <script>
        function myhome_link(){
            //location.href="/";
            location.href="../page01_myhome/index.php";
        }
        function friend_link(){
            //location.href="/";
            location.reload();
        }
        function setting_link(){
            //location.href="/";
            location.reload();
        }
        function dm_link(){
            //location.href="/";
            location.reload();
        }
        function art_btn_link(){
            location.href="../page01_myhome/location.html";
        }
        const modal=document.querySelector(" .modal");
        const btnOpenPopup=document.querySelector(' .btn-open-modal');

        btnOpenPopup.addEventListener('click',()=>{
            modal.style.display='block';
        });

        const closeBtn = modal.querySelector(" .close-area");
        closeBtn.addEventListener("click", e => {
        modal.style.display = "none"
        });
        modal.addEventListener("click", e => {
        const evTarget = e.target;
        if(evTarget.classList.contains("modal")) {
            modal.style.display = "none"
         }
        });

        const menu_modal=document.querySelector(" .menu_modal");
        const MenubtnPopup=document.querySelector(' .menu-btn-modal');
        const myhome_chatting_icon=document.querySelector(' #myhome-chatting-icon');
        MenubtnPopup.addEventListener('click',()=>{
            menu_modal.style.display='block';
            myhome_chatting_icon.style.display="none"
        });
        menu_modal.addEventListener("click", e => {
        const evnTarget = e.target;
        if(evnTarget.classList.contains("menu_modal")) {
            menu_modal.style.display = "none"
            myhome_chatting_icon.style.display="block"
         }
        });


    </script>
</body>
</html>