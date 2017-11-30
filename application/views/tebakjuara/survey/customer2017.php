<!-- Intro Section -->
    <section id="intro" style="padding-top:100px">
        <div class="container">
            <?php echo form_open('survey/pelangganMNCPlay2017'); ?>
            <form role="form" method="post">
            <h1 style="text-align:center;font-size:30px;">Survey Pelanggan MNC Play 2017</h1>
            <div class="row">
				<input type="hidden" name="year" id="year" value="2017"/>
				<hr>
				<p> <?php echo form_error('name'); ?> </p>  
				<p> <?php echo form_error('email_pelanggan'); ?> </p>
				<p> <?php echo form_error('layanan'); ?> </p>
				<p> <?php echo form_error('kecepatan-akses-internet'); ?> </p>
				<p> <?php echo form_error('kestabilan-akses-internet'); ?> </p>
				<p> <?php echo form_error('kualitas-tayangan'); ?> </p>
				<p> <?php echo form_error('kelengkapan-channel'); ?> </p>
				<p> <?php echo form_error('tarif-berlangganan'); ?> </p>
				<p> <?php echo form_error('ketepatan-waktu'); ?> </p>
				<p> <?php echo form_error('jangka-waktu-perbaikan'); ?> </p>
				<p> <?php echo form_error('kemudahan-menghubungi-ccare'); ?> </p>
				<p> <?php echo form_error('kepuasan-pelayanan-ccare'); ?> </p>
				<p> <?php echo form_error('cara-hub-ccare'); ?> </p>
				<p> <?php echo form_error('jum-hub-ccare'); ?> </p>
				<p> <?php echo form_error('respond-ccare'); ?> </p>
				<p> <?php echo form_error('informasi-billing'); ?> </p>
				<p> <?php echo form_error('keakuratan-billing'); ?> </p>
				<p> <?php echo form_error('kemudahan-pembayaran'); ?> </p>
				<p> <?php echo form_error('kepuasan-pelanggan'); ?> </p>
				<p> <?php echo form_error('referensi'); ?> </p>
				<h3>Data Anda</h3>
                <div class="col-lg-12" id="area">
					<div class="panel-body">
                        <fieldset>
                            <!--div class="form-group">
							<label>ID Pelanggan</label-->
                                <input class="form-control" placeholder="ID Pelanggan" name="id_pelanggan" type="hidden" placeholder="XXXXXXXXXX" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength='10'>
                            <!--/div-->
                            <div class="form-group">
							<label>Nama Pelanggan</label>
                                <input class="form-control" placeholder="Nama Pelanggan" name="name" type="text" value="">
                            </div>
                            <div class="form-group">
							<label>Email Pelanggan (sesuai yang didaftarkan di layanan MNC Play)</label>
                                <input class="form-control" placeholder="Email Pelanggan" name="email_pelanggan" type="text" value="">
                            </div>
                            <div class="form-group">
							<label>Layanan yang digunakan</label>
                                <select name="layanan" class="form-control" id="level">
								   <option>- Pilih Layanan -</option>
								   <option value="1">Internet Only</option>
								   <option value="2">Internet & TV Kabel</option>
								</select>
                            </div>
                        </fieldset>
                </div>
                </div>
				
				<br/><hr>
				<h3>I. Kualitas Produk MNC Play</h3>
                <div class="col-lg-12" id="area">
					<div class="panel-body">
                        <fieldset>
                            <div class="form-group">
							<label class="col-lg-12">1. Kecepatan Akses Internet</label>
							<div class="col-lg-12">
                                <div class="radio col-lg-3">
								  <label><input type="radio" name="kecepatan-akses-internet" value="1">Sangat Cepat</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="kecepatan-akses-internet" value="2">Cepat</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="kecepatan-akses-internet" value="3">Lambat</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="kecepatan-akses-internet" value="4">Sangat Lambat</label>
								</div>
							</div>
							<div class="col-lg-12">
							<p style="margin:0px;">Isi kolom di bawah jika terdapat kendala untuk kecepatan akses internet</p>
								<textarea class="form-control" name="kecepatan-akses-internet-detail" rows="3"></textarea>
								<br/>
							</div>
                            </div>
                            <div class="form-group">
							<label class="col-lg-12">2. Kelancaran / Kestabilan Akses Internet</label>
							<div class="col-lg-12">
                                <div class="radio col-lg-3">
								  <label><input type="radio" name="kestabilan-akses-internet" value="1">Sangat Stabil</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="kestabilan-akses-internet" value="2">Stabil</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="kestabilan-akses-internet" value="3">Tidak Stabil</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="kestabilan-akses-internet" value="4">Sangat Tidak Stabil</label>
								</div>
							</div>
							<div class="col-lg-12">
							<p style="margin:0px;">Isi kolom di bawah jika terdapat kendala untuk kelancaran/kestabilan akses internet</p>
								<textarea class="form-control" name="kestabilan-akses-internet-detail" rows="3"></textarea>
								<br/>
							</div>
                            </div>
                            <div class="form-group">
							<label class="col-lg-12">3. Kualitas Gambar Tayangan TV Kabel MNC Play</label>
							<div class="col-lg-12">
                                <div class="radio col-lg-3">
								  <label><input type="radio" name="kualitas-tayangan" value="1">Sangat Baik</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="kualitas-tayangan" value="2">Baik</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="kualitas-tayangan" value="3">Tidak Baik</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="kualitas-tayangan" value="4">Sangat Tidak Baik</label>
								</div>
							</div>
							<div class="col-lg-12">
                                <div class="radio col-lg-3">
								  <label><input type="radio" name="kualitas-tayangan" value="0">Tidak Menggunakan TV Kabel</label>
								</div>
							</div>
							<div class="col-lg-12">
							<p style="margin:0px;">Isi kolom di bawah jika terdapat kendala untuk kualitas gambar tayangan TV Kabel</p>
								<textarea class="form-control" name="kualitas-tayangan-detail" rows="3"></textarea>
								<br/>
							</div>
                            </div>
                            <div class="form-group">
							<label class="col-lg-12">4. Kelengkapan Channel MNC Play</label>
							<div class="col-lg-12">
                                <div class="radio col-lg-3">
								  <label><input type="radio" name="kelengkapan-channel" value="1">Sangat Lengkap</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="kelengkapan-channel" value="2">Lengkap</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="kelengkapan-channel" value="3">Tidak Lengkap</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="kelengkapan-channel" value="4">Sangat Tidak Lengkap</label>
								</div>
							</div>
							<div class="col-lg-12">
                                <div class="radio col-lg-3">
								  <label><input type="radio" name="kelengkapan-channel" value="0">Tidak Menggunakan TV Kabel</label>
								</div>
							</div>
							<div class="col-lg-12">
							<p style="margin:0px;">Isi kolom di bawah jika terdapat usulan channel untuk ditambahkan</p>
								<textarea class="form-control" name="kelengkapan-channel-detail" rows="3"></textarea>
								<br/>
							</div>
                            </div>
                            <div class="form-group">
							<label class="col-lg-12">5. Tarif yang ditetapkan untuk Biaya Berlangganan Bulanan MNC Play</label>
							<div class="col-lg-12">
                                <div class="radio col-lg-3">
								  <label><input type="radio" name="tarif-berlangganan" value="1">Sangat Bersaing</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="tarif-berlangganan" value="2">Bersaing</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="tarif-berlangganan" value="3">Tidak Bersaing</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="tarif-berlangganan" value="4">Sangat Tidak Bersaing</label>
								</div>
							</div>
							<br/><br/>
                            </div>
                        </fieldset>
                </div>
                </div>
				<br/><hr>
				<h3>II. Produk Layanan Tambahan (Value Added Service)</h3>
                <div class="col-lg-12" id="area">
					<div class="panel-body">
                        <fieldset>
                            <div class="form-group">
							<label class="col-lg-12">6. Layanan Value Added Multimedia Interaktif apa yang Anda tertarik untuk gunakan?</label>
							<div class="col-lg-12">
                                <div class="checkbox col-lg-3">
								  <input type="hidden" name="vas-cctv" value="0">
								  <label><input type="checkbox" name="vas-cctv" value="1">CCTV</label>
								</div>
								<div class="checkbox col-lg-3" style="margin-top:10px;">
								  <input type="hidden" name="vas-vc" value="0">
								  <label><input type="checkbox" name="vas-vc" value="1">Video Call</label>
								</div>
								<div class="checkbox col-lg-6" style="margin-top:10px;">
								  <input type="hidden" name="vas-os" value="0">
								  <label><input type="checkbox" name="vas-os" value="1">Online Service (Games, Trade, Ticketing, Shopping)</label>
								</div>
							</div>
							<div class="col-lg-12">
							<p style="margin:0px;">Isi kolom di bawah jika terdapat tambahan untuk Layanan Value Added Multimedia Interaktif yang Anda tertarik untuk gunakan</p>
								<textarea class="form-control" name="vas-others" rows="3"></textarea>
								<br/>
							</div>
                            </div>
                        </fieldset>
                </div>
                </div>
				<br/><hr>
				<h3>III. Layanan Umum</h3>
                <div class="col-lg-12" id="area">
					<div class="panel-body">
                        <fieldset>
							<h4 style="font-weight:bold;">Instalasi dan Maintenance</h4>
                            <div class="form-group">
							<label class="col-lg-12">7. Ketepatan Waktu Kedatangan Tenaga Instalasi</label>
							<div class="col-lg-12">
                                <div class="radio col-lg-3">
								  <label><input type="radio" name="ketepatan-waktu" value="1">Sangat Tepat</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="ketepatan-waktu" value="2">Tepat</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="ketepatan-waktu" value="3">Tidak Tepat</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="ketepatan-waktu" value="4">Sangat Tidak Tepat</label>
								</div>
							</div>
							<br/><br/>
                            </div>
                            <div class="form-group">
							<label class="col-lg-12">8. Jangka Waktu Perbaikan apabila terjadi Problem / Kendala</label>
							<div class="col-lg-12">
                                <div class="radio col-lg-3">
								  <label><input type="radio" name="jangka-waktu-perbaikan" value="1">Sangat Cepat</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="jangka-waktu-perbaikan" value="2">Cepat</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="jangka-waktu-perbaikan" value="3">Lambat</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="jangka-waktu-perbaikan" value="4">Sangat Lambat</label>
								</div>
							</div>
							<div class="col-lg-12">
							<p style="margin:0px;">Isi kolom di bawah jika terdapat kendala untuk jangka waktu perbaikan apabila terjadi problem/kendala</p>
								<textarea class="form-control" name="jangka-waktu-perbaikan-detail" rows="3"></textarea>
								<br/>
							</div>
							<br/>
                            </div>
							<h4 style="font-weight:bold;">Contact Center</h4>
                            <div class="form-group">
							<label class="col-lg-12">9. Kemudahan menghubungi Contact Center</label>
							<div class="col-lg-12">
                                <div class="radio col-lg-3">
								  <label><input type="radio" name="kemudahan-menghubungi-ccare" value="1">Sangat Mudah</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="kemudahan-menghubungi-ccare" value="2">Mudah</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="kemudahan-menghubungi-ccare" value="3">Tidak Mudah</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="kemudahan-menghubungi-ccare" value="4">Sangat Tidak Mudah</label>
								</div>
							</div>
							<div class="col-lg-12">
							<p style="margin:0px;">Isi kolom di bawah jika terdapat kendala untuk kemudahan menghubungi Contact Center</p>
								<textarea class="form-control" name="kemudahan-menghubungi-ccare-detail" rows="3"></textarea>
								<br/>
							</div>
                            </div>
                            <div class="form-group">
							<label class="col-lg-12">10. Kepuasan Anda dengan pelayanan Agent Contact Center</label>
							<div class="col-lg-12">
                                <div class="radio col-lg-3">
								  <label><input type="radio" name="kepuasan-pelayanan-ccare"" value="1">Sangat Puas</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="kepuasan-pelayanan-ccare"" value="2">Puas</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="kepuasan-pelayanan-ccare"" value="3">Tidak Puas</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="kepuasan-pelayanan-ccare"" value="4">Sangat Tidak Puas</label>
								</div>
							</div>
							<div class="col-lg-12">
							<p style="margin:0px;">Isi kolom di bawah jika terdapat kendala untuk kepuasan pelayanan Agent Contact Center</p>
								<textarea class="form-control" name="kepuasan-pelayanan-ccare-detail" rows="3"></textarea>
								<br/>
							</div>
                            </div>
                            <div class="form-group">
							<label class="col-lg-12">11. Cara Anda dalam menghubungi Contact Center jika ada kendala yang dialami</label>
							<div class="col-lg-12">
                                <div class="radio col-lg-3">
								  <label><input type="radio" name="cara-hub-ccare" value="1">Contact Center 1500121</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="cara-hub-ccare" value="2">Email ccare.mncplay@mncgroup.com</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="cara-hub-ccare" value="3">Facebook</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="cara-hub-ccare" value="4">Twitter</label>
								</div>
							</div>
							<div class="col-lg-12">
							<p style="margin:0px;">Isi kolom di bawah jika ada media lain yang Anda gunakan dalam menghubungi Contact Center</p>
								<textarea class="form-control" name="cara-hub-ccare-detail" rows="3"></textarea>
								<br/>
							</div>
                            </div>
                            <div class="form-group">
							<label class="col-lg-12">12. Seberapa sering anda menghubungi Agent Contact Center dalam 3 bulan terakhir</label>
							<div class="col-lg-12">
                                <div class="radio col-lg-3">
								  <label><input type="radio" name="jum-hub-ccare" value="1">1 kali</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="jum-hub-ccare" value="2">2-3 kali</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="jum-hub-ccare" value="3">4-5 kali</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="jum-hub-ccare" value="4">> 5 kali</label>
								</div>
							</div>
							<div class="col-lg-12">
							<p style="margin:0px;">Isi kolom di bawah dengan alasan mengapa Anda menghubungi Contact Center</p>
								<textarea class="form-control" name="jum-hub-ccare-detail" rows="3"></textarea>
								<br/>
							</div>
                            </div>
                            <div class="form-group">
							<label class="col-lg-12">13. Respond dari Agent Contact Center</label>
							<div class="col-lg-12">
                                <div class="radio col-lg-3">
								  <label><input type="radio" name="respond-ccare" value="1">Sangat Puas</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="respond-ccare" value="2">Puas</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="respond-ccare" value="3">Tidak Puas</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="respond-ccare" value="4">Sangat Tidak Puas</label>
								</div>
							</div>
							<div class="col-lg-12">
							<p style="margin:0px;">Isi kolom di bawah jika terdapat kendala untuk respond pelayanan Agent Contact Center</p>
								<textarea class="form-control" name="respond-ccare-detail" rows="3"></textarea>
								<br/>
							</div>
							<br/>
                            </div>
							<h4 style="font-weight:bold;">Billing / Tagihan dan Pembayaran</h4>
                            <div class="form-group">
							<label class="col-lg-12">14. Pemberian Informasi Billing yang Anda terima</label>
							<div class="col-lg-12">
                                <div class="radio col-lg-3">
								  <label><input type="radio" name="informasi-billing" value="1">Tepat Waktu</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="informasi-billing" value="2">Terlambat</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="informasi-billing" value="3">Kadang Diterima</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="informasi-billing" value="4">Tidak Diterima</label>
								</div>
							</div>
							<br/><br/>
                            </div>
                            <div class="form-group">
							<label class="col-lg-12">15. Keakuratan Billing / Tagihan yang diterima</label>
							<div class="col-lg-12">
                                <div class="radio col-lg-3">
								  <label><input type="radio" name="keakuratan-billing" value="1">Sangat Akurat</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="keakuratan-billing" value="2">Akurat</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="keakuratan-billing" value="3">Tidak Akurat</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="keakuratan-billing" value="4">Sangat Tidak Akurat</label>
								</div>
							</div>
							<br/><br/>
                            </div>
                            <div class="form-group">
							<label class="col-lg-12">16. Kemudahan melakukan Pembayaran</label>
							<div class="col-lg-12">
                                <div class="radio col-lg-3">
								  <label><input type="radio" name="kemudahan-pembayaran" value="1">Sangat Mudah</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="kemudahan-pembayaran" value="2">Mudah</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="kemudahan-pembayaran" value="3">Tidak Mudah</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="kemudahan-pembayaran" value="4">Sangat Tidak Mudah</label>
								</div>
							</div>
							<div class="col-lg-12">
							<p style="margin:0px;">Isi kolom di bawah jika terdapat kendala untuk kemudahan melakukan pembayaran</p>
								<textarea class="form-control" name="kemudahan-pembayaran-detail" rows="3"></textarea>
								<br/>
							</div>
							<br/>
                            </div>
                        </fieldset>
                </div>
                </div>
				<p style="margin:10px;"><br/></p>
				<div class="col-lg-12" id="area">
					<div class="panel-body">
				        <fieldset>
                           <div class="form-group">
							<label class="col-lg-12">17. Apakah Anda Puas menggunakan Layanan MNC Play?</label>
							<div class="col-lg-12">
                                <div class="radio col-lg-3">
								  <label><input type="radio" name="kepuasan-pelanggan" value="1">Sangat Puas</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="kepuasan-pelanggan" value="2">Puas</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="kepuasan-pelanggan" value="3">Tidak Puas</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="kepuasan-pelanggan" value="4">Sangat Tidak Puas</label>
								</div>
							</div>
							<br/><br/>
                            </div>
                            <div class="form-group">
							<label class="col-lg-12">18. Maukah anda mereferensikan MNC Play kepada orang lain?</label>
							<div class="col-lg-12">
                                <div class="radio col-lg-3">
								  <label><input type="radio" name="referensi" value="1">Ya</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="referensi" value="2">Belum saat ini</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="referensi" value="0">Tidak</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  
								</div>
							</div>
							<div class="col-lg-12">
							<p style="margin:0px;">Jika Ya, mohon di informasikan data Referensinya</p>
								<textarea class="form-control" name="referensi-detail" rows="3"></textarea>
								<br/>
							</div>
							<br/>
                            </div>
                        </fieldset>
                </div>
				<div class="col-lg-12" id="area">
					<input name="date" type="hidden" value="<?php echo date('Y-m-d'); ?>">
                    <input type="submit" class="btn btn-primary btn-block" name="submit" value="Kirim Sekarang">
                </div><br/><br/>
				</div>
				<div class="col-lg-12" id="area">
				<br/>
				</div>
            </div>
        </div>
	</section>
	<div id="bgfooter">
		<span>&nbsp;</span><br/>
		<span>&nbsp;</span><br/>
		<span>&nbsp;</span><br/>
		<span>&nbsp;</span><br/>
		<span>&nbsp;</span><br/>
	</div>
            </form>
            <?php echo form_close(); ?>