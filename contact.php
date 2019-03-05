<?php 
	include('load.php');
	include('header.php');
	echo navbar("contact");
	
	//form has been submitted -> send e-mail and show confirmation
	if (!empty($_POST)){

		//contact
		$to = "zchmielewska@gmail.com";
		$subject = 'cactus | ' . $_POST['subject'];
		$message = $_POST['message'];
		$message .= ' Sent by: ' . $_POST['name'];
		$message .= ' E-mail: ' . $_POST['email'];
		$headers = "From: " . $webmail . "\r\nContent-type: text/html\r\n";
		
		$mail = mail($to, $subject, $message, $headers);		
	}
	//form
?>
		<h2 style="text-align:center;">contact</h2>
		
		<?php
		if (isset($mail)) {
			if($mail==1) {
					echo "<div class=\"message\">Your message has been sent.</div>";
			} 
		}
		?>
		
		<form action="" method="post"/>
		<table class="contact">
			<tr>
				<td class="left">Name:</td>
				<td><input type="text" name="name" required></td>
			</tr>
			<tr>
				<td class="left">E-mail address:</td>
				<td><input type="text" name="email" required></td>
			</tr>
			<tr>
				<td class="left">Subject:</td>
				<td><input type="text" name="subject" required></td>
			</tr>
			<tr>
				<td class="left">Message:</td>
				<td><textarea name="message" rows="7" cols="40"></textarea></td>
			</tr>
		</table>
		
		<div style="margin-left: 320px;"><input type="submit" value="Send message"></div>
		</form>
		<br />
		
<?php	
	//footer
	include("footer.php");
?>