<?php
    $db = mysqli_connect("localhost", "root", "", "eletter_inbox");
    $msg = "";

    if (isset($_POST['submit'])) {
        $target = "letter/".basename($_FILES['upload']['name']);

        $nomor = mysqli_real_escape_string($db, $_POST['nomor']);
        $tglSurat = mysqli_real_escape_string($db, $_POST['tglSurat']);
        $perihal = mysqli_real_escape_string($db, $_POST['perihal']);
        $ringkasan = mysqli_real_escape_string($db, $_POST['ringkasan']);
        $tglDisposisi = mysqli_real_escape_string($db, $_POST['tglDisposisi']);
        $isiDisposisi = mysqli_real_escape_string($db, $_POST['isiDisposisi']);
        $upload = $_FILES['upload']['name'];

        if(isset($_POST['kasie1inbox'])){
            $sql = "INSERT INTO kasie1 (nomor, tglSurat, perihal, ringkasan, tglDisposisi, isiDisposisi, upload)
                VALUES ('$nomor', '$tglSurat', '$perihal', '$ringkasan', '$tglDisposisi', '$isiDisposisi', '$upload')";
            mysqli_query($db, $sql);
        }
        if(isset($_POST['kasie2inbox'])){
            $sql = "INSERT INTO kasie2 (nomor, tglSurat, perihal, ringkasan, tglDisposisi, isiDisposisi, upload)
                VALUES ('$nomor', '$tglSurat', '$perihal', '$ringkasan', '$tglDisposisi', '$isiDisposisi', '$upload')";
            mysqli_query($db, $sql);
        }
        if(isset($_POST['kasie3inbox'])){
            $sql = "INSERT INTO kasie3 (nomor, tglSurat, perihal, ringkasan, tglDisposisi, isiDisposisi, upload)
                VALUES ('$nomor', '$tglSurat', '$perihal', '$ringkasan', '$tglDisposisi', '$isiDisposisi', '$upload')";
            mysqli_query($db, $sql);
        }

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
        <script language="JavaScript">
            function togglecheckboxes(master,group){
                var cbarray = document.getElementsByClassName(group);
                for(var i = 0; i < cbarray.length; i++){
                    var cb = document.getElementById(cbarray[i].id);
                    cb.checked = master.checked;
                }
            }
        </script>
    </head>
    <body>
        <center>
            <form method="POST" enctype="multipart/form-data">
                <table border="0">
                    <tr><td></td><td><h2>Form Surat</h2></td></tr>
                    <tr>
                        <td>Nomor Surat: </td>
                        <td><input type="text" value="" name="nomor"/></td>
                    </tr>
                    <tr>
                        <td>Tanggal Surat: </td>
                        <td><input type="text" value="" name="tglSurat"/></td>
                    </tr>
                    <tr>
                        <td>Perihal: </td>
                        <td><input type="text" value="" name="perihal"/></td>
                    </tr>
                    <tr>
                        <td>Ringkasan Surat<br>(Tempat, Tgl, Jam, Kegiatan, Dll): </td>
                        <td><textarea type="text" name="ringkasan" rows="10" cols="50"></textarea></td>
                    </tr>
                    <tr><td><br><br></td></tr>
                    <tr><td></td><td><h2>Form Disposisi</h2></td></tr>
                    <tr>
                        <td>Tanggal Disposisi: </td>
                        <td><input type="text value="" name="tglDisposisi"/></td>
                    </tr>
                    <tr>
                        <td>Isi Disposisi<br>(Tempat, Tgl, Jam, Kegiatan, Dll): </td>
                        <td><textarea type="text" name="isiDisposisi" rows="10" cols="50"></textarea></td>
                    </tr>
                    <tr>
                        <td>Upload: </td>
                        <td><input type="file" value="" name="upload"/></td>
                    </tr>
                    <tr>
                        <td>Pilih Kasie: </td>
                        <td><input type="checkbox" id="cbgroup1_master" onchange="togglecheckboxes(this,'cbgroup1')"> Select All<br>
                            <input type="checkbox" id="cb1_1" class="cbgroup1" name="kasie1inbox"> Kasie Perencanaan IT<br>
                            <input type="checkbox" id="cb1_2" class="cbgroup1" name="kasie2inbox"> Kasie Pengembangan Jaringan<br>
                            <input type="checkbox" id="cb1_3" class="cbgroup1" name="kasie3inbox"> Kasie Data Statistik
                        </td>
                    </tr>
                    <tr><td><br></td></tr>
                    <tr>
                        <td></td>
                        <td>
                            <button name="submit" type="submit">Submit</button>
                            <a href=adminpage.php><button type="button">Back</button></a>
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>