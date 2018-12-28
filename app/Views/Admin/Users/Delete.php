<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="<?= site_url('admin') ?>"><?= lang('Admin.homeBreadcrumbTitle') ?></a>
	</li>
	<li class="breadcrumb-item">
		<a href="<?= site_url('admin/users') ?>"><?= lang('Admin.usersBreadcrumbTitle') ?></a>
	</li>
	<li class="breadcrumb-item active"><?= lang('Admin.breadcrumbCommonShow') ?></li>
</ol>
<div class="card mb-3">
	<div class="card-header">
		<?= lang('Admin.usersDeleteHeader') ?>
	</div>
	<?= form_open('admin/users/delete/' . $user['id'], [], ['id' => $user['id']]) ?>
		<div class="card-body">
			<div class="form-group">
				<label><?= lang('Admin.usersLabelId') ?></label>
				<p><?= $user['id'] ?></p>
			</div>
			<div class="form-group">
				<label><?= lang('Admin.usersLabelEmail') ?></label>
				<p><?= $user['email'] ?></p>
			</div>
			<div class="form-group">
				<label><?= lang('Admin.usersLabelUsername') ?></label>
				<p><?= $user['username'] ?></p>
			</div>
		</div>
		<div class="card-footer">
			<button type="submit" class="btn btn-primary float-right"><?= lang('Admin.usersDeleteSubmit') ?></button>
			<a href="<?= site_url('admin/users') ?>" class="btn btn-warning"><?= lang('Admin.usersLinkBack') ?></a>
		</div>
	<?= form_close() ?>
</div>