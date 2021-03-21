<?php
$file=$_POST["file"];
$file=$_POST["message"];
if (strlen($file) > 0 && strlen($message) > 0) {
    file_put_contents($file, $message, FILE_APPEND);
    file_put_contents($file, "\n", FILE_APPEND);
}
?>