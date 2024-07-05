<?php
//ambil nilai variabel error
if (isset($_GET['error']))
{
   $error=$_GET['error'];
}
else
{
   $error="";
}
  
//siapkan pesan kesalahan
$pesan="";
if ($error=="variabel_belum_diset")
{
   $pesan="<h3>Maaf, anda harus mengakses halaman ini dari form.php</h3>";
}
if ($error=="nama_kosong")
{
   $pesan="<h3>Maaf, anda harus mengisi nama</h3>";
}
if ($error=="nama_harus_huruf")
{
   $pesan="<h3>Maaf, nama harus berupa huruf</h3>";
}
?>
  
<!DOCTYPE html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <title>invite teman</title>

   <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        input[type="text"] {
            width: 80%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .in {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .in:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
   <center>
   <h2>Masukan nama undangan</h2>
   <?php
   echo $pesan;
   ?>
   <form action="undangan.php" method="get">
      Nama: <input type="text" name="nama" />
      <br />
      
      <input type="submit" value="Proses Data" class="in">
   </form>
   </center>
</body>
</html>