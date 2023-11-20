<?php  ?>
<section id="gwa-tender">
	<div class="container">
		<div class="tabs is-boxed">
			<ul>
				<li class="is-active" data-tab="gwa-tender-overview">
					<a>
						Overview
					</a>
				</li>
			</ul>
		</div>

		<div id="gwa-tender-overview" class="tab-content current-tab">
			<div class="content has-text-grey">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam quisquam distinctio illum labore mollitia illo placeat velit facere ipsa minima laboriosam, similique eos molestiae tenetur eveniet omnis! Cum, dicta harum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita impedit laudantium ullam nemo. Accusantium expedita consectetur unde, dolor, facilis nemo iste ex illo accusamus eos nobis molestiae eaque sapiente optio.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita impedit laudantium ullam nemo. Accusantium expedita consectetur unde, dolor, facilis nemo iste ex illo accusamus eos nobis molestiae eaque sapiente optio.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita impedit laudantium ullam nemo. Accusantium expedita consectetur unde, dolor, facilis nemo iste ex illo accusamus eos nobis molestiae eaque sapiente optio.</p>
				<table class="table is-striped is-fullwidth">
					<thead>
						<tr>
							<th width="15%">PROVINCE</th>
							<th width="15%">GWA NAME</th>
							<th>DISTRICT LOCATION</th>
							<th width="12%">POTENCY</th>
							<th width="12%">DEVELOPMENT PLANT</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($tender->result() as $no => $tampil): ?>
						<tr>
						<?php
                      		$query = $this->db->join('geothermal_workingarea', 'tender.id_workingarea = geothermal_workingarea.id_workingarea', 'inner')->join('province', 'geothermal_workingarea.id_province = province.id_province', 'inner')->where('geothermal_workingarea.id_province', $tampil->id_province)->order_by('tender.id_tender','ASC')->get('tender');
                      		$rowspan = $query->num_rows();
                    	?>
                      		<td rowspan="<?= $rowspan;?>"><?= $tampil->nama_province;?></td>
                      		<?php foreach($query->result() as $no2 => $show2): ?>
                      		<td><?= $show2->gwa_name;?></td>
                      		<td><?= $show2->location;?></td>
                      		<td><?= $show2->potency;?></td> 
                      		<td><?= $show2->development_plan;?></td> 
                    	</tr>
                  		<?php endforeach; endforeach;?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>