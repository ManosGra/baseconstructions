<?php
print_r($_POST);
if(isset($_POST["comment"]) && !empty($_POST["comment"])) {
mail("doudisfam@gmail.com", "Contact Form | ". isset($_POST["mail"]) ? $_POST["mail"]: '',
$_POST["comment"]);
}
?>