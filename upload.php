<?php
$a = session_id();
if(empty($a)) session_start();

// echo "SID: ".SID."<br>session_id(): ".session_id()."<br>COOKIE: ".$_COOKIE["PHPSESSID"];

$url = '';
$uname = substr(preg_replace("/[^a-zA-Z]/", "", $_GET['u']),0,15);
echo $uname;
if($uname != ""){

  foreach(glob('upload/pic___'.$uname.'___*.jpeg') as $f) {
    unlink($f);
  }  
  $filename = 'pic___'.$uname.'___'.time().'.jpeg';
  $from = $_FILES['webcam']['tmp_name'];
  $to = 'upload/'.$filename;
  if( move_uploaded_file($from,$to) ){
    $url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/upload/' . $filename;
    echo $url;
   }
}else{
  echo 'No nickname: ';
}
?>