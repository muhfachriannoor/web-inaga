<?php  ?>
<section id="gb-regulations">
	<div class="container">
		<h4 class="title is-size-4">Related Regulations</h4>
		<div class="columns is-multiline is-desktop is-tablet is-mobile">
			<?php foreach($category1->result() as $no2 => $show2): ?>
			<div class="column is-8 regulation-wrap">
				<h6 class="title is-size-6 has-text-grey-dark"><?= $show2->nama_kategori;?></h6>
				<div class="regulations">
					<?php
						$related = $this->db->where('id_kategori_related', $show2->id_kategori_related)->order_by('id_related_regulation', 'DESC')->get('related_regulation');
						foreach($related->result() as $noo => $tampil):
					?>
					<div class="regulation-item">
						<?= $tampil->nama_regulation_ind;?><br>
						<?= $tampil->nama_regulation_eng;?>
						<?php if($tampil->pdf_ind != '' OR $tampil->pdf_ind != ''): ?>
						<div class="regulation-link has-text-right">
							<?php if($tampil->pdf_ind != ''): ?>
							<a href="<?= base_url('asset/backend/upload/regulation/relatedregulation/IND/'.$tampil->pdf_ind);?>" target="_blank">
								<span class="icon has-text-danger">
								  <i class="fas fa-file-pdf"></i>
								</span>
								<span>IDN</span>
							</a>
							<?php endif; ?>
							<?php if($tampil->pdf_eng != ''): ?>
							<a href="<?= base_url('asset/backend/upload/regulation/relatedregulation/ENG/'.$tampil->pdf_eng);?>" target="_blank">
								<span class="icon has-text-danger">
								  <i class="fas fa-file-pdf"></i>
								</span>
								<span>ENG</span>
							</a>
							<?php endif; ?>
						</div>
						<?php endif; ?>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>