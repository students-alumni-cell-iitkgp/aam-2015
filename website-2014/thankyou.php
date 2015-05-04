<?php
include_once("session.php");
include_once("include/database.php");
	extract($_POST);
	$photo="";
	$file="";

$objDB = new Database();
?>

<?php 
if($_FILES['file']['name'] == "") 
{
echo "No file selected </br>";
}
else
{
$allowedExts = array("doc", "pdf", "docx", "txt", "odt");
$extension = end(explode(".", $_FILES["file"]["name"]));
if ((($_FILES["file"]["type"] == "text/plain")
|| ($_FILES["file"]["type"] == "application/pdf")
|| ($_FILES["file"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document")
|| ($_FILES["file"]["type"] == "application/msword")
|| ($_FILES["file"]["type"] == "application/vnd.oasis.opendocument.text"))
&& ($_FILES["file"]["size"] < 2097152)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";

	  $filename = uniqid(rand(), true).$_FILES["file"]["name"];
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "yoy/" . $filename);
	  $file=$filename;
    

    }
  }
else
  {
  echo "Invalid file </br>";
  }
}
?>
<?php
if($_FILES['photo']['name'] == "") 
{
echo "No photo selected </br>";
}
else
{
$allowedExtsphoto = array("jpg", "jpeg", "gif", "png");
$extensionphoto = end(explode(".", $_FILES["photo"]["name"]));
if ((($_FILES["photo"]["type"] == "image/gif")
|| ($_FILES["photo"]["type"] == "image/jpeg")
|| ($_FILES["photo"]["type"] == "image/png")
|| ($_FILES["photo"]["type"] == "image/pjpeg"))
&& ($_FILES["photo"]["size"] < 1048576)
&& in_array($extensionphoto, $allowedExtsphoto))
  {
  if ($_FILES["photo"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["photo"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["photo"]["name"] . "<br />";
    echo "Type: " . $_FILES["photo"]["type"] . "<br />";
    echo "Size: " . ($_FILES["photo"]["size"] / 1024) . " Kb<br />";

      $photoname = uniqid(rand(), true).$_FILES["photo"]["name"];
      move_uploaded_file($_FILES["photo"]["tmp_name"],
      "photos/" . $photoname);
	  $photo=$photoname;
    }
  }
else
  {
  echo "Invalid photo </br>";
  }  
}
?>
<?php 
$rs=$objDB->addYoy($name,$dept,$degree,$hall,$batch,$email,$title,$writeup,$file,$photo);
	echo "Entry added.";
?>
<h1>Thank you.</h1>


