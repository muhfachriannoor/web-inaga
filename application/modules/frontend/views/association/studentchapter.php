<?php  ?>
<section id="student-chapter">
	<div class="container">
		<div class="tabs is-boxed">
		    <ul>
			    <li class="is-active" data-tab="s-chapter">
			        <a>
			      		The Members
			        </a>
			    </li>
		  	</ul>
		</div>
		<div id="s-chapter" class="tab-content current-tab">
			<div class="content has-text-grey">
			<p class=" has-text-justified">All Student Chapters are part of Indonesia Geothermal Association (INAGA) or API (Asosiasi Panas Bumi Indonesia) organization. Student Chapters exist within INAGA in order to provide a framework for INAGA activities within set boundaries. With the support from INAGA and their universities, Students Chapters are encouraged to conduct all activities related to the development and the use of geothermal resource.</p>
			<div class="columns is-multiline is-desktop is-tablet is-mobile">
				<?php
					foreach($studentchapter->result() as $no => $show):
						$test 	= $no + 1;
						$sc 	= sprintf("%'03d", $test);
				?>
				<div class="column is-4-desktop is-6-mobile-xs is-6-mobile is-4-tablet">
					<div class="columns is-desktop is-mobile is-tablet wrap-sc is-multiline">
						<div class="column is-4-desktop is-5-mobile is-12-mobile-xs">
							<a href="">
								<img src="<?= base_url('asset/backend/upload/studentchapter/'.$show->foto_student);?>" alt="">
							</a>
						</div>
						<div class="column is-12-mobile-xs">
							<a href="">
								<h5 class="title is-size-5"><?= $show->nama_student;?></h5>
							</a>
								<b class="subtitle is-size-6">SC-<?= $sc;?></b>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
			<p>Should other university be interested to become our Student Chapter, please contact <a href="">INAGA Secretariat</a></p>
			</div>
		</div>
		
	</div>
</section>