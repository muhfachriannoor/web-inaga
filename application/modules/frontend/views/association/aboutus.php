<?php  ?>
<section id="about-us">
		<div class="container">
			<div class="tabs is-boxed">
			    <ul>
				    <li class="is-active" data-tab="as-history">
				        <a>
				      		History
				        </a>
				    </li>
				    <li class="" data-tab="as-vimi">
				        <a>
				      		Vision & Mission	
				        </a>
				    </li>
				    <li class="" data-tab="as-program">
				        <a>
				      		Current Program
				        </a>
				    </li>
				    <li class="" data-tab="as-president-m">
				        <a>
				      		President Messages
				        </a>
				    </li>
				    <li class="" data-tab="as-list-president">
				        <a>
				      		President of INAGA
				        </a>
				    </li>
			  	</ul>
			</div>

			<div id="as-history" class="tab-content current-tab">
				<div class="content has-text-grey">
					<h4 class="is-size-4 has-text-dark">History of API</h4>
					<?= $history->text_sejarah;?>
					<h4 class="is-size-4 has-text-dark">Objective</h4>
					<?= $objective->text_objective;?>
				</div>
			</div>

			<div id="as-vimi" class="tab-content">
				<div class="content has-text-grey">
					<?= $visionmission->visimisi;?>
				</div>
			</div>

			<div id="as-program" class="tab-content">
				<div class="content has-text-grey">
					<?= $current->text_current;?>
				</div>
			</div>

			<div id="as-president-m" class="tab-content">
				<div class="content has-text-grey">
					<?= $presidentmessage->message;?>
				</div>
			</div>

			<div id="as-list-president" class="tab-content">
				<h4 class="is-size-4 has-text-dark">List President API</h4>
				<div class="list-president columns is-multiline is-desktop is-tablet is-mobile is-centered">
					<?php foreach($presidentapi->result() as $no => $show): ?>
					<div class="column is-3-desktop is-6-mobile is-10-mobile-xs is-4-tablet">
						<figure>
							<img src="<?= base_url('asset/backend/upload/president/'.$show->foto_president);?>" alt="">
							<figcaption>
								<h5 class="title is-size-5 has-text-light"><?= $show->nama_president;?></h5>
								<h6 class="subtitle is-size-6 has-text-grey-"><?= $show->masa_jabatan;?></h6>
							</figcaption>
						</figure>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
</section>