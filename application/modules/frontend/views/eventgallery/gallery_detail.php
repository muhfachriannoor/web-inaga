<?php  ?>
<section id="gallery-detail">
	<div class="container">
		<div class="columns is-multiline is-centered is-desktop is-tablet is-mobile">
			<?php foreach($datanya->result() as $no => $datanya): ?>
			<div class="column is-4-desktop is-5-tablet is-5-mobile is-10-mobile-xs">
				<a class="open-modal" data-modal-id="#image-<?= $no+1;?>">
					<img src="<?= base_url('asset/backend/upload/gallery/gallery_detail/'.$datanya->foto_galeri_detail);?>" alt="">
				</a>
			</div>

			<div class="modal" id="image-<?= $no+1;?>">
			  	<div class="modal-background close-modal" data-modal-id="#image-<?= $no+1;?>"></div>
			  	<div class="modal-content">
			    	<figure>
			      		<img src="<?= base_url('asset/backend/upload/gallery/gallery_detail/'.$datanya->foto_galeri_detail);?>" alt="">
			      		<figcaption>
			      			<b class="is-uppercase has-text-white"><?= $datanya->nama_galeri_detail;?></b>
			      			<p class="has-text-grey-light has-text-justified"><?= strip_tags($datanya->deskripsi_galeri_detail);?></p>
			      			<span class="has-text-primary"><?= date('d F Y',strtotime($datanya->tanggal_galeri));?></span>
			      		</figcaption>
			    	</figure>
			  	</div>
			  	<button class="modal-close is-large" data-modal-id="#image-<?= $no+1;?>" aria-label="close"></button>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>