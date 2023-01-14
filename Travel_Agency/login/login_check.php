<?php
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    if($email == "admin@gmail.com" && $pass == "admin"){
        ?>
        <script>
            alert("Welcome to Admin Page")
            window.location="../Admin_page/admin_homepage.html";
        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert("Somwthing Wrong. PLease check again ")
            window.location="./index.html";
        </script>
        <?php
    }
?>