<?php
$url = '';
$uname = $newstr = filter_var($_GET['u'], FILTER_SANITIZE_STRING);
if($uname != ""){
  $filename = 'pic_'.$uname. '.jpeg';
  $from = $_FILES['webcam']['tmp_name'];
  $to = 'upload/'.$filename;
  if( move_uploaded_file($from,$to) ){
    $url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/upload/' . $filename;
    echo $url;
   }
}else{
  echo 'No nickname';
}

?>