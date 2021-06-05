<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Selamat Datang di chat_wa</title>

	<!-- bootstrap 5 -->
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- <link href="assets/bootstrap/css/bootstrap-grid.css" rel="stylesheet"> -->
</head>

<body>

	<div class="container">
		<main>
			<div class="py-5 text-center">
				<img class="d-block mx-auto mb-4" src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" height="100px">
				<h2>Selamat Datang di chat_wa!</h2>
				<p class="lead">chat_wa merupakan web apps yang berguna untuk mengirimkan pesan whatsapp via web browser desktop ataupun mobile tanpa harus menyimpan nomor tujuan terlebih dahulu.</p>
			</div>

			<div class="row">

				<?php echo form_open('welcome/send_message', array('target' => '_blank')) ?>
				<div class="form-group mb-3"><label for="no_hp" class="form-label fw-bold">No. HP</label>
					<input type="text" class="form-control" name="no_hp" placeholder="Ex: +6287749585200 / 087749585200" required>
				</div>
				<div class="form-group"><label for="message" class="form-label fw-bold">Isi Pesan</label>
					<textarea name="message" rows="10" class="form-control" required></textarea>
				</div>

				<div class="mt-3"><button class="btn btn-success" type="submit">Kirim</button></div>
				</form>

			</div>
		</main>

		<footer class="my-5 pt-5 text-muted text-center text-small">
			<p class="mb-1">By <a href="https://amperakoding.com">AmperaKoding</a></p>
		</footer>
	</div>

</body>

</html>