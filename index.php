<html>
  <head>
    <title>
      Form
    </title>
  </head>

  <body>
    <p>Hello World</p>

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
                <td>Username</td>
                <td>
                    <input type="text" name="username" value="" minlength="8" placeholder="e.g alvin123" required>
                </td>
            </tr>
            <tr>
                <td>E-Mail</td>
                <td>
                    <input type="email" name="email" value="" placeholder="e.g alvin@example.com"
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="password" name="password" minlength="8" maxlength="16"  placeholder="minimum 8 characters" required>
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
