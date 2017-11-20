<?php include("header.html"); ?>
<?php $temp_user1 = $_POST['namapengguna']; ?>
<!-- container pendaftaran langkah 1 : persetujuan -->
<div class="container-fluid">
	<div class="col-lg-2 col-md-2">
		<!-- memberi jarak 2 kolom kiri -->
	</div>
	<div class="col-lg-8 col-md-8 boxRegistrasi">
		<div class="text-left">
			<h4>Registrasi Tahap 3 : Berhasil</h4>
		</div>
		<!-- countainer persetujuan -->
		<div class="">
			<div class="posisiHalaman">
				<!-- header halaman lokasi -->
				<p>
					<a href="#">Beranda</a>
					<span class="glyphicon glyphicon-chevron-right"></span>
					<a href="#">Persetujuan</a>
					<span class="glyphicon glyphicon-chevron-right"></span>
					<a href="#">Biodata</a>
					<span class="glyphicon glyphicon-chevron-right"></span>
					<a href="#">Berhasil</a>
				</p>
			</div>
			<div class="kontenHalaman text-center">
			<!-- sumber persetujuan hasil terjemahan dari mybb -->
				<p>
					Terima kasih telah mendaftar di Forum Bedah Karya, <strong><?php echo "$temp_user1"; ?></strong>.
					<br>
					Untuk menyelesaikan pendaftaran Anda, silakan cek email Anda untuk petunjuk aktivasi akun. Sampai Anda mengaktifkan account Anda mungkin tidak dapat posting di forum ini.
				</p>
				<div class="text-center">
					<a href="//hudsam.bikinkeren.co.id/bedahkarya" target="no-follow" class="btn btn-success" style="margin-bottom: 10px;">Kembali ke Beranda</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-2 col-md-2">
		<!-- memberi jarak 2 kolom kanan -->
	</div>
</div>
