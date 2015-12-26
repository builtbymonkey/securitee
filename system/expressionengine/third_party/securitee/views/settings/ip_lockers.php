<h3  class="accordion" id="configure_ip_locker"><?php echo lang('configure_ip_locker')?></h3>
<input type="hidden" name="allow_ip_add_member_groups[]" value="" />
<div>
	<?php	
	if(!isset($ttl_options[$settings['allow_ip_ttl']]))
	{
		$settings['allow_ip_ttl_custom'] = $settings['allow_ip_ttl'];
		$settings['allow_ip_ttl'] = 'custom';
	}
	
	$this->table->set_heading('Setting','Value');
	$this->table->add_row('<label for="allow_ip_add_member_groups">'.lang('allow_ip_add_member_groups').'</label><div class="subtext">'.lang('allow_ip_add_member_groups_instructions').'</div>', form_multiselect('allow_ip_add_member_groups[]', $pw_member_groups, $settings['allow_ip_add_member_groups'], 'id="allow_ip_add_member_groups"'. $settings_disable));
	$this->table->add_row('<label for="allowed_ips">'.lang('allowed_ips').'</label><div class="subtext">'.lang('allowed_ips_instructions').'</div>', form_textarea('allowed_ips', implode("\n", $settings['allowed_ips']), 'cols="90" rows="6" id="allowed_ips"'. $settings_disable));
	$this->table->add_row('<label for="allow_ip_ttl">'.lang('allow_ip_ttl').'</label><div class="subtext">'.lang('allow_ip_ttl_instructions').'</div>', form_dropdown('allow_ip_ttl', $ttl_options, $settings['allow_ip_ttl'], 'id="allow_ip_ttl"'). form_error('allow_ip_ttl'). form_input('allow_ip_ttl_custom', $settings['allow_ip_ttl_custom'], 'id="allow_ip_ttl_custom" style="display:none; width:40%; margin-left:10px;"'. $settings_disable));	
	$this->table->add_row('<label for="allow_ip_email_subject">'.lang('allow_ip_email_subject').'</label><div class="subtext">'.lang('allow_ip_email_subject_instructions').'</div>', form_input('allow_ip_email_subject', $settings['allow_ip_email_subject'], 'id="allow_ip_email_subject"'. $settings_disable));
	$this->table->add_row('<label for="allow_ip_email_message">'.lang('allow_ip_email_message').'</label><div class="subtext">'.lang('allow_ip_email_message_instructions').'</div>', form_textarea('allow_ip_email_message', $settings['allow_ip_email_message'], 'cols="90" rows="6"'. $settings_disable));
	$this->table->add_row('<label for="allow_ip_email_mailtype">'.lang('allow_ip_email_mailtype').'</label><div class="subtext">'.lang('allow_ip_email_mailtype_instructions').'</div>', form_dropdown('allow_ip_email_mailtype', $email_format_options, $settings['allow_ip_email_mailtype'], 'id="allow_ip_email_mailtype"'));
	$this->table->add_row('<label for="allow_ip_template">'.lang('allow_ip_template').'</label><div class="subtext">'.lang('allow_ip_template_instructions').'</div>', form_dropdown('allow_ip_template', $template_options, $settings['allow_ip_template'], 'id="allow_ip_template"' . $settings_disable));
	
	echo $this->table->generate();
	$this->table->clear();	
	?>
</div>