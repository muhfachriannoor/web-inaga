<?php  ?>
<!-- SLIDER INAGA -->
<div id="inaga-slider-home-members">
	<section class="inaga-slider">
		<?php foreach($banner->result() as $no => $banner2): ?>
		<figure>
			<img src="<?= base_url('asset/backend/upload/banner/'.$banner2->foto_banner);?>" alt="">
			<figcaption>
				<div class="container">
					<h1 class="title is-size-1-desktop is-size-2-touch"><?= $banner2->judul_banner;?></h1>
					<p class="subtitle is-size-5-desktop is-size-5-touch"><?= strip_tags($banner2->text_banner);?></p>
				</div>
			</figcaption>
		</figure>
		<?php endforeach; ?>
	</section>
	<!-- MEMBERS INAGA -->
	<section class="inaga-members">
		<?php foreach($member->result() as $no => $member2): ?>
			<a href="">
				<figure><img src="<?= base_url('asset/backend/upload/member/'.$member2->foto_member);?>" alt=""></figure>
			</a>
		<?php endforeach; ?>
	</section>
</div>

<!-- NEWS INAGA -->
<section id="inaga-news-n-ads">
	<div class="container">
		<div class="columns is-multiline is-desktop is-tablet is-mobile is-centered">
			<!-- INAGA NEWS -->
			<div class="column is-7-desktop is-10-tablet is-11-mobile-xs is-8-mobile" id="inaga-news">
				<h3 class="title bordered-bottom is-size-3-desktop has-text-primary">INAGA News</h3>
				<div class="columns is-multiline is-desktop is-tablet is-mobile">
					<div class="column news-item is-12">
						<div class="columns">
							<div class="column is-6">
								<img src="<?= base_url('asset/backend/upload/news/'.$news1->foto_berita);?>" alt="">
							</div>
							<div class="column">
								<a href="<?= site_url('news/detail/'.$news1->slug_berita);?>">
									<h4 class="title is-size-4"><?= $news1->judul_berita;?></h4>
								</a>
								<p class="subtitle is-size-6 has-text-grey has-text-justified">
									<?php if (strlen($news1->text_berita) > 100) {
										echo strip_tags(substr($news1->text_berita, 0,100)."..");
									}else{ 
										echo strip_tags($news1->text_berita);
									}?>
								</p>
								<div>
									<span><?= date('d F Y',strtotime($news1->tanggal_berita));?></span>
									<span>By <?= $news1->penulis;?></span>
								</div>
							</div>
						</div>
					</div>
					<?php foreach($news2->result() as $no => $news): ?>
					<div class="column is-4-desktop is-4-tablet is-12-mobile news-item">
						<figure>
							<img src="<?= base_url('asset/backend/upload/news/'.$news->foto_berita);?>" alt="">
							<figcaption>
								<a href="<?= site_url('news/detail/'.$news->slug_berita);?>">
									<h4 class="title is-size-5"><?php if (strlen($news->judul_berita) > 40) {
											echo substr($news->judul_berita, 0,40)."..";
										}else{ 
											echo $news->judul_berita;
										}?>
									</h4>
								</a>
								<p class="subtitle is-size-6 has-text-grey has-text-justified">
									<?php if (strlen($news->text_berita) > 70) {
										echo strip_tags(substr($news->text_berita, 0,70)."..");
									}else{ 
										echo strip_tags($news->text_berita);
									}?>
								</p>
								<div>
									<span><?= date('d F Y',strtotime($news->tanggal_berita));?></span>
									<span>By <?= $news->penulis;?></span>
								</div>
							</figcaption>
						</figure>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
			<!-- INAGA ADS & INFOGRAPHIC -->
			<div class="column is-8-tablet is-3-desktop is-11-mobile-xs is-8-mobile is-5-desktop" id="inaga-graph-n-ads">
				<div class="columns is-multiline is-desktop is-tablet is-mobile is-centered">
					<div class="column is-8-mobile is-6-tablet is-6-desktop info-graphic">
						<h4 class="title bordered-bottom is-size-4-desktop has-text-primary">Infographics</h4>
						<div class="infographic-slider">
							<a href="">
						    	<img src="<?= base_url('asset/backend/upload/infographics/'.$infographics->foto_infografis);?>" alt="">
							</a>
							<a href="">
						    	<img src="<?= base_url('asset/backend/upload/infographics/'.$infographics->foto_infografis);?>" alt="">
							</a>
							<a href="">
						    	<img src="<?= base_url('asset/backend/upload/infographics/'.$infographics->foto_infografis);?>" alt="">
							</a>
						</div>
					</div>

					<div class="modal modal-gallery">
					  	<div class="modal-background"></div>
					  	<div class="modal-content">
					  		<a href="">
				      			<img src="https://www.worldofghibli.id/wp-content/uploads/2019/08/gambar-pemandangan-cantik-1-e1565192597200.jpg" alt="">
					  		</a>
					  	</div>
					  	<button class="modal-close is-large" aria-label="close"></button>
					</div>
					
					<div class="column is-8-mobile is-6-tablet is-6-desktop ads-space">
						<h4 class="title bordered-bottom is-size-4-desktop has-text-primary">Ads</h4>
						<div class="infographic-slider">
							<a class="img-modals">
								<img src="<?= base_url('asset/backend/upload/adsspace/'.$adsspace->foto_iklan);?>" alt="">
							</a>
							<a class="img-modals">
								<img src="<?= base_url('asset/backend/upload/adsspace/'.$adsspace->foto_iklan);?>" alt="">
							</a>
							<a class="img-modals">
								<img src="<?= base_url('asset/backend/upload/adsspace/'.$adsspace->foto_iklan);?>" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- GALLERY INAGA -->
