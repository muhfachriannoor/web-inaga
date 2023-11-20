<?php  ?>
<section id="gallery">
	<div class="container">
		<div class="columns is-multiline is-centered is-desktop is-tablet is-mobile">
			<?php foreach($gallery->result() as $no => $gallery): ?>
			<div class="column is-4-desktop is-5-tablet is-8-mobile is-11-mobile-xs">
				<a href="<?= site_url('eventgallery/gallery/detail/'.$gallery->slug_galeri);?>">
					<figure>
						<img src="<?= base_url('asset/backend/upload/gallery/'.$gallery->foto_galeri);?>" alt="">
						<figcaption>
							<b class="is-uppercase has-text-dark"><?= $gallery->nama_galeri;?></b>
							<p class="has-text-grey"><?= date('d F Y',strtotime($gallery->tanggal_galeri));?></p>
						</figcaption>
					</figure>
				</a>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>