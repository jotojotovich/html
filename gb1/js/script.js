var logo = document.querySelector("#logo");
logo.onclick = function(){
	var logoText = document.querySelector("#logo-text");
	logoText.style.display = "block";
	logoText.style.margin = "0";
	logoText.innerText = "for you";
}