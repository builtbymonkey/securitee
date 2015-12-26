<h3  class="accordion" id="configure_file_monitor"><?php echo lang('configure_file_monitor')?></h3>
<div>
	<?php 
	$this->table->set_heading('Setting','Value');

	//$this->table->add_row('<label for="modification_detection">'.lang('modification_detection').'</label><div class="subtext">'.lang('modification_detection_instructions').'</div>', form_input('modification_detection', $settings['modification_detection'], 'id="modification_detection"'));
	$this->table->add_row('<label for="file_scan_path">'.lang('file_scan_path').'</label><div class="subtext">'.lang('file_scan_path_instructions').'</div>', form_input('file_scan_path', $settings['file_scan_path'], 'id="file_scan_path"'. $settings_disable));
	$this->table->add_row('<label for="file_scan_exclude_paths">'.lang('file_scan_exclude_paths').'</label><div class="subtext">'.lang('file_scan_exclude_paths_instructions').'</div>', form_textarea('file_scan_exclude_paths', implode("\n", $settings['file_scan_exclude_paths']), 'cols="90" rows="6"'. $settings_disable));
	$this->table->add_row('<label for="file_monitor_notify_emails">'.lang('file_monitor_notify_emails').'</label><div class="subtext">'.lang('file_monitor_notify_emails_instructions').'</div>', form_textarea('file_monitor_notify_emails', implode("\n", $settings['file_monitor_notify_emails']), 'cols="90" rows="6"'. $settings_disable));
	$this->table->add_row('<label>'.lang('file_monitor_cron_command').'</label><div class="subtext">'.lang('file_monitor_cron_command_instructions').'</div>', 'curl '.$cron_url);
	
	echo $this->table->generate();
	$this->table->clear();	
	?>
</div>