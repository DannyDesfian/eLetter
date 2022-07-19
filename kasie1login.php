<?php
    $error='';
    if(isset($_POST['submit'])){
        if(empty($_POST['nip']) || empty($_POST['password'])){
            $error = "NIP or Password is Invalid";
        }else{
            $nip=$_POST['nip'];
            $password=$_POST['password'];
            $conn = mysqli_connect("localhost", "root", "");
            $db = mysqli_select_db($conn, "eletter_login");
            $query = mysqli_query($conn, "SELECT * FROM kasie1login WHERE nip='$nip' AND password='$password'");
            $rows = mysqli_num_rows($query);
            if($rows == 1){
                header("Location: kasie1page.php");
            }else{
                $error = "NIP or Password is Invalid";
            }
            mysqli_close($conn);
        }
    }
?>

<!doctype html>
<html lang=en>
    <head>
        <meta charset="utf-8">
        <title>E-Letter Login</title>
        <style>
            html, body {
                background-color: LIGHTGREY;
                color: BLACK;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
        </style>
    </head>
    <body>
        <center>
            <b><h2>Login Kasie Perencanaan IT</h2></b><br>
            <form method="post">
                <table>
                    <tr>
                        <td>NIP:</td><td><input type="text" id="nip" name="nip" size="20"></td>
                    </tr>
                    <tr>
                        <td>Password:</td><td><input type="password" id="password" name="password" size="20"></td>
                    </tr>
                    <tr><td></td><td><span><?php echo $error; ?></span></td></tr>
                    <tr>
                        <td></td>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Login">
                            <a href=index.php><button type="button">Back</button></a>
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>
