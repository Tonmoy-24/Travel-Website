<?php
    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con, 'contact');

    $email = null;
	$pass = null;
    $email = $_POST['email'];
	$pass = $_POST['pass'];
    $q = "SELECT * from admin";
    $query = mysqli_query($con, $q);
    $travese = mysqli_fetch_array($query);
    if($travese['id']==$email && $travese['pass']==$pass)
    {
    ?>
    <h2><em style="font-size: 30px; font-weight: 600;">Table Of Contact</em></h2>
        <table>
                <tr>
                    <th>First Name </th>
                    <th>Last Name</th>
                    <th>Email address</th>
                    <th>Text</th>
                </tr>
            <?php
                $q = "SELECT * from information";
                $query = mysqli_query($con, $q);
                while($travese = mysqli_fetch_array($query))
                {
            ?>
                <tr>
                    <td>
                        <?php echo $travese['fname'];?>
                    </td>
                    <td>
                        <?php echo $travese['lname'];?>
                    </td>
                    <td>
                        <?php echo $travese['email'];?>
                    </td>
                    <td>
                        <?php echo $travese['text'];
                        ?>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
        <br> <br>
            <a class="underlineHover" href="index.html">LOG-OUT</a>
        <?php
    }
    else{
        ?>
        <script>
            alert("Something wrong. Please check again. ");
            window.location="login.php";
        </script>
        <?php
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-In As Admin</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="anotherstyle.css">
    <script src="./scripts/jquery.min.js"></script>
    <style>
        td, tr, th{
            border: 1px solid white;
            padding: 5px ;
            text-align: left;
            color:white;
        }
        table{
            align-items: center;
            padding-left: 30%;
        }
        .underlineHover{
            font-size:15px;
            padding:10px;
        }
        .underlineHover:hover{
            color:black;
            background:white;
            cursor: pointer;
            transition:0.5s;
            font-weight:bold;
        }
    </style>
</head>

</html>