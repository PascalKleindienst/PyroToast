<section class="title">
	<?php if($fails !== 0): ?>
	<h4 class="fail">
		<?php echo lang('pyrotoast:report')?> - <?php echo sprintf(lang('pyrotoast:x_failures'), $fails, $fails+$passes); ?> 
	</h4>
	<?php else: ?>
	<h4 class="success">
		<?php echo lang('pyrotoast:report')?> - All tests passed! 
	</h4>
	<?php endif; ?>
</section>

<section class="item">
	<div class="content"> 
	<?php foreach($test_results as $class => $data): ?>
		<h4> <?php echo $class; ?> </h4>
		<table>
			<tr>
				<th>
					<?php echo lang('pyrotoast:test_method') ?>
				</th>
				<th>
					<?php echo lang('pyrotoast:status') ?>
				</th>
				<th>
					<?php echo lang('pyrotoast:messages') ?>
				</th>
			</tr>
			
			<?php foreach($data['results'] as $key => $result): ?>
			<tr class="<?php echo ($result['result'] == $this->lang->line('ut_passed')) ? 'passed' : 'failed' ?>">
				<td><?php echo $result['method']; ?></td>
				<td><?php echo $result['result'] ?></td>
				<td><?php echo $data['messages'][$key]; ?></td>
			</tr>
			<?php endforeach; ?>
		</table>
	<?php endforeach; ?>
	</div>
</section>
