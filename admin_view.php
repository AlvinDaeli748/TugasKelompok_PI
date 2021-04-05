<html>
  <head>
    <title>
      View Data Presensi
    </title>
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
        <!-- Read Data from Database -->
        <h3>Data dari Database</h3>
        <form onsubmit="return confirm('Apakah Anda yakin ingin Logout ?');" action="logout.php">
             <input type="submit" value="Logout">
        </form>
        <table align="center">
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Email</th>
                <th colspan="2">Aksi</th>
            </tr>
        </table>

  </body>

</html>
