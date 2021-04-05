<!DOCTYPE html>
<html>
  <head>
    <title>
      Form Presensi
    </title>
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body>
    <!-- Register Section -->
    <div class="login-box">
    <h3>Isi Presensi Disini</h3>
    <form action="add_data.php" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="nama" value="" placeholder="e.g Budi">
                </td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>
                    <input type="text" name="nim" value="" minlength="9" maxlength="9" placeholder="Masukkan NIM" required>
                </td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Submit">&emsp;<input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>

  </body>

</html>
