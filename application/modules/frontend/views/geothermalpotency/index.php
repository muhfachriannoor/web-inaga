<?php  ?>
<section id="gp-main">
	<div class="container">
		<img src="<?= base_url('asset/backend/upload/map/'.$potency->foto_map);?>" alt="">
	</div>
</section>
<br>
<section id="gp-sub">
	<div class="container">
		<div class="tabs is-boxed">
		    <ul>
			    <li class="is-active" data-tab="gp-gr">
			        <a>
			      		Geothermal Resources
			        </a>
			    </li>
			    <li class="" data-tab="gp-gwa">
			        <a>
			      		Geothermal Working Area	
			        </a>
			    </li>
		  	</ul>
		</div>

		<div id="gp-gr" class="tab-content current-tab">
			<div class="content">
				<div class="container">
					<div class="columns">
						<div class="column is-5 has-text-justified has-text-grey">
							<h5 class="title is-size-5">Overview</h5>
							<p>
								<?php if (strlen($potency->text_overview_resources) > 250) {
									echo strip_tags(substr($potency->text_overview_resources, 0,250)."..");
								}else{ 
									echo strip_tags($potency->text_overview_resources);
								}?>
							</p>
							<a href="<?= site_url('geothermal-potency/resources/');?>" class="button is-small is-primary">Details</a>
						</div>
						<div class="column is-7">
							<div class="columns is-multiline has-text-centered is-uppercase has-text-weight-semibold">
								<?php foreach($island->result() as $no => $island): ?>
								<div class="column is-6">
									<a href="<?= site_url('geothermal-potency/resources/'.$island->nama_island);?>" class="button is-fullwidth is-outlined is-primary"><?= $island->nama_island;?></a>
								</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="gp-gwa" class="tab-content">
			<div class="content">
				<div class="container">
					<div class="columns">
						<div class="column is-5 has-text-justified has-text-grey">
							<h5 class="title is-size-5">Overview</h5>
							<p>
								<?php if (strlen($potency->text_overview_workingarea) > 250) {
									echo strip_tags(substr($potency->text_overview_workingarea, 0,250)."..");
								}else{ 
									echo strip_tags($potency->text_overview_workingarea);
								}?>
							</p>
							<a href="<?= site_url('geothermal-potency/workingarea');?>" class="button is-small is-primary">Details</a>
						</div>
						<div class="column is-7">
							<table class="table is-striped is-fullwidth">
								<thead>
									<tr>
										<th width="25%">PROVINCE</th>
										<th width="35%">GWA NAME</th>
										<th width="40%">DEVELOPER</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($workingarea->result() as $no1 => $show1): ?>
									<tr>
										<?php
											$query = $this->db->join('province', 'geothermal_workingarea.id_province = province.id_province', 'inner')->where('geothermal_workingarea.id_province', $show1->id_province)->order_by('geothermal_workingarea.id_province','ASC')->get('geothermal_workingarea');
											$rowspan = $query->num_rows();
										?>
										<td rowspan="<?= $rowspan;?>"><?= $show1->nama_province;?></td>
										<?php foreach($query->result() as $no2 => $show2): ?>
										<td><?= $show2->gwa_name;?></td>
										<td><?= $show2->developer;?></td>
									</tr>
									<?php endforeach; endforeach;?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>