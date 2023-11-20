<?php  ?>
<section id="library">
	<div class="container">
		<div class="columns is-multiline is-desktop is-tablet is-mobile is-centered">
			<?php foreach($library->result() as $no => $library): ?>
			<div class="column is-3-desktop is-4-tablet is-6-mobile is-12-mobile-xs">
				<a href="<?= base_url('asset/backend/upload/library/pdf/'.$library->pdf_library);?>" target="_blank">
					<figure>
						<img src="<?= base_url('asset/backend/upload/library/cover/'.$library->foto_library);?>" alt="">
						<figcaption>
							<h6 class="title is-size-6-desktop is-size-5-touch"><?= $library->nama_library;?></h6>
							<h6 class="subtitle is-size-7-desktop is-size-6-mobile has-text-grey"><?= date('d F Y',strtotime($library->tanggal_library));?></h6>
						</figcaption>
					</figure>
				</a>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>