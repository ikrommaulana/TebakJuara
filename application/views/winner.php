    <!-- Intro Section -->
    <section id="intro" class="intro-section" style="padding-top:100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Pemenang Tebak Skor</h1>
						<br/>
                        <div class="col-md-6">
								<?php foreach($hasil as $hasil){ ?>
								<table class="table table-bordered table-hover" align="center" width="50%">
								  <tr>
									<td width="10%" style="border-color:#000;"><img src="<?= $hasil->home_logo;?>" width="20px"/></td>
									<td width="30%" style="border-color:#000;"><?= $hasil->home; ?></td>
									<td width="10%" style="border-color:#000;"><?= $hasil->home_score; ?></td>
									<td width="10%" style="border-color:#000;"><?= $hasil->away_score; ?></td>
									<td width="30%" style="border-color:#000;"><?= $hasil->away; ?></td>
									<td width="10%" style="border-color:#000;"><img src="<?= $hasil->away_logo;?>" width="20px"/></td>
								  </tr>
								</table>
								<?php }	?>
						</div>
                        <div class="col-md-6">
								<table class="table table-bordered table-hover" align="center" width="50%">
								  <tr>
									<td width="50%" style="border-color:#000;">{tidak ada}</td>
									<td width="50%" style="border-color:#000;">{tidak ada}</td>
								  </tr>
								</table>
								<table class="table table-bordered table-hover" align="center" width="50%">
								  <tr>
									<td width="50%" style="border-color:#000;">Hafiez</td>
									<td width="50%" style="border-color:#000;">Irish Hening</td>
								  </tr>
								</table>
								<table class="table table-bordered table-hover" align="center" width="50%">
								  <tr>
									<td width="50%" style="border-color:#000;">auliafitrahramadani</td>
									<td width="50%" style="border-color:#000;">ghienara</td>
								  </tr>
								</table>
								<table class="table table-bordered table-hover" align="center" width="50%">
								  <tr>
									<td width="50%" style="border-color:#000;">alimaruf991</td>
									<td width="50%" style="border-color:#000;">AhmadSuryaPani2</td>
								  </tr>
								</table>
								<table class="table table-bordered table-hover" align="center" width="50%">
								  <tr>
									<td width="50%" style="border-color:#000;">Zakaria</td>
									<td width="50%" style="border-color:#000;">Aditz Nugroho</td>
								  </tr>
								</table>
								<table class="table table-bordered table-hover" align="center" width="50%">
								  <tr>
									<td width="50%" style="border-color:#000;">Trisna Kurniawan</td>
									<td width="50%" style="border-color:#000;">Atribut_mcfc</td>
								  </tr>
								</table>
								<table class="table table-bordered table-hover" align="center" width="50%">
								  <tr>
									<td width="50%" style="border-color:#000;">Brian Mayanta</td>
									<td width="50%" style="border-color:#000;"></td>
								  </tr>
								</table>
								<table class="table table-bordered table-hover" align="center" width="50%">
								  <tr>
									<td width="50%" style="border-color:#000;">AngGun Nuri Tan</td>
									<td width="50%" style="border-color:#000;">bocel_tyo</td>
								  </tr>
								</table>
								<table class="table table-bordered table-hover" align="center" width="50%">
								  <tr>
									<td width="50%" style="border-color:#000;">Hilman Hendro </td>
									<td width="50%" style="border-color:#000;">Yulianto</td>
								  </tr>
								</table>
								<table class="table table-bordered table-hover" align="center" width="50%">
								  <tr>
									<td width="50%" style="border-color:#000;">{tidak ada}</td>
									<td width="50%" style="border-color:#000;">{tidak ada}</td>
								  </tr>
								</table>
								<table class="table table-bordered table-hover" align="center" width="50%">
								  <tr>
									<td width="50%" style="border-color:#000;">wandi9z</td>
									<td width="50%" style="border-color:#000;">cantika</td>
								  </tr>
								</table>
								<table class="table table-bordered table-hover" align="center" width="50%">
								  <tr>
									<td width="50%" style="border-color:#000;">MohSaifulAnwar69</td>
									<td width="50%" style="border-color:#000;">Henz46</td>
								  </tr>
								</table>
								<table class="table table-bordered table-hover" align="center" width="50%">
								  <tr>
									<td width="50%" style="border-color:#000;">{tidak ada}</td>
									<td width="50%" style="border-color:#000;">{tidak ada}</td>
								  </tr>
								</table>
								<table class="table table-bordered table-hover" align="center" width="50%">
								  <tr>
									<td width="50%" style="border-color:#000;">Juju</td>
									<td width="50%" style="border-color:#000;">SayidilIrama</td>
								  </tr>
								</table>
                                <!--input type="submit" name="submit" class="btn btn-primary btn-lg" value="Tebak Skor"/>
								<input type="hidden" name="pertandingan" value="<?= $hasil->id_match;?>"/>
								<input type="hidden" name="username" value="<?= $user->username;?>"/>
								<input type="hidden" name="user" value="<?= $user->id;?>"/>
								<input type="hidden" name="tanggal_dibuat" value="<?php echo date('Y/m/d'); ?>"/-->
                            </div>
                        </form>
                        <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </section>
