<?php  ?>
<section id="gb-stakeholder">
	<div class="container">
		<div class="columns is-multiline is-centered is-desktop is-tablet is-mobile">
			<div class="column is-3-desktop is-4-tablet is-10-mobile is-11-mobile-xs">
				<aside class="menu">
				  <ul class="menu-list">
			    	<li><a href="<?= site_url('geothermal-business/stakeholder/Overview');?>" <?= ($category == 'Overview') ? 'class="is-active"' : '';?>>Overview</a></li>
				    <li><a href="<?= site_url('geothermal-business/stakeholder/State-owned-Geothermal-Dev');?>" <?= ($category == 'State-owned Geothermal Dev') ? 'class="is-active"' : '';?>>State-owned Geothermal Dev</a></li>
				    <li><a href="<?= site_url('geothermal-business/stakeholder/Private-Developer');?>" <?= ($category == 'Private Developer') ? 'class="is-active"' : '';?>>Private Developer</a></li>
				    <li><a href="<?= site_url('geothermal-business/stakeholder/Utility-Offtaker');?>" <?= ($category == 'Utility/Offtaker') ? 'class="is-active"' : '';?>>Utility/Offtaker</a></li>
				    <li><a href="<?= site_url('geothermal-business/stakeholder/Nation-Government');?>" <?= ($category == 'Nation Government') ? 'class="is-active"' : '';?>>Nation Government</a></li>
				    <li><a href="<?= site_url('geothermal-business/stakeholder/Financial-Institution');?>" <?= ($category == 'Financial Institution') ? 'class="is-active"' : '';?>>Financial Institution</a></li>
				    <li><a href="<?= site_url('geothermal-business/stakeholder/University');?>" <?= ($category == 'University') ? 'class="is-active"' : '';?>>University</a></li>
				    <li><a href="<?= site_url('geothermal-business/stakeholder/Association');?>" <?= ($category == 'Association') ? 'class="is-active"' : '';?>>Association</a></li>
				  </ul>
				</aside>
			</div>
			<div class="column is-9-desktop is-7-tablet is-8-mobile is-11-mobile-xs">
				<?php if($category == 'Overview'): ?>
				<div class="columns is-multiline is-desktop is-tablet is-mobile">
					<div class="column is-12">
						<h3 class="title is-size-3">Geothermal Stakeholder in Indonesia</h3>
						<p class="has-text-grey has-text-justtified">
							<?= strip_tags($overview->text_overview);?>
						</p>
					</div>
				</div>
				<?php else: ?>
				<?php foreach($stakeholder->result() as $no => $show): ?>
				<div class="columns is-multiline is-desktop is-tablet is-mobile stakeholder-item">
					<div class="column is-4-desktop is-9-tablet is-12-mobile">
						<a href="<?= $show->link_website;?>" target="_blank">
							<img src="<?= base_url('asset/backend/upload/stakeholder/'.$show->foto);?>" alt="">
						</a>
					</div>
					<div class="column is-8-desktop is-12-tablet is-12-mobile">
						<h4 class="title is-size-4"><?= $show->nama_stakeholder;?></h4>
						<h6 class="subtitle is-size-6-desktop is-size-5-mobile"><a href="<?= $show->link_website;?>" target="_blank"><?= $show->link_website;?></a></h6>
						<p class="has-text-grey has-text-justified"><?= strip_tags($show->description);?></p>
					</div>
				</div>
				<?php endforeach; endif;?>
			</div>
		</div>
	</div>
</section>