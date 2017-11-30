
    <!-- Intro Section -->
    <section id="intro" class="intro-section" style="padding-top:100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Klasemen Sementara Tebak Skor</h1>
					<br/>
					<div class="col-md-12">
					<table class="table table-bordered table-hover">
					  <thead style="background-color:white;">
						<td width="45%">USERNAME</td>
						<td width="20%">JUMLAH POIN</td>
					  </thead>
					  <?php foreach ($hasil as $hasil) { ?>
					  <tr>
						<td><?= $hasil->username; ?></td>
						<td><?= $hasil->points; ?></td>
						</tr>
					  <?php } ?>
					</table>
					</div>
                </div>
            </div>
        </div>
    </section>
