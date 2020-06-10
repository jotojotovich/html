<!DOCTYPE html>
<html lang="ru">
<head>
	<?php
	$title = "Обратная связь";
	require_once("inc/head.php");
	?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
   $(document).ready(function() {
    $("#done").click(function() {
     $("#err").hide();
    var name = $("#name").val();
    var email = $("#email").val();
    var subject = $("#subject").val();
    var message = $("#message").val();
    var fail = "" // пустая переменная для проверки
    if (name.length < 3) fail = "Имя не менее 3 символов";
    else if (email.split("@").length-1 == 0 || email.split(".").length-1 == 0)
      fail = "Вы ввели некорректный e-mail";
    else if (subject.length<5)
      fail = "Тема сообщения менее 5 символов";
    else if (message.length<20)
      fail = "Сообщение не менее 20 символов";
    if (fail != ""){
      $("#err").html(fail);
      $("#err").show();
      return false;
    }
    $.ajax({
      url: "ajax/ajaxfeedback.php",
      statusCode:{
        200:function(){
        alert('OK');
        }},
      type: "POST",
      cache: false,
      data: {name: name, email: email, subject: subject, message: message},
      //dataType: "html",
      success: function(data){
        $("#err").html(data);
        $("#err").show();
      }
    });
  });
}); 
  </script>
</head>
<body>

<!-- header -->
	<?php require_once("inc/header.php"); ?>
<!-- end header -->



<div class="wrapper">
<!-- content -->
<div class="leftCol">
	<h2>Напишите нам</h2>
	<div class="bigArticle flex">
	  <input class="input" type="text" placeholder="Имя" id="name" name="name">
	  <input class="input" type="text" placeholder="Email" id="email" name="email">
	  <input class="input" type="text" placeholder="Тема сообщения" id="subject" name="subject">
	  <textarea class="input" name="message" id="message" placeholder="Текст сообщения"></textarea>
	  <div id="err"></div>
	  <input class="input" type="button" name="done" id="done" value="Отправить">
	</div>
</div>
<!-- end content -->


<!-- sidebar -->
		<?php require_once("inc/sidebar.php") ?>
<!-- end sidebar -->
	</div>


<!-- footer -->
<?php require_once("inc/footer.php"); ?>
<!-- end footer -->

<?php
/*
echo "name:" . $name . "<br>";
echo $email . "<br>";
echo $subject . "<br>";
echo $message . "<br>";
*/
?>

</body>
</html>