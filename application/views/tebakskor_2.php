
    <!-- Intro Section -->
    <section id="intro" class="intro-section" style="padding-top:100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Tebakan Kamu</h1>
						<br/>
                        <div class="col-md-6">
                            <?php echo form_open('tebakskor/save/'.$hasil->id_match); ?>
                            <form role="form" method="post">
                                <div class="form-group" align="center">
									<div><img src="<?= $hasil->home_logo;?>" width="200px"/></div>
                                    <label><?= $hasil->home;?></label><br/>
									<label style="font-size:60px;"><?= $guess->guess_home;?></label>
                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group" align="center">
									<div><img src="<?= $hasil->away_logo;?>" width="200px"/></div>
                                    <label><?= $hasil->away;?></label><br/>
									<label style="font-size:60px;"><?= $guess->guess_away;?></label>
                                </div>
                        </div>
                        <div class="col-md-12" align="center">
								<label><?= $hasil->match_date;?></label>
								<p><br/></p>
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
