<?php  ?>
<section id="event-detail">
	<div class="container">
		<div class="columns is-multiline is-centered is-desktop is-tablet is-mobile">
			<div class="column is-6-desktop is-4-tablet is-8-mobile is-11-mobile-xs">
				<img src="<?= base_url('asset/backend/upload/event/'.$datanya->foto_event);?>" alt="">
			</div>
			<div class="column is-6-desktop is-7-tablet is-8-mobile is-11-mobile-xs">
				<h2 class="is-size-2-desktop is-size-3-touch has-text-weight-semibold"><?= $datanya->nama_event;?></h2>
				<p class="has-text-justified has-text-grey"><?= strip_tags($datanya->deskripsi_event);?></p>
				<br>	
				<p class="has-text-grey"><b class="has-text-dark">Location</b><br> <?= $datanya->lokasi_event;?></p>
				<p class="has-text-grey"><b class="has-text-dark">Date & Time</b><br> <?= date('d F Y, H:i A',strtotime($datanya->mulai_event));?> - <?= date('d F Y, H:i A',strtotime($datanya->berakhir_event));?></p>
				<p class="has-text-grey"><b class="has-text-dark">Registration</b><br><a href="#"> <?= $datanya->website_event;?></a></p>
			</div>
		</div>
	</div>
</section>