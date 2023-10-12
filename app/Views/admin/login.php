<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('/css/admin/style_login.css') ?>">
</head>

<body>
	<form action="" method="post">
		<section>
			<div class="form-box">
				<div class="form-value">
					<form action="" method="post">
						<h2 class="text-oren">Login</h2>
						<div class="inputbox">
							<img src="<?= base_url('/images/username.png') ?>" width="20px">
							<input type="text" name="username" required>
							<label form="">Username</label>
						</div>
						<div class="inputbox">
							<img src="<?= base_url('/images/pw.png') ?>" width="20px">
							<input type="password" name="password" required>
							<label form="">Password</label>
						</div>
						<button style="background-color: rgb(226, 135, 67);" class="bg-oren" type="submit" name="submit"><a style="text-decoration: none; color: white;" href="home">Login</a></button>
					</form>
				</div>
			</div>
		</section>
	</form>
</body>