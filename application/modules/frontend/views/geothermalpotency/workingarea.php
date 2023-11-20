<section id="gp-main">
		<div class="container">
			<img src="<?= base_url('asset/backend/upload/map/'.$potency->foto_map);?>" alt="">
		</div>
	</section>
	<br>
	<section id="gwa-main">
		<div class="container">
			<div class="tabs is-boxed">
				<ul>
					<li class="is-active" data-tab="gwa-overview">
						<a>
							Overview
						</a>
					</li>
				</ul>
			</div>

			<div id="gwa-overview" class="tab-content current-tab">
				<div class="content has-text-grey">
					<p>
						<?php if (strlen($potency->text_overview_workingarea) > 250) {
							echo strip_tags(substr($potency->text_overview_workingarea, 0,250)."..");
						}else{ 
							echo strip_tags($potency->text_overview_workingarea);
						}?>
					</p>
					<div class="columns">
						<div class="column">
							<a href="<?= site_url('geothermal-potency/workingarea/powerplant');?>" class="button is-outlined is-fullwidth is-primary">Power Plant</a>
						</div>
						<div class="column">
							<a href="<?= site_url('geothermal-potency/workingarea/wkpproject');?>" class="button is-outlined is-fullwidth is-primary">WKP & Project</a>
						</div>
						<div class="column">
							<a href="<?= site_url('geothermal-potency/workingarea/tender');?>" class="button is-outlined is-fullwidth is-primary">Tender</a>
						</div>
					</div>
					<table class="table is-striped is-fullwidth">
						<thead>
							<tr>
								<th>PROVINCE</th>
								<th>GWA NAME</th>
								<th>DEVELOPER</th>
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
	</section>