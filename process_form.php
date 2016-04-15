<?php

	$errors = array();
	$missing = array();

        //echo 'process_form.php ...';
        //echo '<br>';
        //
        //echo 'var dump ... of $_POST(send) ...' . '<br>';
        //var_dump($_POST['send']);
        //echo '<br>';
        //
        //if (empty($_POST['send'])) {
        //    echo '$_POST(send) is empty' . '<br>';
        //} else {
        //    echo '$_POST(send) is not empty' . '<br>';            
        //}
        //
        //echo 'got to A' . '<br>';
        //echo '<br>';
        
	//if (isset($_POST['send'])&&(!empty($_POST['send']))) {
	if (!isset($_POST['submit'])) {

            echo 'got to B' . '<br>';
            echo '<br>';

		// email processing script
		$to = 'danielkline19@hotmail.com'; // use your own email address
		$subject = 'From Portfolio';
		// list expected fields
		$expected = array ('name', 'email', 'comment');
		// set required fields
		$required = array ('email', 'name', 'comment');
		// create additional headers
		$headers = "From: User Inquiry<feedback@example.com>\r\n";
		$headers .= "Content-Type: text/plain; charset=utf-8";
		
		require ('./processmail.inc.php');
		if ($mailSent) {
			header('Location: http://www.danielklineweb.com/dwk_includes/contact_form_response.php');
			exit;
		}
	}
?>