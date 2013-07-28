<section class="title">
	<h4> <?php echo lang('pyrotoast:module_title'); ?> </h4>
</section>

<section class="item">
	<div class="content">
		<?php template_partial('filters'); ?>
		<?php echo form_open('admin/pyrotoast/run_tests'); ?>
		<div id="filter-stage">
			<?php template_partial('tests'); ?>
		</div>  
		<div class="table_action_buttons">
			<?php $this->load->view('admin/partials/buttons', array('buttons' => array('activate'))); ?>
		</div>
		<?php echo form_close(); ?>
	</div>
</section>
