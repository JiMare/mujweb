<section class="ftco-section" id="services-section">
		<div class="container-fluid px-md-5">
			<div class="row justify-content-center py-5 mt-5">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<h2 class="mb-4">Služby</h2>
					<p>Toto jsou služby, které Vám mohu nabídnout.</p>
				</div>
			</div>
			<div class="row">

			<?php foreach ($sluzby as $servis) : ?>
				<div class="col-md-4 text-center d-flex ftco-animate">
					<div class="services-1 shadow">
						<span class="icon">
							<i class="<?= $servis->ikona; ?>"></i>
						</span>
						<div class="desc">
							<h3 class="mb-5"><?= $servis->nazev; ?></h3>
							<p><?= $servis->popis; ?></p>
							<p style="text-align:left;">Cena bez DPH: <?= $servis->cena; ?> Kč.</p>
							<p style="text-align:left;"><strong>Cena s DPH: <?= $servis->cena * 1.21; ?> Kč.</strong></p>
						</div>
					</div>
				</div>

		    <?php endforeach; ?>


			</div>
		</div>
	</section>