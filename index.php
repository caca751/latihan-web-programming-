<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'nav.php'; ?>

<div style="padding-left:16px">
    <center>
  <h2>Biodata</h2>
  <form method="post" action="" class="mb-4">
  <table style="width:40%; border-collapse: collapse;" border="1">
   <tr>
    <td>NIM</td>
    <td>:</td>
    <td><input type="number" name="nim" required></td>
   </tr>
   <tr>
    <td>NAMA</td>
    <td>:</td>
    <td><input type="text" name="nama" placeholder="Enter your name" required></td>
   </tr>
    <tr>
    <td></td>
    <td><button type="submit" name="kirim">submit</button>
   </td>
   </tr>
 </table>
 </form>
    <?php if (isset($_POST['kirim'])): ?>
   <strong>NIM:</strong> <?php echo isset($_POST['nim']) ? $_POST['nim'] :''; ?><br>
   <strong>NAMA:</strong> <?php echo isset($_POST['nama']) ? $_POST['nama'] :''; ?><br>
    <?php endif; ?>
</center>
 </div>

</body>
</html>