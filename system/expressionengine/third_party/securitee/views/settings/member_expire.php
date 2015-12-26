<h3  class="accordion" id="configure_member_expire"><?php echo lang('configure_member_expire')?></h3>
<input type="hidden" name="member_expire_member_groups[]" value="" />
<div>
	<?php 
	$this->table->set_heading('Setting','Value');
	$this->table->add_row('<label for="member_expire_member_groups">'.lang('member_expire_member_groups').'</label><div class="subtext">'.lang('member_expire_member_groups_instructions').'</div>', form_multiselect('member_expire_member_groups[]', $pw_member_groups, $settings['member_expire_member_groups'], 'id="member_expire_member_groups" data-placeholder="'.lang('member_expire_member_groups').'"'. $settings_disable));
	
	$settings['member_expire_ttl_custom'] = $settings['allow_ip_ttl_custom'] = $settings['pw_expire_ttl_custom'] = $settings['cp_reg_email_expire_ttl_custom'] = $settings['pw_ttl_custom'] = '';
	if(!isset($ttl_options[$settings['member_expire_ttl']]))
	{
		$settings['member_expire_ttl_custom'] = $settings['member_expire_ttl'];
		$settings['member_expire_ttl'] = 'custom';
	}
	
	$this->table->add_row('<label for="member_expire_ttl">'.lang('member_expire_ttl').'</label><div class="subtext">'.lang('member_expire_ttl_instructions').'</div>', form_dropdown('member_expire_ttl', $ttl_options, $settings['member_expire_ttl'], 'id="member_expire_ttl"'). form_error('member_expire_ttl'). form_input('member_expire_ttl_custom', $settings['member_expire_ttl_custom'], 'id="member_expire_ttl_custom" style="display:none; width:40%; margin-left:10px;"'. $settings_disable));
	echo $this->table->generate();
	$this->table->clear();	
	?>
</div>