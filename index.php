<?php
session_start();
if(isset($_SESSION["Salah"])){
    if($_SESSION["Salah"] >=3){
        echo '<h1>Akun Anda Terblokir</h1>';
        exit();
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <meta charset="UTF-8">
        <title>Tugas 2 WEB</title>
        <link rel="icon" href="assets/image/login_icon.png">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/floating-labels.css">
        <script src="assets/alert/dist/sweetalert2.js"></script>
        
        
    </head>
   <body>
        <form id="frm01" name="frm01" method="POST" action="login.php" class="form-signin">
            <div class="text-center mb-4">
                <img class="mb-2" width="100" height="100" src="assets/image/Loginicon184.png">
                <h1> Login </h1>
                <p> Masukkan Email & Password </p>
            </div>
            <form class="form-inline mt-2 mt-md-0">
                <div class="form-label-group">
                    <input onkeyup="coba();"class="form-control mb-3"
                           name="Input Email"
                           type="email"
                           required="yes"
                           id="Input Email"
                           placeholder="Email"
                           autofocus="yes"
                           autocompleted="no">
                <label for="Input Email">Email</label>
                <div class="form-label-group">
                    <input class="form-control mb-3"
                           name="Password"
                           type="password"
                           required="yes"
                           id="Password"
                           placeholder="Password">
                <label for="Password">Password</label>
                <div class="checkbox mb-3"
                     <label>
                         <input type="checkbox"> Ingat Password
                    </label>
                </div>
                <button style="width: 100px" class="btn-dark" name="submit"
                        type="submit">Masuk</button>
                    </form>
        </form>
       <script type="text/javascript" src="assets/js/jscript.js"></script>
    </body>
</html>
