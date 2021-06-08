<?php
require 'func.php'
?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="style.css">
		<title>Awonapa Bonsai - Menjual Produk Tanaman Bonsai</title>
	</head>
	<body>
		<div class="container">
			<div class="header text-center text-light">
				<h3 style="padding: 20px;">Awonapa Bonsai</h3>
				<div class="banner">
					<img src="bonsai.png" alt="">
				</div>
			</div><hr>
			<nav class="navigasi">
				<ul>
					<li><a href="index.php">Home</a></li>
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
			<!-- <div class="left">
					<div class="box">
							<div class="isi">
									<h2>assalamualaikum</h2>
							</div>
					</div>
			</div> -->
			<div class="center">
				<?php
						$sql = "select * from t_artikel order by id asc";
						$res = mysqli_query($con, $sql);
						while ($data = mysqli_fetch_array($res)) {
							if(strlen($data["isi"] >= 40)) {
								echo $data["isi"];
							} else {
								$z = '....';
								$y = substr($data["isi"],0,320) .'<br><a href=detail.php?id='.$data["id"].'><button class="btn-info">Baca Selengkapnya</button></a>';
					};
				?>
				<div class="box">
					<div class="isi" align="justify">
						<h2 style="margin-bottom: 5px"><?php echo $data["judul"]; ?></h2>
						<hr>
						<p class="by">by wahyu pambudi</p>
						<hr>
						<br>
						<div class="left">
						<img width="100%" height="150px" src="img/<?php echo $data['gambar'];?>"/>
						</div>
						<p style="margin-top: 5px"><?php echo $y; ?></p><br><hr>	

						
					</div>
				</div>
				<?php
					}
				?>
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
								<img style="padding: 10px;" width="100%" height="150px" src="img/<?php echo $data['gambar'];?>"/>
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
	</body>
</html>