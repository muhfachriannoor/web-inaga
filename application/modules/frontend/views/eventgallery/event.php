<?php  ?>
<section id="event">
	<div class="container">
		<div class="columns is-multiline is-desktop is-tablet is-mobile is-centered">
			<?php foreach($event->result() as $no => $event): ?>
			<div class="column is-4-desktop is-5-tablet is-8-mobile is-11-mobile-xs">
				<figure>
					<img src="<?= base_url('asset/backend/upload/event/'.$event->foto_event);?>" alt="">
					<figcaption>
						<h4 class="is-size-4-desktop is-size-4-touch"><?= $event->nama_event?></h4>
						<p class="is-size-7-desktop is-size-6-touch has-text-primary"><?= date('d F Y, H:i A',strtotime($event->mulai_event));?></p>
					</figcaption>
					<a href="<?= site_url('eventgallery/event/detail/'.$event->slug_event);?>" class="button is-primary is-outlined">See Details</a>
				</figure>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>