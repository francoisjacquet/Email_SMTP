<?php
/**
 * Functions
 *
 * @package Email SMTP
 */

// Register plugin functions to be hooked.
add_action( 'ProgramFunctions/SendEmail.fnc.php|before_send', 'EmailSMTPTriggered' );

// Triggered function.
function EmailSMTPTriggered( $hook_tag )
{
	global $phpmailer;

	if ( ! ( $phpmailer instanceof PHPMailer ) )
	{
		// Not sending email?
		return false;
	}

	if ( empty( Config( 'EMAIL_SMTP_HOST' ) ) )
	{
		// No SMTP host / server configured.
		return false;
	}

	// Get config options.
	$smtp = array(
		'EMAIL_SMTP_HOST' => Config( 'EMAIL_SMTP_HOST' ),
		'EMAIL_SMTP_PORT' => (int) Config( 'EMAIL_SMTP_PORT' ),
		'EMAIL_SMTP_USERNAME' => Config( 'EMAIL_SMTP_USERNAME' ),
		'EMAIL_SMTP_PASSWORD' => Config( 'EMAIL_SMTP_PASSWORD' ),
		'EMAIL_SMTP_FROM' => Config( 'EMAIL_SMTP_FROM' ),
		'EMAIL_SMTP_FROM_NAME' => Config( 'EMAIL_SMTP_FROM_NAME' ),
	);

	if ( defined( 'EMAIL_SMTP_PASSWORD' ) )
	{
		// Password set in the config.inc.php file.
		$smtp['EMAIL_SMTP_PASSWORD'] = EMAIL_SMTP_PASSWORD;
	}

	$phpmailer->IsSMTP();
	// Authentication if Username not empty.
	$phpmailer->SMTPAuth = ! empty( $smtp['EMAIL_SMTP_USERNAME'] );
	$phpmailer->Host = $smtp['EMAIL_SMTP_HOST'];
	$phpmailer->Port = $smtp['EMAIL_SMTP_PORT'];
	$phpmailer->Username = $smtp['EMAIL_SMTP_USERNAME'];
	$phpmailer->Password = $smtp['EMAIL_SMTP_PASSWORD'];
	$phpmailer->SMTPDebug = ROSARIO_DEBUG;

	if ( filter_var( $smtp['EMAIL_SMTP_FROM'], FILTER_VALIDATE_EMAIL ) )
	{
		// Defaults to rosariosis@yourdomain.com.
		$phpmailer->From = $smtp['EMAIL_SMTP_FROM'];
	}

	if ( ! empty( $smtp['EMAIL_SMTP_FROM_NAME'] ) )
	{
		// Defaults to RosarioSIS.
		$phpmailer->FromName = $smtp['EMAIL_SMTP_FROM_NAME'];
	}

	return true;
}
