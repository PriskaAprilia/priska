<html>
  <head>
      <title>ARRAY</title>
      </head>
      <body>
      <form action=""method="GET">
      <center><h1>FROMARRAY</h1></center>
      <fieldset>
      from array<br><br>
      <table>
      <tr>
      <td>Masuk jumlah</td>
      <td><input type ="number" min="1" name="jumlah" required</td>
      <tr>
      </table>
      <ol><input type ="submit" name="simpan" value="simpan"></ol>
      <hr>
      </form>
      <form action="anya.php" method="POST">
      <?php
       if(isset($_GET['simpan'])){
           $jml = $_GET['jumlah'];
           for($a=0; $a < $jml ; $a++){ ?>
              <label for=>Nama</table>
              <input type="text" name="nama[]" required>
              <label for => kelas</table>
              <input type ="text" name="kelas[]" required>
              <br><br>
           <?php } ?>
           <input type ="submit" name="sbm" value="simpan">
           <input type ="reset"  value="reset">
           </form>
       <?php } ?>

       </fieldset>
       </body>
       </html>
        