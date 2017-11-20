<?php include("header.html"); ?> 
<!-- container pendaftaran langkah 2 : biodata-->
<div class="container-fluid">
	<div class="col-lg-2 col-md-2">
		<!-- memberi jarak 2 kolom kiri -->
	</div>
	<div class="col-lg-8 col-md-8 boxRegistrasi">
		<div class="text-left">
			<h4>Registrasi Tahap 2 : Biodata</h4>
		</div>
		<!-- countainer biodata -->
		<div class="">
			<div class="posisiHalaman">
				<!-- header halaman lokasi -->
				<p>
					<a href="#">Beranda</a>
					<span class="glyphicon glyphicon-chevron-right"></span>
					<a href="#">Persetujuan</a>
					<span class="glyphicon glyphicon-chevron-right"></span>
					<a href="#">Biodata</a>
				</p>
			</div>
			<div class="">
				<!-- konten halaman pendaftaran langkah 2 : biodata -->
				<form action="container_pendaftaran3.php" method="post">
					<div class="col-lg-5 col-md-5" style="border: 1px solid gray; margin-top: 10px; border-radius: 5px;">
						<h4 class="text-center" style="font-weight: bold;">Akun Detail</h4>
							<div class="form-group">
								<label for="lblUsername">Nama Pengguna : </label>
								<input type="text" name="namapengguna" class="form-control" placeholder="Masukan Nama Pengguna" required>
							</div>
							<div class="form-group">
									<label for="lblPassword1">Kata Sandi : </label>
									<input type="password" name="katasandi1" class="form-control" placeholder="Masukan Kata Sandi" required>
							</div>
							<div class="form-group">
									<label for="lblPassword2">Ulangi Kata Sandi : </label>
									<input type="password" name="katasandi2" class="form-control" placeholder="Ulangi Kata Sandi" required>
							</div>
							<div class="form-group">
									<label for="lblEmail">Email : </label>
									<input type="email" name="email" class="form-control" placeholder="Masukan Email" required>
							</div>
					</div>
					<div class="col-lg-7 col-md-7" style="border: 1px solid gray; margin-top: 10px; border-radius: 5px;">
						<h4 class="text-center" style="font-weight: bold;">Data Profil</h4>
							<div class="form-inline" style="margin-bottom: 10px;">
								<label for="lblTL" style="margin-right: 10px;">Tanggal Lahir : </label>
								<select class="form-control">
									<option>Tanggal</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
									<option>11</option>
									<option>12</option>
									<option>13</option>
									<option>14</option>
									<option>15</option>
									<option>16</option>
									<option>17</option>
									<option>18</option>
									<option>19</option>
									<option>20</option>
									<option>21</option>
									<option>22</option>
									<option>23</option>
									<option>24</option>
									<option>25</option>
									<option>26</option>
									<option>27</option>
									<option>28</option>
									<option>29</option>
									<option>30</option>
									<option>31</option>
								</select>
								<select class="form-control">
									<option>Bulan</option>
									<option>Januari</option>
									<option>Februari</option>
									<option>Maret</option>
									<option>April</option>
									<option>Mei</option>
									<option>Juni</option>
									<option>Juni</option>
									<option>Agustus</option>
									<option>September</option>
									<option>Oktober</option>
									<option>November</option>
									<option>Desember</option>
								</select>
								<select class="form-control">
									<option>Tahun</option>
									<option>1990</option>
									<option>1991</option>
									<option>1992</option>
									<option>1993</option>
									<option>1994</option>
									<option>1995</option>
								</select>
							</div>
					</div>
					<div class="col-lg-12 col-md-12" style="border: 1px solid gray; margin-top: 10px; border-radius: 5px;">
						<div class="form-group">
							<h4 class="text-left" style="font-weight: bold;">Vertifikasi</h4>
								<p>
									Berapa jumlah dari soal materimatika : <strong>2 + 2 = </strong>
									<input type="number" name="jawabanVertifikasi" maxlength="5" required>
								</p>
						</div>
						<div class="text-center">
							<button type="reset" class="btn btn-danger" style="margin-bottom: 10px; width: 150px; margin-right: 5%;">Reset Biodata</button>
							<button type="submit" class="btn btn-primary" style="margin-bottom: 10px; width: 150px; margin-left: 5%;">Kirim Pendaftaran</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-lg-2 col-md-2">
		<!-- memberi jarak 2 kolom kanan -->
	</div>
</div>
