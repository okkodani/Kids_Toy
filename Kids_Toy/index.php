<?php

include ("config.php");
$query = "SELECT * FROM barangmainan ORDER BY id DESC";
$result = mysqli_query($mysqli,$query );
?>

<html>
    <head>
          <title>Senarai Barangan Kids Toy</title>
    </head>
    <body>
    <center>
        <h2>SENARAI BARANGAN DAN HARGA</h2> 
        <fieldset>
            <table witdh='80%'border=0>
                <tr bgcolor='#CCCCCC'>
                    <td>Bil.</td>
                    <td>Nama Produk</td>
                    <td>Harga</td>
                    <td>Tindakan</td>
                </tr>

<?php
      $no=1;
      
      while($res = mysqli_fetch_array($result)) {
          echo "<tr>";  
          echo "<td>".$no; 
          echo "<td>".$res['nama']."</td>"; 
          echo "<td>".$res['harga']."</td>"; 
          echo "<td><a href=delete.php?id=$res[id] >hapus</a></td>";
          $no++;
      }
         ?>
            </table>
            <br><a href="add.php">Daftar Barang Baru</a>
    </center>
  </fieldset>
    </body>
</html>

