<? $this->load->view('layout/header'); ?>

<div class="row">
	<div class="col-lg-11 col-lg-offset-1">
		<h3>This is the Edit Item Page.</h3>
	</div>
</div>

<div class="row">
	<div class="col-lg-7 col-lg-offset-1">
		
		<form class="form-horizontal" role="form" method="post" action="">
			<div class="form-group">
				<label for="widgetName" class="col-lg-3 control-label">Widget Name</label>
				<div class="col-lg-5">
					<input type="text" name="widgetName" class="form-control" id="widgetName" value="<?= $widget->name ?>" />
				</div>
			</div>

			<div class="form-group">
				<label for="widgetDesc" class="col-lg-3 control-label">Widget Description</label>
				<div class="col-lg-5">
					<input type="text" name="widgetDesc" class="form-control" id="widgetDesc" value="<?= $widget->description ?>" />
				</div>
			</div>

			<div class="form-group">
				<label for="widgetValue" class="col-lg-3 control-label">Widget Value</label>
				<div class="col-lg-3">
					<div class="input-group">
						<span class="input-group-addon">$</span>
						<input type="text" name="widgetValue" class="form-control" id="widgetValue" value="<?= number_format($widget->value,2) ?>" />
					</div>
				</div>
			</div>

			<div class="form-group">
				<label for="widgetOrder" class="col-lg-3 control-label">Display Order</label>
				<div class="col-lg-1">
					<input type="text" name="widgetOrder" class="form-control" id="widgetOrder" value="<?= $widget->order ?>" />
				</div>
			</div>

			<div cass="form-group">
				<a href="<?= site_url('edit') ?>" class="btn btn-danger">Cancel</a>
				<button type="submit" name="submit" class="btn btn-success">Save Changes</button>
			</div>
		</form>


	</div>
</div>

<? $this->load->view('layout/footer'); ?>