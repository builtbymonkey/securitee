<h3  class="accordion"><?php echo lang('configure_securitee')?></h3>
<input type="hidden" value="0" name="enable_file_monitor" />
<input type="hidden" value="0" name="enable_cp_login_alert" />
<input type="hidden" value="0" name="enable_cp_ip_locker" />
<input type="hidden" value="0" name="enable_quick_deny_cp_login" />
<input type="hidden" value="0" name="enable_client_ip_locker" />
<input type="hidden" value="0" name="enable_expiring_passwords" />
<input type="hidden" value="0" name="enable_expiring_members" />
<input type="hidden" value="0" name="enable_cp_member_reg_email" />
<input type="hidden" value="0" name="enable_cp_email_activate" />
<div>
	<?php 
	
	$this->table->set_heading('Setting','Value');		
	$this->table->add_row('<label for="enable_file_monitor">'.lang('enable_file_monitor').'</label><div class="subtext">'.lang('enable_file_monitor_instructions').'</div>', form_checkbox('enable_file_monitor', '1', $settings['enable_file_monitor'], 'id="enable_file_monitor"' . $settings_disable));
	//$this->table->add_row('<label for="enable_exploit_scanner">'.lang('enable_exploit_scanner').'</label><div class="subtext">'.lang('enable_exploit_scanner_instructions').'</div>', form_checkbox('enable_exploit_scanner', '1', $settings['enable_exploit_scanner'], 'id="enable_exploit_scanner"'));
	$this->table->add_row('<label for="enable_cp_login_alert">'.lang('enable_cp_login_alert').'</label><div class="subtext">'.lang('enable_cp_login_alert_instructions').'</div>', form_checkbox('enable_cp_login_alert', '1', $settings['enable_cp_login_alert'], 'id="enable_cp_login_alert"' . $settings_disable));
	$this->table->add_row('<label for="enable_cp_ip_locker">'.lang('enable_cp_ip_locker').'</label><div class="subtext">'.lang('enable_cp_ip_locker_instructions').'</div>', form_checkbox('enable_cp_ip_locker', '1', $settings['enable_cp_ip_locker'], 'id="enable_cp_ip_locker"' . $settings_disable));
	$this->table->add_row('<label for="enable_quick_deny_cp_login">'.lang('enable_quick_deny_cp_login').'</label><div class="subtext">'.lang('enable_quick_deny_cp_login_instructions').'</div>', form_checkbox('enable_quick_deny_cp_login', '1', $settings['enable_quick_deny_cp_login'], 'id="enable_quick_deny_cp_login"' . $settings_disable));
	$this->table->add_row('<label for="enable_client_ip_locker">'.lang('enable_client_ip_locker').'</label><div class="subtext">'.lang('enable_client_ip_locker_instructions').'</div>', form_checkbox('enable_client_ip_locker', '1', $settings['enable_client_ip_locker'], 'id="enable_client_ip_locker"' . $settings_disable));
	$this->table->add_row('<label for="enable_expiring_passwords">'.lang('enable_expiring_passwords').'</label><div class="subtext">'.lang('enable_expiring_passwords_instructions').'</div>', form_checkbox('enable_expiring_passwords', '1', $settings['enable_expiring_passwords'], 'id="enable_expiring_passwords"'. $settings_disable));
	$this->table->add_row('<label for="enable_expiring_members">'.lang('enable_expiring_members').'</label><div class="subtext">'.lang('enable_expiring_members_instructions').'</div>', form_checkbox('enable_expiring_members', '1', $settings['enable_expiring_members'], 'id="enable_expiring_members"'. $settings_disable));
	$this->table->add_row('<label for="enable_cp_member_reg_email">'.lang('enable_cp_member_reg_email').'</label><div class="subtext">'.lang('enable_cp_member_reg_email_instructions').'</div>', form_checkbox('enable_cp_member_reg_email', '1', $settings['enable_cp_member_reg_email'], 'id="enable_cp_member_reg_email"'.$settings_disable));
	$this->table->add_row('<label for="enable_cp_email_activate">'.lang('enable_cp_reg_email_on_activate').'</label><div class="subtext">'.str_replace('##BASE##', BASE, lang('enable_cp_reg_email_on_activate_instructions')).'</div>', form_checkbox('enable_cp_email_activate', '1', $settings['enable_cp_email_activate'], 'id="enable_cp_email_activate"'.$settings_disable));
	
	echo $this->table->generate();
	$this->table->clear();	
	?>
</div>

<h3  class="accordion"><?php echo lang('license_number')?></h3>
<div>
	<?php 
	$this->table->set_heading('Setting','Value');
	$this->table->add_row('<label for="license_number">'.lang('license_number').'</label>', form_input('license_number', $settings['license_number'], 'id="license_number"'. $settings_disable));
	echo $this->table->generate();
	$this->table->clear();	
	?>
</div>

<input type="hidden" name="allowed_ips" value="<?php echo implode("\n", $settings['allowed_ips']); ?>" />