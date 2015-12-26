<h3  class="accordion" id="configure_forgot_pw"><?php echo lang('configure_forgot_pw')?></h3>
<div>
	<?php 
	$this->table->set_heading('Setting','Value');
	if(!isset($ttl_options[$settings['pw_ttl']]))
	{
		$settings['pw_ttl_custom'] = $settings['pw_ttl'];
		$settings['pw_ttl'] = 'custom';
	}	
	
	$this->table->add_row('<label for="pw_ttl">'.lang('pw_ttl').'</label><div class="subtext">'.lang('pw_ttl_instructions').'</div>', form_dropdown('pw_ttl', $ttl_options, $settings['pw_ttl'], 'id="pw_ttl"'). form_error('pw_ttl'). form_input('pw_ttl_custom', $settings['pw_ttl_custom'], 'id="pw_ttl_custom" style="display:none; width:40%; margin-left:10px;"'. $settings_disable));	
	$this->table->add_row('<label for="pw_email_subject">'.lang('pw_email_subject').'</label><div class="subtext">'.lang('pw_email_subject_instructions').'</div>', form_input('forgot_password_email_subject', $settings['forgot_password_email_subject'], 'id="pw_email_subject"'. $settings_disable));
	$this->table->add_row('<label for="pw_email_message">'.lang('pw_email_message').'</label><div class="subtext">'.lang('pw_email_message_instructions').'</div>', form_textarea('pw_email_message', $settings['pw_email_message'], 'cols="90" rows="6"'. $settings_disable));
	$this->table->add_row('<label for="pw_change_template">'.lang('pw_change_template').'</label><div class="subtext">'.lang('pw_change_template_instructions').'</div>', form_dropdown('pw_change_template', $template_options, $settings['pw_change_template'], 'id="pw_change_template"' . $settings_disable));
	$this->table->add_row('<label for="pw_email_mailtype">'.lang('pw_email_mailtype').'</label><div class="subtext">'.lang('pw_email_mailtype_instructions').'</div>', form_dropdown('pw_email_mailtype', $email_format_options, $settings['pw_email_mailtype'], 'id="pw_email_mailtype"'));
	
	echo $this->table->generate();
	$this->table->clear();	
	?>
</div>