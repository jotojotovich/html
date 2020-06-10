/*
$(document).ready(function(){
  $("#searchBtn").click(function(){
  var searchText = $("#searchText").val();
  if(searchText == "")
  {
    $(".aboutTarget").html("Цель - это...");
  }
 });
});
*/

// на кнопке searchBtn

$(document).ready(function() {
	$("#searchBtn").click(function(){ // клик по кнопке вызывает функцию
  var allTag = document.body.querySelectorAll("*"); // находим все div на странице
  var searchText = $("#searchText").val(); // считываем, что написано в поле ввода (value)
  if (searchText !== ""){
    for (var i in allTag) // в цикле сравниваем переменные
      {
      if (allTag[i].innerText == searchText)
      alert(allTag[i].innerText + " Найдено");
      }
   } 
  });
});

// найти скрытые и видимые элементы

$('element:visible');
$('element:hidden');

var i, count;
i = 0;
count = 0;

/*

<script>
		$(document).ready(function() {
			var name = "#name";
			var email = "#email";
			var subject = "#subject"
			var message = "#message";
			var s = 0;
			$("#done").click(function(){
     //          $(name).val("Имя, сестра!!!");
			  // $("#email").val("И мыло...");
              if($(name).val() == "" || $(name).val().length < 5){
              	//alert("Имя, сестра!!! не менее 5 символов");
              	$("#err").html("Имя, сестра!!! не менее 5 символов");
              	s++;
              }
              else if ($(email).val() == "" ){
              	//alert("И мыло!!!");
              	$("#err").html("И мыло!!!");
              	s++;
              }
              else if ($(subject).val() == ""){
              	//alert("Ты чо, не в теме?!");
              	$("#err").html("Ты чо, не в теме?!");
              	s++;
              }
              else if ($(message).val() == ""){
                //alert("Я не имею права отправлять такую туфту!!!");
                $("#err").html("Я не имею права отправлять такую туфту!!!");
                s++;
              }
              else {
                if (s <= 2){
              	$("#err").html("Слава яйцам!!! Ошибок: " + s);
              }
              	setTimeout(function(){
              		$("#err").html("");
              		//window.open("feedback.php");
              		}, 5000);
              	//window.open("index.php");
              	if (s > 2){
              			setTimeout(function(){
              			$("#err").html("Лошара!!! Ошибок: " + s + " Нажми на меня!!!");
              		 }, 5000);
              		 $("#err").click(function(){$("#err").html(""); s=0});
              		}
              }
			});
		});
	</script>

*/


// скрипты для урока 14. Гоша Дударь. Проверка полей Ajax + PHP
// 1. в файле feedback.php в head прописали путь к jquery c сайта google

// 2. в теге <script> следующий код

$(document).ready(function() {
	$("#done").click(function() {
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
	});
});

