<?php
$fileList = glob('upload/*');
// usort($fileList, create_function('$a,$b', 'return filemtime($b) - filemtime($a);'));
usort( $fileList, function( $a, $b ) { return filemtime($b) - filemtime($a); } );
foreach($fileList as $filename){
  $uname = preg_replace("/(.*)___(.*)___(.*)/", "$2", $filename);
  echo "<div class='images'>";
  echo "<img src='$filename' width=110 height= alt='$uname' title='$uname'>"; 
  echo "<label>$uname</label>";
  echo "</div>";
}
?>