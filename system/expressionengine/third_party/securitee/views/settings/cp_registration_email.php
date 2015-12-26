<h3  class="accordion" id="configure_cp_reg_email"><?php echo lang('configure_cp_reg_email')?></h3>
<div>
	<?php 
	$this->table->set_heading('Setting','Value');
	if(!isset($ttl_options[$settings['cp_reg_email_expire_ttl']]))
	{
		$settings['cp_reg_email_expire_ttl_custom'] = $settings['cp_reg_email_expire_ttl'];
		$settings['cp_reg_email_expire_ttl'] = 'custom';
	}	

		
	//$this->table->add_row('<label for="cp_reg_email_on_activate">'.lang('cp_reg_email_on_activate').'</label><div class="subtext">'.lang('cp_reg_email_on_activate_instructions').'</div>', form_checkbox('cp_reg_email_on_activate', 1, $settings['cp_reg_email_on_activate'], 'id="cp_reg_email_on_activate"'). $settings_disable);
		
	$this->table->add_row('<label for="cp_reg_email_expire_ttl">'.lang('cp_reg_email_expire_ttl').'</label><div class="subtext">'.lang('cp_reg_email_expire_ttl_instructions').'</div>', form_dropdown('cp_reg_email_expire_ttl', $ttl_options, $settings['cp_reg_email_expire_ttl'], 'id="cp_reg_email_expire_ttl"'). form_error('schedule'). form_input('cp_reg_email_expire_ttl_custom', $settings['cp_reg_email_expire_ttl_custom'], 'id="cp_reg_email_expire_ttl_custom" style="display:none; width:40%; margin-left:10px;"'. $settings_disable));
	
	$this->table->add_row('<label for="cp_reg_email_subject">'.lang('cp_reg_email_subject').'</label><div class="subtext">'.lang('cp_reg_email_subject_instructions').'</div>', form_input('cp_reg_email_subject', $settings['cp_reg_email_subject'], 'id="cp_reg_email_subject"'. $settings_disable));
	$this->table->add_row('<label for="cp_reg_email_message_body">'.lang('cp_reg_email_message').'</label><div class="subtext">'.lang('cp_reg_email_message_instructions').'</div>', form_textarea('cp_reg_email_message_body', $settings['cp_reg_email_message_body'], 'cols="90" rows="6"' . $settings_disable));
	$this->table->add_row('<label for="pw_change_template">'.lang('pw_change_template').'</label><div class="subtext">'.lang('pw_change_template_instructions').'</div>', form_dropdown('pw_change_template', $template_options, $settings['pw_change_template'], 'id="pw_change_template"' . $settings_disable));
	$this->table->add_row('<label for="cp_reg_email_mailtype">'.lang('cp_reg_email_mailtype').'</label><div class="subtext">'.lang('cp_reg_email_mailtype_instructions').'</div>', form_dropdown('cp_reg_email_mailtype', $email_format_options, $settings['cp_reg_email_mailtype'], 'id="cp_reg_email_mailtype"'));
		
	echo $this->table->generate();
	$this->table->clear();	
	?>
</div>