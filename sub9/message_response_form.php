<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="Generator" content="Notepad++"/>
  <meta name="Author" content="최범희"/>
  <meta name="Keywords" content="최범희, 최범희 css 포트폴리오, css portfolio, Eunchae's css portfolio"/>
  <meta name="Description" content="최범희의 css 페이지 입니다"/> 
  <title>채팅 :부산시청</title>
  <link rel="stylesheet" href="../css/comm_layout2.css"/>
  <link rel="stylesheet" href="../css/main_layout.css"/>

  <link rel="stylesheet" href="css/message.css"/>

  <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon"/>
  <link rel="icon" href="../images/favicon.ico" type="image/x-icon"/> 
  <script src="../js/jquery-1.9.1.min.js"></script>
  <script src="../js/jquery-ui-1.10.4.custom.min.js"></script>
  <script src="../js/cookie.js"></script> 
  <script src="../js/date.js"></script> 
  <script src="../js/script.js"></script> 
<script>
  function check_input() {
      if (!document.message_form.subject.value.trim())
      {
          alert("제목을 입력하세요!");
          document.message_form.subject.focus();
          return;
      }
      if (!document.message_form.content.value.trim())
      {
          alert("내용을 입력하세요!");    
          document.message_form.content.focus();
          return;
      }
      document.message_form.submit();
   }
</script>
</head>
<body> 
<header>
    <?php include "header_sub.php";?>
</header>  
<section>
  <div id="message_box_wrap" class="cf">
      <div id="message_title">
        <h3>채팅<br><span>Web Messenger</span></h3>
        <img src="images/chatting_bg.png" width="150" height="150" alt="타이틀이미지">
      </div>
    <div id="message_box_sidebar2">
      <ul class="top_buttons">
        
          <li><span><a href="message_form.php">쪽지 보내기 </a></span></li>
          <li><span><a href="message_box.php?mode=rv">수신 쪽지함 </a></span></li>
          <li><span><a href="message_box.php?mode=send">송신 쪽지함</a></span></li>
      </ul>   
    </div>
    <div id="message_box">
      <h3 id="write_title">
          답변 쪽지 보내기
    </h3>
<?php
  $num  = $_GET["num"];

  $con = mysqli_connect("localhost", DBuser, DBpass, DBname);
  $sql = "select * from message where num=$num";
  $result = mysqli_query($con, $sql);

  $row = mysqli_fetch_array($result);
  $send_id      = $row["send_id"];
  $rv_id      = $row["rv_id"];
  $subject    = $row["subject"];
  $content    = $row["content"];

  $subject = "RE: ".$subject; 

  $content = "> ".$content; 
  $content = str_replace("\n", "\n>", $content);
  $content = "\n\n\n-----------------------------------------------\n".$content;

  $result2 = mysqli_query($con, "select name from members where id='$send_id'");
  $record = mysqli_fetch_array($result2);
  $send_name    = $record["name"];
?>    
      <form  name="message_form" method="post" action="message_insert.php?send_id=<?=$userid?>">
        <input type="hidden" name="rv_id" value="<?=$send_id?>">
        <div id="write_msg">
            <ul>
              <li>
                <span class="col1">보내는 사람 : </span>
                <span class="col2"><?=$userid?></span>
              </li> 
              <li>
                <span class="col1">수신 아이디 : </span>
                <span class="col2"><?=$send_name?>(<?=$send_id?>)</span>
              </li> 
              <li>
                <span class="col1">제목 : </span>
                <span class="col2"><input name="subject" type="text" value="<?=$subject?>"></span>
              </li>       
              <li id="text_area"> 
                <span class="col1">글 내용 : </span>
                <span class="col2">
                  <textarea name="content"><?=$content?></textarea>
                </span>
              </li>
            </ul>
            <button type="button" onclick="check_input()">보내기</button>
        </div>
      </form>
  </div> <!-- message_box -->
</div>
</section> 
<footer>
    <?php include "../footer.php";?>
</footer>
</body>
</html>
<script>
counter_init();
</script>