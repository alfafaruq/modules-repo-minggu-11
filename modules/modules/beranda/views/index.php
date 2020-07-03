<!-- About Section -->
<link href="<?= base_url('assets/template_beranda/'); ?>css/pagination_user.css" rel="stylesheet">
<section class="page-section bg-primary text-white mb-0 mt-5">
    <div class="container">
        <!-- About Section Heading -->
        <!-- <h3 class="page-section-heading text-center text-uppercase text-white mb-5">Daftar Produk</h3> -->
        <div class="row" id="view">
        	<?php $this->load->view('view', array('products=>$products'));?>
        </div>

        <div class="row" id="pagination">
        	<div class="col-4 offset-4">
        	<?= $pagination; ?>
        	</div>
        </div>

    </div>
</section>
