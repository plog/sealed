<?php
$fileList = glob('upload/*');
foreach($fileList as $filename){
  $uname = rtrim(ltrim(strstr($filename, '_'), '_'),'.jpeg');

  echo "<div class='images'>";
  echo "<img src='$filename' width=110 height= alt='$uname' title='$uname'>"; 
  echo "</div>";
}
?>