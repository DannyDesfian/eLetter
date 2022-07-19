<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Admin Inbox</title>
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
            <form method="POST">
                <table border="5">
                	<br><br>
                    <tr>
                        <td>Tanggal Laporan</td>
                        <td>Laporan</td>
                        <td>Lampiran</td>
                    </tr>
                    <?php
                        $db = mysqli_connect("localhost", "root", "", "eletter_inbox");
                        $result = mysqli_query($db, "SELECT * FROM admin");
                        while ($row = mysqli_fetch_array($result)){
                    ?>
                            <tr>
                                <td> <?php echo "".$row['tglLaporan'].""; ?> </td>
                                <td> <?php echo "".$row['laporan'].""; ?> </td>
                                <td> <a target="_blank" href="letter/<?php echo "".$row['upload'].""; ?>">Link</a> </td>
                            </tr>
                    <?php
                        }
                    ?>
                </table>
                <br><br>
                <table border="0">
                    <tr>
                        <td></td>
                        <td>
                            <a href=adminpage.php><button type="button">Back</button></a>
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>