<!DOCTYPE html>
<html lang="en">
<link href="myhome.css" rel="stylesheet" type="text/css" />
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="가꿈">
    <meta property="og:image" content="../image/Frame.png">
    <meta property="og:description" content="나만의 예술적 페르소나를 찾아, 가꿈">
    <title>가꿈</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dongle&family=Gothic+A1&family=Nanum+Gothic:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js"></script>
<script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>
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
            <br><br><div onclick="storage_link()">창고</div>
           <br>상점<br><br>초대하기<br><br>투데이랭킹<br><br>마이홈 둘러보기
           <br>
           <br>&nbsp-
           <br><br>아바타<br><br>
           <div style="color: #F9779D;">예술인의 집</div><br>
          
<div id="btnTwitter" class="link-icon twitter" onclick="shareTwitter();">
    <img src="../image/myhome/icon-twitter.png">
</div>
<div id="btnFacebook" class="link-icon facebook" onclick="shareFacebook();">
<img src="../image/myhome/icon-facebook.png">
</div>    

<div id="btnInsta" class="link-icon Insta" onclick="shareInsta()">
<img src="../image/myhome/instagram.png">
</div> 

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
            <div id="friend-icon" onclick="friend_link()">
            <img src="../image/myhome/friend.png">
            </div>
            <div id="setting-icon" onclick=" setting_link()">
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
        function storage_link(){
    location.href="storage.html";
}
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
            location.href="chatting.html";
        }
        function myhome_link(){
            location.href="index.php";
            //location.reload();
        }
        function friend_link(){
            location.href="../page05_ect/cummu.html";           
        }
        function setting_link(){
            location.href="../page05_ect/setting.html";
            
        }
        function dm_link(){
            //location.href="/";
            location.reload();
        }
        function art_btn_link(){
            location.href="location.html";
            //location.reload();
        }

        //전체 메뉴 모달창
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
        //마이홈 메뉴 모달창
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
        function shareTwitter() {
    var sendText = "아티스트와 대중을 위한 메타버스 예술 활동 게임 플랫폼, 가꿈! 지금 바로 친구가 꾸민 마이홈을 구경하고, 작품도 보고, 수익까지!"; // 전달할 텍스트
    var sendUrl = "http://rainysunnyday.dothome.co.kr/gaggum/"; // 전달할 URL
    window.open("https://twitter.com/intent/tweet?text=" + sendText + "&url=" + sendUrl);
}
function shareFacebook() {
    var sendUrl = "http://rainysunnyday.dothome.co.kr/gaggum/"; // 전달할 URL
    window.open("http://www.facebook.com/sharer/sharer.php?u=" + sendUrl);
}
/*
function shareKakao() {
 
 // 사용할 앱의 JavaScript 키 설정
 Kakao.init('3ac41c95173666a3b731f1c658519327');

 // 카카오링크 버튼 생성
 Kakao.Link.createDefaultButton({
   container: '#btnKakao', // 카카오공유버튼ID
   objectType: 'feed',
   content: {
     title: "개발새발", // 보여질 제목
     description: "개발새발 블로그입니다", // 보여질 설명
     imageUrl: "devpad.tistory.com/", // 콘텐츠 URL
     link: {
        mobileWebUrl: "devpad.tistory.com/",
        webUrl: "devpad.tistory.com/"
     }
   }
 });
}
*/
function shareInsta(){
location.href="https://www.instagram.com/";
}
    </script>
</body>
</html>