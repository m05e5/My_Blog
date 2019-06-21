<?php
require 'form1.php';
$form = new Form( array('username' => 'Roger' ));

var_dump($form);

	/*echo $form-> input('username');
	echo $form-> input('password');*/
	echo $form-> submit();

?>