<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Profil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .result h2 {
            margin-bottom: 10px;
            color: #007bff;
        }
        .result p {
            margin: 5px 0;
        }

        body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

nav {
  background-color: #333;
}

nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  text-align: center;
}

nav ul li {
  display: inline;
}

nav ul li a {
  display: inline-block;
  padding: 15px 20px;
  text-decoration: none;
  color: #fff;
}

nav ul li a:hover {
  background-color: #555;
}

/* Style untuk konten */
div {
  padding: 20px;
  margin-top: 20px;
}

h2 {
  margin-top: 0;
}
    </style>
</head>
<body>

<div>
  <nav>
    <ul>
      
      <li><a href="login.php"> Form  Login</a></li>
      <li><a href="profil.php"> Form Profil</a></li>
      <li><a href="loop.php"> Form Loop</a></li>
    </ul>
  </nav>
 
  </div>
    <div class="container">
        <h2>Informasi Profil</h2>
        <div class="result">
            <?php
            // NIM :2257401003
// NAMA:Deni Firmanda
// Kelas:MI22B
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nim = $_POST['nim'];
                $nama = $_POST['nama'];
                $kelas = $_POST['kelas'];
                $email = $_POST['email'];
                $no_hp = $_POST['no_hp'];

                echo "<p><strong>NIM:</strong> $nim</p>";
                echo "<p><strong>Nama:</strong> $nama</p>";
                echo "<p><strong>Kelas:</strong> $kelas</p>";
                echo "<p><strong>Email:</strong> $email</p>";
                echo "<p><strong>Nomor HP:</strong> $no_hp</p>";
            }
            ?>
        </div>
        <p><a href="profil.php">Kembali ke Form Profil</a></p>
    </div>
</body>
</html>
