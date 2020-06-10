<?php 
$x = [5,2,3,1,4,0];
//print_r(count($x));

for ($i=0; $i < count($x)-1; $i++)
  {
  	for($j=0; $j < count($x)-$i-1; $j++)
  		{
  			if ($x[$j]>$x[$j+1])
  		  {
  		  	$buff = $x[$j];
  		  	$x[$j] = $x[$j+1];
  		  	$x[$j+1] = $buff;
  		  }
  		}
  }
echo '<pre>';
print_r($x);
echo '</pre>';
?>



subitem

function newAge(age){
  //$("#subitemMiddle").css("display","table-row");
  $("#navProfile").click();
  $("#subitemMiddle").css("height", "15px");
  setTimeout(function(){
   $("#changeInfoButton").click();
   console.info($("#age").attr("value"));
   $("#age").attr("value", age);
   console.info($("#age").attr("value"));
   $("#saveInfoButton").click();
   $("#subitemMiddle").css("display","none");
   //location.reload();
 }, 400)
};

newAge(1);


/**/

setTimeout(function(){
  console.clear();
}, 0
);

setTimeout(function(){newAge(0);
}, 500);


setTimeout(function(){
  $("#subitemMiddle").css("display","table-row");
  $("#subitemMiddle").css("z-index","-1000");
  $("#subitemCloseBtn").click();
 }, 7000
);



var 2


function newAge(age){
  //$("#subitemMiddle").css("display","table-row");
  $("#navProfile").click();
  $("#subitem").css("height", "15px");
  $("#subitem").css("z-index","-100");
  setTimeout(function(){
   $("#changeInfoButton").click();
   console.info($("#age").attr("value"));
   $("#age").attr("value", age);
   console.info($("#age").attr("value"));
   
   $("#saveInfoButton").click();
   
   //$("#subitem").css("display","none");
   //location.reload();
 }, 400)
};

newAge(1);

setTimeout(function(){
  console.clear();
}, 0
);

setTimeout(function(){newAge(55);
}, 500);


setTimeout(function(){
  //$("#subitem").css("display","block");
  $("#subitem").css("z-index","20");
  $("#subitemCloseBtn").click();
 }, 1000
);

setTimeout(function(){
  var currentAge = $("#infoPlace .textValue").text();
console.info(currentAge);
}, 3000);


