<!DOCTYPE html>
<html lang="en">
<link href="myhome.css" rel="stylesheet" type="text/css" />
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>가꿈</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dongle&family=Gothic+A1&family=Nanum+Gothic:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<style>
    body {
    background-image: url('../image/myhome/myhome.svg');
    margin: auto;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</head>
<body>
<div id="toast"></div>
<div class="menu-btn-modal" id="myhome-menu-icon">
    <img src="../image/myhome/menu_icon.png">
    </div>
    <div class="menu_modal">
        <div class="menu_modal_body" style="font-size: 20px; color: #484848; float: left;">
            <div id="menu-widget">
            <img src="../image/myhome/Widget.png">
            <br><br>창고<br><br>상점<br><br>초대하기<br><br>투데이랭킹<br><br>마이홈 둘러보기
           <br>
           <br>&nbsp-
           <br><br>아바타<br><br>
           <div style="color: #F9779D;">예술인의 집</div>
        </div>
        </div>
    </div>

    <div id="myhome-chatting-icon" onclick="chatting()">
    <img src="../image/myhome/chatting.png">
    </div>

<div class="ticket-icon" style=" float: left;">
        <img src="../image/Ticket.png"> 
        <div style="float: right; font-size: 18px;  color: #fff; margin-left: 2px;"> 380 </div></div>
    
    
        <div class="modal">
            <div class="modal_body">
            <div class="close-area" id="x-icon">
            <img src="../image/myhome/xicon.png">
            <div id="myhome-icon" onclick="myhome_link()">
            <img src="../image/myhome/Home.png">
            </div>
            <div id="friend-icon" onclick="ready_toast()">
            <img src="../image/myhome/friend.png">
            </div>
            <div id="setting-icon" onclick="ready_toast()">
            <img src="../image/myhome/setting.png">
            </div>
            <div id="dm-icon" onclick="ready_toast()">
            <img src="../image/myhome/DM.png">
            </div>
            <div id="art-btn" onclick="art_btn_link()">
            <img src="../image/myhome/art_btn.png">
            </div>
            </div>
            </div>
    </div>
    <div class="btn-open-modal" id="total-menu-icon" >
    <img src="../image/total_menu_icon.png" alt="">
    </div>

    
    <script>
        function ready_toast(){
        toast("서비스 준비 중입니다.")
    }
    let removeToast;


function toast(string) {
    const toast = document.getElementById("toast");

    toast.classList.contains("reveal") ?
        (clearTimeout(removeToast), removeToast = setTimeout(function () {
            document.getElementById("toast").classList.remove("reveal")
        }, 1500)) :
        removeToast = setTimeout(function () {
            document.getElementById("toast").classList.remove("reveal")
        }, 1500)
    toast.classList.add("reveal"),
        toast.innerText = string
}
        function chatting(){
            location.href="chatting.php";
        }

        function myhome_link(){
            location.href="index.php";
            //location.reload();
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
            location.href="location.html";
            //location.reload();
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