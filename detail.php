<?php
require 'func.php'
?>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
	<!-- <title>Awonapa Bonsai - Menjual Produk Tanaman Bonsai</title> -->
</head>

<body>
	<div class="container">
		<div class="header text-center text-light">
			<h3 style="padding: 20px;">Awonapa Bonsai</h3>
			<div class="banner">
				<img src="bonsai.png" alt="">
			</div>
		</div>
		<hr>
		<nav class="navigasi">
			<ul>
				<li><a class="active" href="index.php">Home</a></li>
				<!-- <li><a href="#">Bonsai</a></li> -->
				<!-- <li><a href="#">About</a></li> -->
				<li><a href="admin/admin.php">Admin Page</a></li>
			</ul>
		</nav>
		<div class="section">
			<hr>
				<marquee behavior="" direction=""><b>Selamat Datang Di Awonapa Bonsai - Menjual Produk Tanaman Bonsai</b></marquee>
			<hr>
			<br>
		</div>
		<div class="center">
			<div class="box">
				<?php
						$id = $_GET["id"] ;
						$sql = "select * from t_artikel WHERE id = '$id'";
						$res = mysqli_query($con, $sql);
						while ($data = mysqli_fetch_array($res)) {
					?>

				<div class="isi" align="justify">
					<h2><?php echo $data["judul"]; ?></h2>
					<title><?php echo $data["judul"]; ?></title>
					<hr>
					<p class="by">by wahyu pambudi</p>
					<hr>
					<br>
					<img width="100%" src="img/<?php echo $data['gambar'];?>"/>
					<p style="margin-top: 5px"><?php echo $data["isi"]; ?></p><br><br>
					<div align="center">
						<a href="https://wa.me/6289682787161?text= Saya Mau Beli  <?php echo $data["judul"];  ?>" target="_blank"><button class="btn-info">Beli Melalui Whatsapp!!</button></a>
					</div>
					<hr>
				</div>
				<?php
					}
					?>
					
				<?php
							$id = $_GET["id"];
							$before = $id - 1;
							$after = $id + 1;
							$first = "SELECT id FROM t_artikel ORDER BY id ASC LIMIT 1";
							$res_f = mysqli_query($con, $first);
							$sql_a = "select * from t_artikel WHERE id = '$before'";
							$sql_b = "select * from t_artikel WHERE id = '$after'";
							$res_a = mysqli_query($con, $sql_a);
							$res_b = mysqli_query($con, $sql_b);
							while ($data = mysqli_fetch_array($res_a)) {
					?>
				<a href="detail.php?id=<?php echo($data['id'])?>"><button>Sebelumnya</button></a>
				<!-- <a href="index.php"><button>Kembali</button></a> -->
				<?php
					} while ($data = mysqli_fetch_array($res_b)) {
						while ($dataa = mysqli_fetch_array($res_f)) {
						if($dataa[0]) {
							?>
								<a href="index.php"><button>Kembali</button></a>
						<?php
						}
					};
						?>
				<a href="detail.php?id=<?php echo($data['id'])?>"><button>Berikutnya</button></a>
				<?php
					}
					?>
			</div>
		</div>
		<div class="right">
				<div class="box">
					<div class="isi" align="center">
						<h3>Profil Developer</h3><br>
						<img width="100%" src="img/wahyu.jpg" alt="wahyu" style="border-radius: 50%"><br>
						<div style="margin: 10px; display: inline;">
							<p>Wahyu Pambudi</p>
							<p>19312302</p>
							<p>Informatika 19 GX</p>
							<a href="https://api.whatsapp.com/send?phone=6289682787161&text=Assalamualaikum%20Wr%20Wb"><button class="btn-info">WhatsApp</button></a>
							<a href="https://www.linkedin.com/in/wahyup9/"><button class="btn-info">LinkedIn</button></a>
						</div>
					</div>
				</div>
				<div class="box">
					<div class="isi">
						<h3>Artikel Terbaru</h3>
						<?php
							$sql = "select id, judul, gambar from t_artikel order by id desc";
							$res = mysqli_query($con, $sql);
							$no = 0;
							while ($data = mysqli_fetch_array($res)) {
						?>
						<div style="margin-bottom: 5px;">
							<fieldset style="text-align: center; border-color: #F3F1F1">
								<legend>
									<h6 href="" style="padding: 5px; font-size: 15px;"><?php echo $data["judul"]; ?></h6>
								</legend>
								<a href="detail.php?id=<?php echo($data['id'])?>"><button class="btn-info">Baca Selengkapnya</button></a>
							</fieldset>
						</div>
						<?php
						}
						?>
					</div>
				</div>
			</div>
	</div>
	<div style="margin-bottom: 200px">

	</div>
</body>

</html>