<?php 
$mysqli = false;
function connectDB () {
  global $mysqli;
  $mysqli = new mysqli('localhost', 'root', '', 'dudbase1');
  $mysqli -> query('SET NAMES "utf-8"');
}
function closeDB () {
  global $mysqli;
  $mysqli -> close();
}
?>


# этот код можно и нужно будет убрать отсюда

for j in len(N)-1:
  if a[j] > a[j+1]: # 6 4
    a[j+1] = a[j] # 4 -> 6
    buff = a[j+1] # 
    a[j] = buff
