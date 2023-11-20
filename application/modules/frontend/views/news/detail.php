<?php  ?>
<section id="news-p-detail">
	<div class="container">
		<h3 class="title is-size-3-desktop is-size-3-tablet is-size-4-mobile"><?= $datanya->judul_berita;?></h3>
		<p class="subtitle is-size-6 has-text-grey"><?= date('d F Y',strtotime($datanya->tanggal_berita));?> - <span class="has-text-primary"><?= $datanya->penulis;?></span></p>
		<img src="<?= base_url('asset/backend/upload/news/'.$datanya->foto_berita);?>" alt="" class="news-p-detail-img is-centered has-text-centered">
		<div class="news-p-detail-desc has-text-grey has-text-justified"><?= $datanya->text_berita;?></div>
	</div>
</section>