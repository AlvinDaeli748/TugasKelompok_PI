<html>
  <head>
    <title>
      Form
    </title>
  </head>

  <body>
    <h3>Login Admin</h3>
    <form action="add_data.php" method="POST">
        <table>
          <tr>
              <td>Username</td>
              <td>
                  <input type="text" name="username" value="" minlength="8" placeholder="username" required>
              </td>
          </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="password" name="password" minlength="8" maxlength="16"  placeholder="password" required>
                </td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Login">&emsp;<input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>

  </body>

</html>
