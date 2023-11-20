<?php  ?>
<section id="member">
	<div class="container">
		<div class="tabs is-boxed">
		    <ul>
			    <li class="is-active" data-tab="dsc-member">
			        <a>
			      		Get Involved
			        </a>
			    </li>
			    <li class="" data-tab="co-member">
			        <a>
			      		Coorporate Member	
			        </a>
			    </li>
		  	</ul>
		</div>
		<div id="dsc-member" class="tab-content current-tab">
			<div class="content has-text-grey">
				<b>Why Become an INAGA Member?</b>
				<p class="has-text-justified">INAGA currently has members as a corporate in 17 companies and individual members in amount of 500 members. Membership comprises companies involved in policy, planning, financing, and regulation of geothermal, as well as corporations engaged as developers, designers, suppliers, owners and operators. In addition, independent consultants and researchers specializing in geologist, geochemist, geophysicist, and geothermalist, as well as the geothermal and oil & gas engineer, power plant engineer and environmental aspects are encouraged to join as individual members. INAGA provides access to available knowledge, tools and networking opportunities within a multi-stakeholder community. This is an essential service for all involved in today’s geothermal and energy sector.</p>
				<br>
				<b>Membership Benefits</b>
				<ul>
					<li>Ensuring a strong and credible voice for the geothermal sector.</li>
					<li>Opportunity to shape future INAGA strategy and activities.</li>
					<li>Networking opportunities with leading geothermal and energy companies, utilities, government agencies and independent experts.</li>
					<li>Knowledge and tools for sustainable geothermal practices.</li>
					<li>Information on the latest opportunities and policy developments in the sector.</li>
					<li>Participation in working groups to address specific topics.</li>
				</ul>
				<br>
				<b>By joining INAGA, you will be demonstrating your commitment to the future of geothermal energy development. <a href="">Join Us</a></b>
			</div>
		</div>
		<div id="co-member" class="tab-content">
			<div class="columns is-multiline is-desktop is-tablet is-mobile">
				<?php foreach($member->result() as $no => $show): ?>
				<div class="column is-4-desktop is-6-mobile-xs is-4-mobile is-6-tablet">
					<div class="columns">
						<div class="column is-5">
							<img src="<?= base_url('asset/backend/upload/member/'.$show->foto_member);?>" alt="">
						</div>
						<div class="column">
							<div>
								<p><b><?= $show->nama_member;?></b></p>
								<a href="">details</a>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>

	</div>
</section>