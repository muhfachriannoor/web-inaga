<?php  ?>
<section id="nzte-2">
	<div class="container">
		<div class="tabs is-boxed">
		    <ul>
			    <li class="is-active" data-tab="nzte-t">
			        <a>
			      		New Zealand Geothermal Business Directory
			        </a>
			    </li>
		  	</ul>
		</div>
		<div id="nzte-2-t" class="tab-content current-tab">
			<?php foreach($directory->result() as $no => $show): ?>
			<div class="columns is-multiline is-desktop is-tablet is-mobile wrap-company">
				<div class="column is-4-desktop is-4-tablet is-8-mobile is-12-mobile-xs">
					<figure>
						<img src="<?= base_url('asset/backend/upload/directory/picture/'.$show->foto)?>" alt="">
						<figcaption>
							<b class="is-size-5">Contact</b>
    							<p><?= $show->contact_name;?></p>
    							<p><?= $show->contact_number;?></p>
    							<p><?= $show->contact_position;?></p>
    							<p><?= $show->contact_email;?></p>
						</figcaption>
					</figure>
				</div>
				<div class="column is-8-desktop is-8-tablet is-12-mobile is-12-mobile-xs">
					<div class="columns is-desktop is-tablet is-mobile is-multiline">
						<div class="column is-8-desktop is-8-tablet is-8-mobile is-12-mobile-xs">
							<h3 class="title is-size-3"><?= $show->company_name;?></h3>
							<h6 class="subtitle is-size-6"><a href="<?= $show->website;?>" target="_blank"><?= $show->website;?></a></h6>
						</div>
						<div class="column is-4-tablet is-4-mobile is-12-mobile-xs is-4-desktop logo-company has-text-right-desktop has-text-centered-mobile has-text-right-tablet">
							<img src="<?= base_url('asset/backend/upload/directory/logo/'.$show->logo)?>" alt="">
						</div>
						<div class="column is-12-tablet is-12-mobile is-12-mobile-xs is-12-desktop has-text-justified has-text-grey">
						    <p class="comment more">
						        <?= strip_tags($show->description);?>
						    </p>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>