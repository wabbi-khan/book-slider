<?
	
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	
	$user_name = $_POST['user_name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$product_code = $_POST['product_code'];
	$comment = $_POST['comment'];
	
	
	$from="info@jjrnetwork.com";
	$headers="MIME-Version: 1.0\r\n";
	$headers.="Content-type: text/html; charset=utf-8\r\n";
	$headers.="From: JJR NetWork <".$from.">\r\n";
	$to="johnny@jjrnetwork.com";
	
	$subject="Order from JJR Network"; 
	
	$message='<table width=600 border=0 cellspacing=1 cellpadding=1 bgcolor="">
		<tr>
			<td height="23" colspan="2" align="left" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;">&nbsp;Dear admin,</td>
		</tr>
		<tr>
			<td colspan="2" align="left" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;">&nbsp;</td>
		</tr>
		<tr>
			<td height="23" colspan="2" align="left" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;">New Order Has Been Received in JJR</td>
		<tr>
			<td height="23" colspan="2" align="left" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;">Name: '.$user_name.'</td>
		<tr>
			<td height="23" colspan="2" align="left" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;">Phone: '.$phone.'</td>
		</tr>
		<tr>
			<td height="23" colspan="2" align="left" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;">Email: '.$email.'</td>
		<tr>
			<td height="23" colspan="2" align="left" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;">Product Code: '.$product_code.'</td>
		</tr>
		<tr>
			<td height="23" colspan="2" align="left" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;">Comment: '.$comment.'</td>
		</tr>
		<tr>
			<td colspan="2" align="left" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2" align="left" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;"><h3>Best Regards,</h3></td>
		</tr>
		<tr>
			<td colspan="2" align="left" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;"><h3>JJR Team</h3></td>
		</tr>
	</table>';
	
	mail($to, $subject, $message, $headers);
	
	echo "Your order is received we will contact you soon";
	
?>