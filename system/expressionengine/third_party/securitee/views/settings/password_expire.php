<h3  class="accordion" id="configure_pw_expire"><?php echo lang('configure_pw_expire')?></h3>
<input type="hidden" name="pw_expire_member_groups[]" value="" />
<div>
	<?php 
	$this->table->set_heading('Setting','Value');
	$this->table->add_row('<label for="pw_expire_member_groups">'.lang('pw_expire_member_groups').'</label><div class="subtext">'.lang('pw_expire_member_groups_instructions').'</div>', form_multiselect('pw_expire_member_groups[]', $pw_member_groups, $settings['pw_expire_member_groups'], 'id="pw_expire_member_groups"'. $settings_disable));
	
	//$settings['pw_expire_ttl_custom'] = $settings['cp_reg_email_expire_ttl_custom'] = $settings['pw_ttl_custom'] = '';
	if(!isset($ttl_options[$settings['pw_expire_ttl']]))
	{
		$settings['pw_expire_ttl_custom'] = $settings['pw_expire_ttl'];
		$settings['pw_expire_ttl'] = 'custom';
	}
	
	$this->table->add_row('<label for="pw_expire_ttl">'.lang('pw_expire_ttl').'</label><div class="subtext">'.lang('pw_expire_ttl_instructions').'</div>', form_dropdown('pw_expire_ttl', $ttl_options, $settings['pw_expire_ttl'], 'id="pw_expire_ttl"'). form_error('pw_expire_ttl'). form_input('pw_expire_ttl_custom', $settings['pw_expire_ttl_custom'], 'id="pw_expire_ttl_custom" style="display:none; width:40%; margin-left:10px;"'. $settings_disable));
	
	$this->table->add_row('<label for="pw_change_template">'.lang('pw_change_template').'</label><div class="subtext">'.lang('pw_change_template_instructions').'</div>', form_dropdown('pw_change_template', $template_options, $settings['pw_change_template'], 'id="pw_change_template"' . $settings_disable));
	
	echo $this->table->generate();
	$this->table->clear();	
	?>
</div>