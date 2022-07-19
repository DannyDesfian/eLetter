<?php
    $db = mysqli_connect("localhost", "root", "", "eletter_inbox");
    
    $result = mysqli_query($db, "SELECT * FROM kasie1");

    $msg = "";

    if (isset($_POST['submit'])) {
        $target = "letter/".basename($_FILES['upload']['name']);

        $tglLaporan = mysqli_real_escape_string($db, $_POST['tglLaporan']);
        $laporan = mysqli_real_escape_string($db, $_POST['laporan']);
        $upload = $_FILES['upload']['name'];

        $sql = "INSERT INTO admin (tglLaporan, laporan, upload)
            VALUES ('$tglLaporan', '$laporan', '$upload')";
        mysqli_query($db, $sql);

        if (move_uploaded_file($_FILES['upload']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>E-Letter Compose</title>
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
            <form method="POST" enctype="multipart/form-data">
                <table border="0">
                	<tr><td><br><br></td></tr>
                    <tr><td></td><td><h2>Form Laporan</h2></td></tr>
                    <tr>
                        <td>Tanggal Laporan: </td>
                        <td><input type="text" value="" name="tglLaporan"/></td>
                    </tr>
                    <tr>
                        <td>Laporan: </td>
                        <td><textarea type="text" name="laporan" rows="10" cols="50"></textarea></td>
                    </tr>
                    <tr>
                        <td>Upload: </td>
                        <td><input type="file" value="" name="upload"/></td>
                    </tr>
                    <tr><td><br></td></tr>
                    <tr>
                        <td></td>
                        <td>
                            <button name="submit" type="submit">Submit</button>
                            <a href=kasie1page.php><button type="button">Back</button></a>
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>