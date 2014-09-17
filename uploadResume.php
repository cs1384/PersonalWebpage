<?php

$result = move_uploaded_file($_FILES['file']['tmp_name'], "./resume.pdf");
header('Location:about.php');

?>
