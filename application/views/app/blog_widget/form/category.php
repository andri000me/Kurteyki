<div class="c-field u-mb-medium">
	<label><input value="active" name="<?php echo $widget['id'] ?>[status]" type="radio" <?php echo (!empty($widget['data']['status'])) ? ($widget['data']['status'] == 'active') ? 'checked' : '' : 'checked'?>>Active</label>
	<label><input value="nonactive" name="<?php echo $widget['id'] ?>[status]" type="radio" <?php echo (!empty($widget['data']['status'])) ? ($widget['data']['status'] == 'nonactive') ? 'checked' : '' : '' ?>>NonActive</label>
</div>

<div class="c-field u-mb-small">
	<label class="c-field__label">Title : </label>
	<input required="" value="<?php echo $widget['data']['title'] ?>" class="c-input" name="<?php echo $widget['id'] ?>[title]" id="title" type="text" placeholder="title">
</div>

<div class="c-field u-mb-small">
	<label class="c-field__label">Select Category : </label>
	<?php foreach ($category as $data): ?>
		<?php  
		@$checked = (in_array($data['id'],$widget['data']['id'])) ? 'checked="checked"' : '';
		?>                              
		<div class="c-choice c-choice--checkbox u-mr-small" style="display: inline-block;">
			<input type="checkbox" id="pages-<?php echo md5($data['name'].$widget['id']) ?>" class="c-choice__input" name="<?php echo $widget['id'] ?>[id_category][]" value="<?php echo $data['id'] ?>" <?php echo $checked ?>>
			<label for="pages-<?php echo md5($data['name'].$widget['id']) ?>" class="c-choice__label"><?php echo $data['name'] ?></label>
		</div>                          
	<?php endforeach ?>
</div>

<input name="<?php echo $widget['id'] ?>[id]" type="hidden" value="<?php echo $widget['id']  ?>">
<input name="<?php echo $widget['id'] ?>[type]" type="hidden" value="<?php echo $widget['type']  ?>">