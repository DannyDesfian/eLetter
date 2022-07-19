<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Kasie 1 Inbox</title>
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
                        <td>Nomor Surat</td>
                        <td>Tanggal Surat</td>
                        <td>Perihal</td>
                        <td>Ringkasan Surat</td>
                        <td>Tanggal Disposisi</td>
                        <td>Isi Disposisi</td>
                        <td>Lampiran</td>
                    </tr>
                    <?php
                        $db = mysqli_connect("localhost", "root", "", "eletter_inbox");
                        $result = mysqli_query($db, "SELECT * FROM kasie2");
                        while ($row = mysqli_fetch_array($result)){
                    ?>
                            <tr>
                                <td> <?php echo "".$row['nomor'].""; ?> </td>
                                <td> <?php echo "".$row['tglSurat'].""; ?> </td>
                                <td> <?php echo "".$row['perihal'].""; ?> </td>
                                <td> <?php echo "".$row['ringkasan'].""; ?> </td>
                                <td> <?php echo "".$row['tglDisposisi'].""; ?> </td>
                                <td> <?php echo "".$row['isiDisposisi'].""; ?> </td>
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
                            <a href=kasie2page.php><button type="button">Back</button></a>
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>