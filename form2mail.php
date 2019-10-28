<?php 
# You can use this script to submit your forms or to receive orders by email.
$MailToAddress = "contacto@tech-innovations.tv"; // your email address
$redirectURL = "http://www.mekatech.tv/respuesta.html"; // the URL of the thank you page.

# optional settings
$MailSubject = "[CONTACTO DESDE MEKATECH.TV]"; // the subject of the email
$MailToCC = ""; // CC (carbon copy) also send the email to this address (leave empty if you don't use it)
# in the $MailToCC field you can have more then one e-mail address like "a@yoursite.com, b@yoursite.com, c@yoursite.com"

# If you are asking for a name and an email address in your form, you can name the input fields "name" and "email".
# If you do this, the message will apear to come from that email address and you can simply click the reply button to answer it.

# If you have a multiple selection box or multiple checkboxes, you MUST name the multiple list box or checkbox as "name[]" instead of just "name" 
# you must also add "multiple" at the end of the tag like this: <select name="myselectname[]" multiple> 
# you have to do the same with checkboxes

# This script was written by George A. & Calin S. from Web4Future.com
# There are no copyrights in the sent emails.

# SPAMASSASSIN RATING: 0.4

# DO NOT EDIT BELOW THIS LINE UNLESS YOU KNOW WHAT YOU ARE DOING ===================================================
# ver. 1.6.2
if (preg_match ("/".$_SERVER["SERVER_NAME"]."/i", $_SERVER["HTTP_REFERER"])) {
$w4fMessage = "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\"><html><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\"></head><body>";
if (count($_GET) >0) {
	reset($_GET);
	while(list($key, $val) = each($_GET)) {
		$GLOBALS[$key] = $val;
		if (is_array($val)) { 
			$w4fMessage .= "<b>$key:</b> ";
			foreach ($val as $vala) { 
				$vala =stripslashes($vala);
				$w4fMessage .= "$vala, ";
			} 
			$w4fMessage .= "<br>";
		} 	
		else {
			$val = stripslashes($val);
			if (($key == "Submit") || ($key == "submit")) { } 	
			else { 	if ($val == "") { $w4fMessage .= "$key: - <br>"; }
					else { $w4fMessage .= "<b>$key:</b> $val<br>"; }
			}
		}
	} // end while
}//end if
else {
	reset($_POST);
	while(list($key, $val) = each($_POST)) {
		$GLOBALS[$key] = $val;
		if (is_array($val)) { 
			$w4fMessage .= "<b>$key:</b> ";
			foreach ($val as $vala) { 
				$vala =stripslashes($vala);
				$w4fMessage .= "$vala, ";
			} 
			$w4fMessage .= "<br>";
		} 	
		else {
			$val = stripslashes($val);
			if (($key == "Submit") || ($key == "submit")) { } 	
			else { 	if ($val == "") { $w4fMessage .= "$key: - <br>"; }
					else { $w4fMessage .= "<b>$key:</b> $val<br>"; }
			}
		}
	} // end while
	}//end else
$w4fMessage = "<font face=verdana size=2>".$w4fMessage."</font></body></html>";
if (!$email) {$email = "contacto@mekatech.tv";}
if (!mail($MailToAddress, $MailSubject, $w4fMessage, "From: $name <$email>\r\nReply-To: $name <$email>\r\nMessage-ID: <". md5(rand()."".time()) ."@". ereg_replace("www.","",$_SERVER["SERVER_NAME"]) .">\r\nMIME-Version: 1.0\r\nX-Priority: 3\r\nX-Mailer: PHP/" . phpversion()."\r\nX-MimeOLE: Produced By Web4Future Easiest Form2Mail v1.5\r\nBCc: $MailToCC\r\nContent-Type: text/html; charset=ISO-8859-1\r\nContent-Transfer-Encoding: 8bit\r\n")) { echo "Error sending e-mail!";}
else { header("Location: ".$redirectURL); }
} else { echo "<center><font face=verdana size=3 color=red><b>ILLEGAL EXECUTION DETECTED!</b></font></center>";}
?>
