<?php $this->load->view('errors', array('disable_accordions' => $disable_accordions)); ?>

<div class="securitee_top_nav">
	<div class="securitee_nav">
	
		<?php 
		foreach($menu_data AS $key => $value): ?>
		<span class="button"> 
			<a class="nav_button <?php echo ($type == $value['url'] ? 'current' : ''); ?>" href="<?php echo $url_base.'settings&section='.$value['url']; ?>"><?php echo lang($key.'_settings_menu')?></a>
		</span>
		<?php endforeach; ?>	
			
	</div>
</div>

<?php 

$tmpl = array (
	'table_open'          => '<table class="mainTable" border="0" cellspacing="0" cellpadding="0">',

	'row_start'           => '<tr class="even">',
	'row_end'             => '</tr>',
	'cell_start'          => '<td style="width:50%;">',
	'cell_end'            => '</td>',

	'row_alt_start'       => '<tr class="odd">',
	'row_alt_end'         => '</tr>',
	'cell_alt_start'      => '<td>',
	'cell_alt_end'        => '</td>',

	'table_close'         => '</table>'
);

$this->table->set_template($tmpl); 
$this->table->set_empty("&nbsp;");
?>
<div class="clear_left shun"></div>

<div style="min-height: 250px;">
<?php echo form_open($query_base.'settings', array('id'=>'my_accordion'))?>
<input type="hidden" value="yes" name="go_settings" />
<input type="hidden" value="<?php echo $type; ?>" name="section" />
<input type="hidden" value="<?php echo $settings['enable_file_monitor']; ?>" name="enable_file_monitor" />
<input type="hidden" value="<?php echo $settings['enable_cp_login_alert']; ?>" name="enable_cp_login_alert" />
<input type="hidden" value="<?php echo $settings['enable_cp_ip_locker']; ?>" name="enable_cp_ip_locker" />
<input type="hidden" value="<?php echo $settings['enable_quick_deny_cp_login']; ?>" name="enable_quick_deny_cp_login" />
<input type="hidden" value="<?php echo $settings['enable_client_ip_locker']; ?>" name="enable_client_ip_locker" />
<input type="hidden" value="<?php echo $settings['enable_expiring_passwords']; ?>" name="enable_expiring_passwords" />
<input type="hidden" value="<?php echo $settings['enable_expiring_members']; ?>" name="enable_expiring_members" />
<input type="hidden" value="<?php echo $settings['enable_cp_member_reg_email']; ?>" name="enable_cp_member_reg_email" />
<input type="hidden" value="<?php echo $settings['enable_cp_email_activate']; ?>" name="enable_cp_email_activate" />

<?php 
$settings['member_expire_ttl_custom'] = $settings['allow_ip_ttl_custom'] = $settings['pw_expire_ttl_custom'] = $settings['cp_reg_email_expire_ttl_custom'] = $settings['pw_ttl_custom'] = '';
if(!isset($ttl_options[$settings['member_expire_ttl']]))
{
	$settings['member_expire_ttl_custom'] = $settings['member_expire_ttl'];
	$settings['member_expire_ttl'] = 'custom';
}

switch($type)
{
	case 'configure_member_expire':
	case 'file_monitor':
	case 'cp_login_alert':
	case 'password_expire':
	case 'forgot_password':
	case 'ip_lockers':
	case 'cp_quick_deny':
	case 'cp_registration_email':
	case 'member_expire':
		$this->load->view('settings/'.$type, array('settings' => $settings)); 
	break;
	
	default:
		$this->load->view('settings/general');
	break;
}

?>
<br />
<div class="tableFooter">
	<div class="tableSubmit">
		<?php echo form_submit(array('name' => 'submit', 'value' => lang('submit'), 'class' => 'submit'));?>
	</div>
</div>	
<?php echo form_close()?>
</div>