<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$lot_number = $_POST['lot_number'];

if (
	!empty($first_name) && 
	!empty($last_name) && 
	!empty($email) && 
	!empty($phone) && 
	!empty($lot_number)
) {

	// Email Receiver Address
	$receiver_email = 'antonyrebolledo@gmail.com';

	// Email Receiver Name for SMTP Email
	$receiver_name 	= 'Boreana';

	// Email Subject
	$subject = 'Nuevo mensaje para lotes';

	$current_year = date('Y');

	// Build the email content.
	$message = '
		<!DOCTYPE html>
		<html lang="en" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">
		<head>
		<title></title>
		<meta charset="utf-8"/>
		<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
		<!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->
		<style>
				* {
					box-sizing: border-box;
				}

				body {
					margin: 0;
					padding: 0;
				}

				th.column {
					padding: 0
				}

				a[x-apple-data-detectors] {
					color: inherit !important;
					text-decoration: inherit !important;
				}

				#MessageViewBody a {
					color: inherit;
					text-decoration: none;
				}

				p {
					line-height: inherit
				}

				@media (max-width:670px) {
					.icons-inner {
						text-align: center;
					}

					.icons-inner td {
						margin: 0 auto;
					}

					.row-content {
						width: 100% !important;
					}

					.stack .column {
						width: 100%;
						display: block;
					}
				}
			</style>
		</head>
		<body style="background-color: #FFFFFF; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;">
		<table border="0" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #FFFFFF;" width="100%">
		<tbody>
		<tr>
		<td>
		<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #1a3831;" width="100%">
		<tbody>
		<tr>
		<td>
		<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="650">
		<tbody>
		<tr>
		<th class="column" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px;" width="100%">
		<table border="0" cellpadding="10" cellspacing="0" class="text_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
		<tr>
		<td>
		<div style="font-family: sans-serif">
		<div style="font-size: 12px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;">
		<p style="margin: 0; font-size: 12px; mso-line-height-alt: 14.399999999999999px;"> </p>
		</div>
		</div>
		</td>
		</tr>
		</table>
		<table border="0" cellpadding="0" cellspacing="0" class="image_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
		<tr>
		<td style="width:100%;padding-right:0px;padding-left:0px;">
		<div align="center" style="line-height:10px"><img src="http://boreana.infinityfreeapp.com/landing/images/logos/logo2.svg" style="display: block; height: auto; border: 0; width: 228px; max-width: 100%; margin-bottom:16px;" width="228;"/></div>
		</td>
		</tr>
		</table>
		<table border="0" cellpadding="10" cellspacing="0" class="text_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
		<tr>
		<td>
		<div style="font-family: sans-serif">
		<div style="font-size: 12px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;">
		<p style="margin: 0; font-size: 12px; mso-line-height-alt: 14.399999999999999px;"> </p>
		</div>
		</div>
		</td>
		</tr>
		</table>
		</th>
		</tr>
		</tbody>
		</table>
		</td>
		</tr>
		</tbody>
		</table>
		<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #1a3831;" width="100%">
		<tbody>
		<tr>
		<td>
		<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff;" width="650">
		<tbody>
		<tr>
		<th class="column" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-bottom: 1px solid transparent; border-left: 1px solid transparent; border-right: 1px solid transparent; border-top: 1px solid transparent; padding-top: 15px; padding-bottom: 15px;" width="100%">
		<table border="0" cellpadding="0" cellspacing="0" class="heading_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
		<tr>
		<td style="width:100%;text-align:center;">
		<h1 style="margin: 0; color: #000; font-size: 25px; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; line-height: 120%; text-align: center; direction: ltr; font-weight: normal; letter-spacing: normal; margin-top: 0; margin-bottom: 0;"><strong>Nuevo mensaje para lotes.</strong></h1>
		</td>
		</tr>
		</table>
		<table border="0" cellpadding="20" cellspacing="0" class="text_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
		<tr>
		<td>
		<div style="font-family: sans-serif">
		<div style="font-size: 14px; color: #000; line-height: 1.5; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;">
		<p style="margin: 0; font-size: 14px; text-align: left; letter-spacing: normal;">No. Lote: ' . $lot_number . '</p>
		<p style="margin: 0; font-size: 14px; text-align: left; letter-spacing: normal;">Nombre: ' . $first_name . '</p>
		<p style="margin: 0; font-size: 14px; text-align: left; letter-spacing: normal;">Apellido: ' . $last_name . '</p>
		<p style="margin: 0; font-size: 14px; text-align: left; letter-spacing: normal;">Correo: ' . $email . ' </p>
		<p style="margin: 0; font-size: 14px; text-align: left; letter-spacing: normal;">Teléfono: ' . $phone . ' </p>
		</div>
		</div>
		</td>
		</tr>
		</table>
		</th>
		</tr>
		</tbody>
		</table>
		</td>
		</tr>
		</tbody>
		</table>
		<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #1a3831;" width="100%">
		<tbody>
		<tr>
		<td>
		<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="650">
		<tbody>
		<tr>
		<th class="column" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px;" width="100%">
		<table border="0" cellpadding="10" cellspacing="0" class="text_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
		<tr>
		<td>
		<div style="font-family: sans-serif">
		<div style="font-size: 14px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;">
		<p style="margin: 0; font-size: 14px; text-align: center;"><span style="color:#ffffff;font-size:15px;">© ' . $current_year . ' Boreana. All rights reserved.</span></p>
		</div>
		</div>
		</td>
		</tr>
		</table>
		</th>
		</tr>
		</tbody>
		</table>
		</td>
		</tr>
		</tbody>
		</table>
		<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
		<tbody>
		<tr>
		<td>
		<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="650">
		<tbody>
		<tr>
		<th class="column" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px;" width="100%">
		<table border="0" cellpadding="0" cellspacing="0" class="icons_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
		<tr>
		<td style="color:#9d9d9d;font-family:inherit;font-size:15px;padding-bottom:5px;padding-top:5px;text-align:center;">
		<table cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
		<tr>
		<td style="text-align:center;">
		<!--[if vml]><table align="left" cellpadding="0" cellspacing="0" role="presentation" style="display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;"><![endif]-->
		<!--[if !vml]><!-->
		<table cellpadding="0" cellspacing="0" class="icons-inner" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block; margin-right: -4px; padding-left: 0px; padding-right: 0px;">
		<!--<![endif]-->
		</table>
		</td>
		</tr>
		</table>
		</td>
		</tr>
		</table>
		</th>
		</tr>
		</tbody>
		</table>
		</td>
		</tr>
		</tbody>
		</table>
		</td>
		</tr>
		</tbody>
		</table><!-- End -->
		</body>
		</html>
	';

	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: ' . $first_name . ' <' . $email . '>' . "\r\n";

	if(mail($receiver_email, $subject, $message, $headers)) {

	  	echo '{ "message": "¡Gracias, su mensaje ha sido enviado!" }';

	} else {

	  	echo '{ "message": "¡Lo sentimos, su mensaje no pudo ser enviado!" }';

	}

}
