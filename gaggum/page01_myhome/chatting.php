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
            font-family: 'Dongle', sans-serif;
            font-size: 30px;
}</style>
</head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<style>
*{ margin: 0; padding: 0; }
 
 .chat_wrap .header { font-size: 14px; padding: 15px 0; background: #F18C7E; color: white; text-align: center;  }
  
 .chat_wrap .chat { padding-bottom: 80px; }
 .chat_wrap .chat ul { width: 100%; list-style: none; }
 .chat_wrap .chat ul li { width: 100%; }
 .chat_wrap .chat ul li.left { text-align: left; }
 .chat_wrap .chat ul li.right { text-align: right; }
  
 .chat_wrap .chat ul li > div { font-size: 13px;  }
 .chat_wrap .chat ul li > div.sender { margin: 10px 20px 0 20px; font-weight: bold; }
 .chat_wrap .chat ul li > div.message { display: inline-block; word-break:break-all; margin: 5px 20px; max-width: 75%; border: 1px solid #888; padding: 10px; border-radius: 5px; background-color: #FCFCFC; color: #555; text-align: left; }
  
 .chat_wrap .input-div { position: fixed; bottom: 0; width: 100%; background-color: #FFF; text-align: center; border-top: 1px solid #F18C7E; }
 .chat_wrap .input-div > textarea { width: 100%; height: 80px; border: none; padding: 10px; }
  
 .format { display: none; }
 
 #x-icon{
            text-align: center;
            left: 90%;
            top: 20px;
            position: fixed;
 }
 

</style>

<body>
<div class="chat_wrap">
    <div class="header" style="font-size: 30px;">
       가꿈의 CHATTING
       <div id="x-icon" onclick="x_button()">
           <img src="../image/myhome/xicon.png">
       </div>
    </div>
    <div class="chat">
        <ul>
            <!-- 동적 생성 -->
        </ul>
    </div>
    <div class="input-div">
        <textarea placeholder="메시지를 입력해주세요."></textarea>
    </div>
 
    <!-- format -->
 
    <div class="chat format">
        <ul>
            <li>
                <div class="sender">
                    <span></span>
                </div>
                <div class="message">
                    <span></span>
                </div>
            </li>
        </ul>
    </div>
</div>

<script>
    function x_button(){
        history.back(-1)();
    }

const Chat = (function(){
    const myName = "day";
 
    // init 함수
    function init() {
        // enter 키 이벤트
        $(document).on('keydown', 'div.input-div textarea', function(e){
            if(e.keyCode == 13 && !e.shiftKey) {
                e.preventDefault();
                const message = $(this).val();
 
                // 메시지 전송
                sendMessage(message);
                // 입력창 clear
                clearTextarea();
            }
        });
    }
 
    // 메세지 태그 생성
    function createMessageTag(LR_className, senderName, message) {
        // 형식 가져오기
        let chatLi = $('div.chat.format ul li').clone();
 
        // 값 채우기
        chatLi.addClass(LR_className);
        chatLi.find('.sender span').text(senderName);
        chatLi.find('.message span').text(message);
 
        return chatLi;
    }
 
    // 메세지 태그 append
    function appendMessageTag(LR_className, senderName, message) {
        const chatLi = createMessageTag(LR_className, senderName, message);
 
        $('div.chat:not(.format) ul').append(chatLi);
 
        // 스크롤바 아래 고정
        $('div.chat').scrollTop($('div.chat').prop('scrollHeight'));
    }
 
    // 메세지 전송
    function sendMessage(message) {
        // 서버에 전송하는 코드로 후에 대체
        const data = {
            "senderName"    : "day",
            "message"        : message
        };
 
        // 통신하는 기능이 없으므로 여기서 receive
        resive(data);
    }
 
    // 메세지 입력박스 내용 지우기
    function clearTextarea() {
        $('div.input-div textarea').val('');
    }
 
    // 메세지 수신
    function resive(data) {
        const LR = (data.senderName != myName)? "left" : "right";
        appendMessageTag("right", data.senderName, data.message);
    }
 
    return {
        'init': init
    };
})();
 
$(function(){
    Chat.init();
});


</script>
</body>
</html>