<section id="inaga-gallery">
	<div class="container">
		<div class="spaced-between">
			<h3 class="title is-size-3 has-text-white">INAGA Gallery</h3>
			<a href="<?= site_url('eventgallery/gallery/');?>" class="button is-white is-outlined is-hidden-mobile">Lihat Semua</a>
		</div>
		<div class="columns is-centered is-multiline is-desktop is-mobile is-tablet inaga-slider-gallery">
			<?php foreach($gallery->result() as $no => $gallery): ?>
			<div class="column is-11-mobile-xs">
				<a href="<?= site_url('eventgallery/gallery/detail/'.$gallery->slug_galeri);?>">
					<figure>
						<img src="<?= base_url('asset/backend/upload/gallery/'.$gallery->foto_galeri);?>" alt="">
						<figcaption>
						    <span>Jakarta Convention Center</span>
							<div>
								<b class="is-size-5"><?= date('d F Y',strtotime($gallery->tanggal_galeri));?></b>
								<p class="is-size-4"><?= $gallery->nama_galeri;?></p>
							</div>
						</figcaption>
					</figure>
				</a>
			</div>
			<?php endforeach; ?>
		</div>
		<div class="spaced-between">
			<a href="" class="button is-white is-outlined is-hidden-tablet is-hidden-desktop is-fullwidth">Lihat Semua</a>
		</div>
	</div>
</section>

<!-- EVENT & ACTIVITIES INAGA -->
<section id="inaga-event">
	<div class="container">
		<div class="spaced-between">
			<h3 class="title is-size-3 has-text-primary">Event and Activities</h3>
			<a href="<?= site_url('eventgallery/event/');?>" class="button is-primary is-hidden-mobile">Event Calendar</a>
		</div>
		<div class="inaga-slider-event">
			<figure>
				<img src="<?= base_url('asset/backend/upload/event/'.$event->foto_event);?>" alt="">
				<figcaption>
					<h1 class="title is-size-1-desktop is-size-2-touch has-text-white has-text-weight-bold"><?= $event->nama_event;?></h1>
					<?php if(date('Y-m-d H:i:s') <= $event->berakhir_event){ ?>
					<ul class="columns is-multiline is-centered is-desktop is-tablet is-mobile">
						<li class="column is-3-tablet is-2-desktop is-6-mobile-xs is-3-mobile">
							<p id="days"></p>Days
						</li>
						<li class="column is-3-tablet is-2-desktop is-6-mobile-xs is-3-mobile">
							<p id="hours"></p>Hours
						</li>
						<li class="column is-3-tablet is-2-desktop is-6-mobile-xs is-3-mobile">
							<p id="minutes"></p>Minutes
						</li>
						<li class="column is-3-tablet is-2-desktop is-6-mobile-xs is-3-mobile">
							<p id="seconds"></p>Seconds
						</li>
					</ul>
					<a href="<?= $event->website_event;?>" target="_blank" class="button is-primary is-medium has-text-weight-semibold">Registration</a>
					<?php }else{ ?>
						<h2 class="title is-size-2 has-text-white">Registrasi telah berakhir</h2>
					<?php } ?>
				</figcaption>
			</figure>
		</div>
		<div class="spaced-between">
			<a href="#" class="button is-primary is-hidden-desktop is-hidden-tablet is-fullwidth">Event Calendar</a>
		</div>
	</div>
</section>

<!-- ABOUT INAGA -->
<section id="inaga-about">
	<div class="columns is-centered is-multiline is-desktop is-tablet is-mobile">
		<div class="column is-7-desktop is-7-tablet is-11-mobile">
			<h3 class="title is-size-3 has-text-primary has-text-centered">ABOUT US</h3>
			<p class="has-text-grey has-text-justified">INAGA - Indonesian Geothermal Association (Asosiasi Panasbumi Indonesia - API) was establish in September 25th, 1991 in Jakarta. INAGA is a nonprofit organization, which function as a forum of communication, coordination and consultation in order to improve its capabilities, understanding, cooperation and responsibility of the role of geothermal energy development in Indonesia and member of IGA (International Geothermal Association).</p>
		</div>
		<div class="column is-5-desktop is-5-tablet is-hidden-mobile">
			<a href="" class="icon has-text-light is-medium">
				<i class="fas fa-chevron-right"></i>
			</a>
			<img src="<?= base_url('asset/frontend/');?>img/aboutus.jpg" alt="">
		</div>
	</div>
</section>
<script>
	// EVENT COUNTDOWN
	const second = 1000,
		  minute = second * 60
		  hour = minute * 60
		  day = hour * 24

	<?php $date_event = date('F d, Y H:i:s',strtotime($event->mulai_event));?>
	let countDown = new Date('<?= $date_event;?>').getTime(),
		x = setInterval(function() {
			let now = new Date().getTime(),
				distance = countDown - now;
			document.getElementById('days').innerText = Math.floor(distance / (day)),
			document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
			document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
			document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);


		}, second)
</script>