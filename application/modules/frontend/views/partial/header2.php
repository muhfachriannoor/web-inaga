<div id="banner-page">
	<div class="container">
		<div class="spaced-between">
			<?php if($menunya == 'News') {?>
			<h3 class="title is-size-3 has-text-white"><?= $menunya;?></h3>
			<?php }if($sub_menunya2 != ''){ ?>
			<h3 class="title is-size-3 has-text-white"><?= $sub_menunya2;?></h3>
			<?php }else{ ?>
			<h3 class="title is-size-3 has-text-white"><?= $sub_menunya;?></h3>
			<?php } ?>
			<nav class="breadcrumb has-text-white" aria-label="breadcrumbs">
			  <ul>
			  	
			    <li><a href="#"><?= $menunya;?></a></li>
				

				<!-- BREADCRUMB -->
			    <?php if($sub_menunya != ''): ?>
			    <li class="is-active"><a href="#" aria-current="page"><?= $sub_menunya;?></a></li>
				<?php endif; ?>
			    <?php if($sub_menunya2 != ''): ?>
			    <li class="is-active"><a href="#" aria-current="page"><?= $sub_menunya2;?></a></li>
				<?php endif; ?>
				<!-- /BREADCRUMB -->
			  </ul>
			</nav>
		</div>
	</div>
</div>