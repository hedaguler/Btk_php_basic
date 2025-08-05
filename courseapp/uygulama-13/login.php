<?php
require "libs/functions.php";
require "libs/variables.php";

session_start();

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == db_user["username"] && $password == db_user["password"]) {
        //şart sağlanıyorsa tarayıcıya bir cookie bırakmalıyız
        //cookie tanımlama(key,valu,süre)
        setcookie("auth[username]", db_user["username"], time() + (60 * 60 * 24));
        setcookie("auth[name]", db_user["name"], time() + (60 * 60 * 24)); //1 gün
        $_SESSION["message"] = $username . " ile giriş hesaba yapıldı .";
        header("Location: index.php");
    } else {
        echo "<div class='alert alert-danger mb-0 text-center'>Yanlış username ya da parola</div>";
    }
}
?>

<?php include "partials/_header.php" ?>
<?php include "partials/_navbar.php" ?>


<div class="container my-3">


    <div class="row">

        <div class=col-12>
            <form action="login.php" method="post"> <!--  submit butonuna tıklandığı zaman bizi login.php ye gönder -->
                <div class="mb-3">
                    <label for="username">Kullanıcı Adı </label>
                    <input type="text" name="username" class="form-control">
                    <div class="text-danger">
                    </div>

                    <div class="mb-3">
                        <label for="password">Parola </label>
                        <input type="password" name="password" class="form-control">
                        <div class="text-danger">

                        </div>

                        <button type="submit" class="btn btn-primary" name="login">Login </button>

            </form>


            <div>
                <div>
                    <div>
                        <?php include "partials/_footer.php" ?>