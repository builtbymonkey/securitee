
<h3  class="accordion" id="configure_login_alert"><?php echo lang('configure_login_alert')?></h3>
<div>
	<?php 
	$this->table->set_heading('Setting','Value');
	$this->table->add_row('<label for="login_alert_emails">'.lang('login_alert_emails').'</label><div class="subtext">'.lang('login_alert_emails_instructions').'</div>', form_textarea('login_alert_emails', implode("\n", $settings['login_alert_emails']), 'cols="90" rows="6" id="login_alert_emails"'. $settings_disable));
	echo $this->table->generate();
	$this->table->clear();	
	?>
</div>