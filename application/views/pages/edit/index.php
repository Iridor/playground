<? $this->load->view('layout/header'); ?>

<div class="row">
	<div class="col-lg-7 col-lg-offset-1">
		<h3>This is the default Edit Page. <a href="<?= base_url(); ?>" class="btn btn-primary pull-right">Back to Home</a> </h3>

	</div>
</div>

<div class="row">
	<div class="col-lg-7 col-lg-offset-1">
		<? if(count($widgets) > 0) { ?>

			<table id="widget-table" class="table table-condensed">

				<tr>
					<th>Name</th>
					<th>Description</th>
					<th class="align-right">Cost</th>
					<th class="align-right">Actions</th>
				</tr>
				
				<? foreach($widgets as $widget) { ?>

					<tr>
						<td><?= $widget->name; ?></td>
						<td><?= $widget->description; ?></td>
						<td class="align-right">$<?= number_format($widget->value,2); ?></td>
						<td class="align-right">
							<a href="<?= base_url('edit/edit_item/'.$widget->id); ?>" class="btn btn-primary">Edit</a>
							<a href="<?= base_url('edit/delete_item/'.$widget->id); ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
						</td>
					</tr>

				<? } ?>

				<tr>
					<td></td>
					<td class="align-right">Total Cost:</td>
					<td class="align-right">$<?= number_format($totalValue,2); ?></td>
					<td></td>
				</tr>

			</table>

		<? } else { ?>
			<span>No widgets in the system. Click <a href="<?= site_url('page-that-does-not-exist'); ?>">here</a> to add widgets</span>
		<? } ?>
	</div>
</div>

<? $this->load->view('layout/footer'); ?>