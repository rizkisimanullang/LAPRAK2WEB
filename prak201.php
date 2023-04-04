<html>
 <head>
 <Title>Prak201</Title>
 </head>
 <body>
 <form action=" " method="POST">
 <label for="">Nama 1</label>
 <input type="text" name="nama1">
 <br>
 <label for="">Nama 2</label>
 <input type="text" name="nama2">
 <br>
 <label for="">Nama 3</label>
 <input type="text" name="nama3">
 <br>
        <button type="submit"
name="submit">Urutkan</button>
 </form>
 <?php
 if (isset ($_POST['submit'])) {
 // Menerima input dari web//
 $nama1 = $_POST['nama1'];
 $nama2 = $_POST['nama2'];
 $nama3 = $_POST['nama3'];
 //untuk mengurutkan sesuai abjad terkecil//
//kondisional nya//
 if ($nama1 < $nama2 && $nama1 < $nama3) {
 if ($nama2 < $nama3) {
 echo "$nama1<br>";
 echo "$nama2<br>";
 echo "$nama3<br>";
 } else {
 echo "$nama1<br>";
 echo "$nama3<br>";
 echo "$nama2<br>";
 }
 } else if ($nama2 < $nama1 && $nama2 <
$nama3) {
 if ($nama1 < $nama3) {
 echo "$nama2<br>";
 echo "$nama1<br>";
 echo "$nama3<br>";
 } else {
 echo "$nama2<br>";
 echo "$nama3<br>";
 echo "$nama1<br>";
 }
 } else {
 if ($nama1 < $nama2) {
 echo "$nama3<br>";
 echo "$nama1<br>";
 echo "$nama2<br>";
 } else {
 echo "$nama3<br>";
 echo "$nama2<br>";
 echo "$nama1<br>";
 }
 }
 }
 ?>
 </body>
</html>
