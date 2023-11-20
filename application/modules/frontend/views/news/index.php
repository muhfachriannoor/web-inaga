<?php ?>
<sectiond id="news-p">
	<div class="container">
		<div class="news-p-wrap">
			<?php foreach($news->result() as $no => $news): ?>
			<div class="news-p-item columns is-multiline is-desktop is-tablet is-mobile">
				<div class="column is-3-desktop is-10-mobile-xs is-8-mobile-s is-5-mobile is-4-tablet ">
					<img src="<?= base_url('asset/backend/upload/news/'.$news->foto_berita);?>" alt="">
				</div>
				<div class="column is-7-desktop is-10-mobile-xs is-8-mobile-s is-6-mobile is-6-tablet">
					<div class="news-p-item-info">
						<a href="<?= site_url('news/detail/'.$news->slug_berita);?>">
							<p class="title is-size-4"><?php if (strlen($news->judul_berita) > 100) {
										echo substr($news->judul_berita, 0,100)."..";
									}else{ 
										echo $news->judul_berita;
									}?></p>
						</a>
						<p class="has-text-grey"><?= date('d F Y',strtotime($news->tanggal_berita));?>- <span class="has-text-primary"><?= $news->penulis;?></span></p>
						<p class="has-text-grey has-text-justified"><?php if (strlen($news->text_berita) > 250) {
										echo strip_tags(substr($news->text_berita, 0,250)."..");
									}else{ 
										echo strip_tags($news->text_berita);
									}?>
						</p>
						<a href="<?= site_url('news/detail/'.$news->slug_berita);?>" class="button is-primary is-small is-outlined">Detail</a>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>