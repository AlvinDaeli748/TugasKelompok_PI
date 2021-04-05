<?php include "Connection/conn.php" ?>
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
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Waktu Presensi</th>
            </tr>
            </tr>
                    <?php
                        $data = $db->prepare("SELECT nama,nim,timestamp FROM data");
                        $data->execute();
                        
                        $hasil = $data;
                        $a = 1;
                        foreach($hasil as $x):
                    ?>
                <tr>
                    <td><?php echo $a++ ?></td>
                    <td><?php echo $x['nama']; ?></td>
                    <td><?php echo $x['nim']; ?></td>
                    <td><?php echo $x['timestamp']; ?></td>
                </tr>
                    <?php endforeach; ?>
        </table>

  </body>

</html>
