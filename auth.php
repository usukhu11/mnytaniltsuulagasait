<?php
$correct_user = "admin";
$correct_pass = "1234";

if ($_POST['username'] === $correct_user && $_POST['password'] === $correct_pass) {
    header("Location: admin.html");
    exit();
} else {
    echo "Нууц үг эсвэл нэр буруу байна!";
}
?>
