<!-- Intro Section -->
    <section id="intro" style="padding-top:100px">
        <div class="container">
            <?php echo form_open('survey/survey2017'); ?>
            <form role="form" method="post">
            <h1 style="text-align:center;font-size:30px;">Employee Satisfaction Survey 2017</h1>
            <div class="row">
				<input type="hidden" name="year" id="year" value="2017"/>
				<br/><hr>
				<p> <?php echo form_error('nik'); ?> </p>  
				<p> <?php echo form_error('direktorat'); ?> </p>  
				<p> <?php echo form_error('level'); ?> </p> 
				<p> <?php echo form_error('yearofstay'); ?> </p>  
				<p> <?php echo form_error('lingkungan-kerja'); ?> </p>
				<p> <?php echo form_error('atasan'); ?> </p>  
				<p> <?php echo form_error('kesempatan-belajar'); ?> </p>  	
				<p> <?php echo form_error('jenjang-karir'); ?> </p>   
				<p> <?php echo form_error('empowerment'); ?> </p>  
				<p> <?php echo form_error('apresiasi'); ?> </p> 
				<p> <?php echo form_error('rekomendasi'); ?> </p> 
                <div class="col-lg-12" id="area">
				<p>Mohon partisipasi Anda mengisi survey berikut. Masukan Anda sangat berharga untuk peningkatan kualitas MNC Play dan pengembangan kita bersama.</p>
					<div class="panel-body">
                        <fieldset>
                            <div class="form-group">
							<label>Masukkan 8 Digit terakhir NIK anda</label>
                                <input type="text" name="nik" class="form-control" placeholder="XXXXXXXX" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength='8'>
                            </div>
                            <div class="form-group">
							<label>Direktorat</label>
                                <select name="direktorat" class="form-control" id="direktorat">
								   <option>- Pilih Direktorat -</option>
								   <option value="1">Bussines Operations</option>
								   <option value="2">Commercial</option>
								   <option value="3">Engineering & Infrastructure</option>
								   <option value="4">Finance & Accounting</option>
								   <option value="5">GGOD</option>
								</select>
                            </div>
                            <div class="form-group">
							<label>Level</label>
                                <select name="level" class="form-control" id="level">
								   <option>- Pilih Level -</option>
								   <option value="1">Officer</option>
								   <option value="2">Supervisor - AM</option>
								   <option value="3">Manager</option>
								   <option value="4">Manager +</option>
								</select>
                            </div>
                            <div class="form-group">
							<label>Lama Bekerja</label>
                                <select name="yearofstay" class="form-control" id="yearofstay">
								   <option>- Pilih Lama Bekerja -</option>
								   <option value="1">< 1 Tahun</option>
								   <option value="2">1-2 Tahun</option>
								   <option value="3">> 2 Tahun</option>
								</select>
                            </div>
                        </fieldset>
                </div>
                </div>
				
				<br/><hr>
                <div class="col-lg-12" id="area">
				<p>Berdasarkan pengamatan anda selama tahun 2016,  tingkat kepuasan Anda terhadap:</p>
					<div class="panel-body">
                        <fieldset>
                            <div class="form-group">
							<label class="col-lg-12">1. LINGKUNGAN KERJA : Hubungan dengan rekan - rekan kerja di unit Anda maupun rekan kerja di unit lain</label>
							<div class="col-lg-12">
                                <div class="radio col-lg-3">
								  <label><input type="radio" name="lingkungan-kerja" id="lingkungan-kerja" value="1">Sangat Puas</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="lingkungan-kerja" id="lingkungan-kerja" value="2">Puas</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="lingkungan-kerja" id="lingkungan-kerja" value="3">Kurang Puas</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="lingkungan-kerja" id="lingkungan-kerja" value="4">Tidak Puas</label>
								</div>
							</div>
                            </div><br/>
                            <div class="form-group">
							<label class="col-lg-12">2. ATASAN: Hubungan dengan atasan langsung, kadept, kadiv maupun direktur Anda</label>
							<div class="col-lg-12">
                                <div class="radio col-lg-3">
								  <label><input type="radio" name="atasan" id="atasan" value="1">Sangat Puas</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="atasan" id="atasan" value="2">Puas</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="atasan" id="atasan" value="3">Kurang Puas</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="atasan" id="atasan" value="4">Tidak Puas</label>
								</div>
							</div>
                            </div><br/>
                            <div class="form-group">
							<label class="col-lg-12">3. KESEMPATAN BELAJAR: Kesempatan untuk mengembangkan diri & kompetensi dalam pekerjaan Anda sehari -hari maupun penugasan khusus misal: project</label>
							<div class="col-lg-12">
                                <div class="radio col-lg-3">
								  <label><input type="radio" name="kesempatan-belajar" id="kesempatan-belajar" value="1">Sangat Puas</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="kesempatan-belajar" id="kesempatan-belajar" value="2">Puas</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="kesempatan-belajar" id="kesempatan-belajar" value="3">Kurang Puas</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="kesempatan-belajar" id="kesempatan-belajar" value="4">Tidak Puas</label>
								</div>
							</div>
                            </div><br/>
                            <div class="form-group">
							<label class="col-lg-12">4. JENJANG KARIR: Kesempatan mengembangkan karir ke jenjang yang lebih tinggi atau yang sesuai dengan aspirasi Anda, termasuk promosi</label>
							<div class="col-lg-12">
                                <div class="radio col-lg-3">
								  <label><input type="radio" name="jenjang-karir" id="jenjang-karir" value="1">Sangat Puas</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="jenjang-karir" id="jenjang-karir" value="2">Puas</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="jenjang-karir" id="jenjang-karir" value="3">Kurang Puas</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="jenjang-karir" id="jenjang-karir" value="4">Tidak Puas</label>
								</div>
							</div>
                            </div><br/>
                            <div class="form-group">
							<label class="col-lg-12">5. EMPOWERMENT: Tanggung jawab & wewenang yang diberikan kepada Anda dalam pekerjaan sehari - hari</label>
							<div class="col-lg-12">
                                <div class="radio col-lg-3">
								  <label><input type="radio" name="empowerment" id="empowerment" value="1">Sangat Puas</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="empowerment" id="empowerment" value="2">Puas</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="empowerment" id="empowerment" value="3">Kurang Puas</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="empowerment" id="empowerment" value="4">Tidak Puas</label>
								</div>
							</div>
                            </div><br/>
                            <div class="form-group">
							<label class="col-lg-12">6. APRESIASI:  Pengakuan & Penghargaan yang Anda terima atas kinerja Anda</label>
							<div class="col-lg-12">
                                <div class="radio col-lg-3">
								  <label><input type="radio" name="apresiasi" id="apresiasi" value="1">Sangat Puas</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="apresiasi" id="apresiasi" value="2">Puas</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="apresiasi" id="apresiasi" value="3">Kurang Puas</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="apresiasi" id="apresiasi" value="4">Tidak Puas</label>
								</div>
							</div>
                            </div><br/>
                        </fieldset>
                </div>
                </div>
				<br/><br/><hr>
				<div class="col-lg-6" id="area">
				<div class="panel-body">
				<p style="margin:0px;">Sebutkan 3 hal yang diperlukan untuk meningkatkan kinerja unit Anda:</p><br/>
                        <fieldset>
                            <div class="form-group">
							<div class="col-lg-12">
                                <ol type="A">
									<li>Disiplin</li>
									<li>Konsistensi</li>
									<li>Manajemen Operasional</li>
									<li>Kontrol & Pengawasan</li>
									<li>Role Model</li>
									<li>Komunikasi</li>
									<li>Efektif Meeting</li>
									<li>Koordinasi & Kerjasama Antar Bagian</li>
									<li>Problem Solving</li>
									<li>Planning & Organizing</li>
								</ol>
							</div>
                            </div><br/><br/>
                        </fieldset>
						<fieldset style="margin:10px;">
                            <div class="form-group">
							<div class="col-lg-12">
							<label>Pilihan 1</label>
                                <select name="pilihan1" class="form-control" id="pilihan1">
								   <option>- Pilih -</option>
								   <option value="Disiplin">Disiplin</option>
								   <option value="Konsistensi">Konsistensi</option>
								   <option value="Manajemen Operasional">Manajemen Operasional</option>
								   <option value="Kontrol & Pengawasan">Kontrol & Pengawasan</option>
								   <option value="Role Model">Role Model</option>
								   <option value="Komunikasi">Komunikasi</option>
								   <option value="Efektif Meeting">Efektif Meeting</option>
								   <option value="Koordinasi & Kerjasama Antar Bagian">Koordinasi & Kerjasama Antar Bagian</option>
								   <option value="Problem Solving">Problem Solving</option>
								   <option value="Planning & Organizing">Planning & Organizing</option>
								</select>
							</div>
                            </div>
                        </fieldset>
						<fieldset style="margin:10px;">
                            <div class="form-group">
							<div class="col-lg-12">
							<label>Pilihan 2</label>
                                <select name="pilihan2" class="form-control" id="pilihan1">
								   <option>- Pilih -</option>
								   <option value="Disiplin">Disiplin</option>
								   <option value="Konsistensi">Konsistensi</option>
								   <option value="Manajemen Operasional">Manajemen Operasional</option>
								   <option value="Kontrol & Pengawasan">Kontrol & Pengawasan</option>
								   <option value="Role Model">Role Model</option>
								   <option value="Komunikasi">Komunikasi</option>
								   <option value="Efektif Meeting">Efektif Meeting</option>
								   <option value="Koordinasi & Kerjasama Antar Bagian">Koordinasi & Kerjasama Antar Bagian</option>
								   <option value="Problem Solving">Problem Solving</option>
								   <option value="Planning & Organizing">Planning & Organizing</option>
								</select>
							</div>
                            </div>
                        </fieldset>
						<fieldset style="margin:10px;">
                            <div class="form-group">
							<div class="col-lg-12">
							<label>Pilihan 3</label>
                                <select name="pilihan3" class="form-control" id="pilihan1">
								   <option>- Pilih -</option>
								   <option value="Disiplin">Disiplin</option>
								   <option value="Konsistensi">Konsistensi</option>
								   <option value="Manajemen Operasional">Manajemen Operasional</option>
								   <option value="Kontrol & Pengawasan">Kontrol & Pengawasan</option>
								   <option value="Role Model">Role Model</option>
								   <option value="Komunikasi">Komunikasi</option>
								   <option value="Efektif Meeting">Efektif Meeting</option>
								   <option value="Koordinasi & Kerjasama Antar Bagian">Koordinasi & Kerjasama Antar Bagian</option>
								   <option value="Problem Solving">Problem Solving</option>
								   <option value="Planning & Organizing">Planning & Organizing</option>
								</select>
							</div>
                            </div>
                        </fieldset>
				</div>
                </div>
				<p style="margin:10px;"><br/></p>
				<div class="col-lg-12" id="area">
				<p style="margin:0px;">Secara keseluruhan, apakah Anda akan merekomendasikan MNC Play sebagai "Employer of Choice" kepada rekan, keluarga atau kenalan Anda?</p>
                        <fieldset>
                            <div class="form-group">
							<div class="col-lg-12">
                                <div class="radio col-lg-3">
								  <label><input type="radio" name="rekomendasi" id="rekomendasi" value="1">Ya</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								  <label><input type="radio" name="rekomendasi" id="rekomendasi" value="2">Tidak</label>
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								</div>
								<div class="radio col-lg-3" style="margin-top:10px;">
								</div>
							</div>
                            </div><br/><br/>
                        </fieldset>
                </div>
				<div class="col-lg-12" id="area">
					<input name="date" type="hidden" value="<?php echo date('Y-m-d'); ?>">
                    <input type="submit" class="btn btn-primary btn-block" name="submit" value="Kirim Sekarang">
                </div><br/><br/>
            </div>
				<p style="margin:10px;"><br/></p>
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