
    <!-- Intro Section -->
    <section id="intro" class="intro-section" style="padding-top:100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Semua Tebakan</h1>
					<br/>
					<div class="col-md-12">
					<table class="table table-bordered table-hover">
					  <tr>
						<td width="10%">Game</td>
						<td width="20%">Match Date</td>
						<td width="30%">Match</td>
						<td width="15%">Tebakan Kamu</td>
						<td width="15">Game Result</td>
						<td width="10%">Poin</td>
					  </tr>
					  <?php foreach ($hasil as $hasil) { ?>
					  <tr>
						<td><?= $hasil->id_match; ?></td>
						<td><?= $hasil->match_date; ?></td>
						<td><?= $hasil->home; ?> vs <?= $hasil->away; ?></td>
						<td><?= $hasil->guess_home; ?> vs <?= $hasil->guess_away; ?></td>
						<td><?= $hasil->home_score; ?> vs <?= $hasil->away_score; ?></td>
						<td><?php if(($hasil->guess_home == $hasil->home_score)&&($hasil->guess_away == $hasil->away_score)){ echo "3 Poin";} else { echo "0 Poin";} ?></td>
					  </tr>
					  <?php } ?>
					</table>
					</div>
                </div>
            </div>
        </div>
    </section>
