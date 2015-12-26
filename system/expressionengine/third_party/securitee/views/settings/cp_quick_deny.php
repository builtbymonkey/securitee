<h3  class="accordion" id="configure_cp_quick_deny"><?php echo lang('configure_cp_quick_deny')?></h3>
<input type="hidden" name="cp_quick_deny_exclude_groups[]" value="" />
<div>
	<?php 
	$this->table->set_heading('Setting','Value');
	$this->table->add_row('<label for="cp_quick_deny_exclude_groups">'.lang('cp_quick_deny_exclude_groups').'</label><div class="subtext">'.lang('cp_quick_deny_exclude_groups_instructions').'</div>', form_multiselect('cp_quick_deny_exclude_groups[]', $member_groups, $settings['cp_quick_deny_exclude_groups'], 'id="cp_quick_deny_exclude_groups"'. $settings_disable));
	echo $this->table->generate();
	$this->table->clear();	
	?>
</div>