<?php

	// assume nothing is suspect
	$suspect = false;
	// create a pattern to locate suspect phrases.  Perform case-insensitive search for any of the following: "Content-Type:", "Bcc:", or "Cc:"  Written in Perl-compatible regular expression (PCRE)
	$pattern = '/Content-Type:|Bcc:|Cc:/i';
	
	// function to check for suspect phrases
	// accept this function for the way it works
	// the '&$suspect' means passing by reference
	function isSuspect ($val, $pattern, &$suspect) {
		// if the variable is an array, loop through each element
		// and pass it recursively back to the same function
		if (is_array($val)) {
			foreach ($val as $item) {
				isSuspect ($item, $pattern, $suspect);
			}
		} else {
			// if one of the suspect phrases is found, set Boolean to true
			if (preg_match($pattern, $val)) {
				$suspect = true;
			}
		}
	}
	if (!$suspect) {
		foreach ($_POST as $key => $value) {
			//assign to temporary variable and strip whitespace if not an array
			$temp = is_array($value) ? $value : trim($value);
			//if empty and required, add to $missing array
			if (empty($temp) && in_array($key, $required)) {
				$missing[] = $key;
				${$key} = '';
			} elseif (in_array($key, $expected)) {
				//otherwise, assign to a variable of the same name as $key
				${$key} = $temp;
			}
		}
	}
	// validate the user's email
	if (!$suspect && !empty($email)) {
		$validemail = filter_input (INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
		if ($validemail) {
			$headers .= "\r\nReply-To: $validemail";
		} else {
			$errors['email'] = true;
		}
	}
	// initialize variable to redirect user to thank you page after email has been sent
	$mailSent = false;
	// go ahead only if not suspect and all required fields OK
	if (!$suspect && !$missing && !$errors) {
		// initialize the $message variable
		$message = '';
		// loop through the $expected array
		foreach ($expected as $item) {
			if (isset(${$item}) && !empty(${$item})) {
				$val = ${$item};
			} else {
				// if it has no value, assign 'Not Selected'
				$val = 'Not Selected';
			}
			// if an array, expand as comma-separated string
			if (is_array($val)) {
				$val = implode (', ', $val);
			}
			// replace underscores and hyphens in the label with spaces
			$item = str_replace (array('_', '-'), ' ', $item);
			// add label and value to the message body
			$message .= ucfirst($item).": $val\r\n\r\n";
		}
		// limit line length to 70 characters
		$message = wordwrap($message, 70);
		$to = 'danielkline19@hotmail.com';
		$mailSent = mail($to, $subject, $message);
		if (!$mailsent) {
			$errors['mailfail'] = true;
		}
	}
?>
