<?php

include 'header.php';

$kid=-1;
if (!isset($_GET['kid']) || !is_numeric($_GET["kid"]))
  die("Keine Korporation angegeben!");
else
  $kid=$_GET["kid"];

$mysqli = new mysqli($sccdbhost, $sccdbuser, $sccdbpassword, $sccdbname);
$mysqli->set_charset("utf8");

/* check connection */
if ($mysqli->connect_errno) {
  		die('Connect failed: '.$mysqli->connect_error.'\n');
}

if ($kid!=0) {

  if (delete_from_table("korporation", $kid, check_numeric($_SESSION['userid'])) === FALSE) {
    echo "Die Korporation konnte nicht gelöscht werden.";//. $mysqli->error;
  } else {
    echo "Die Korporation wurde gelöscht.";
  }

}
?>

<?php include 'footer.php'; ?>
