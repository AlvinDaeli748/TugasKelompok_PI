<html>
  <head>
    <title>
      Form
    </title>
  </head>

  <body>
    <!-- Register Section -->
    <h3>Silahkan Register</h3>
    <form action="register.php" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="nama" value="" placeholder="e.g Alvin Daeli"
                </td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>
                    <input type="text" name="username" value="" minlength="9" maxlength="9" placeholder="masukkan NIM" required>
                </td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Register">&emsp;<input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>

  </body>

</html>
