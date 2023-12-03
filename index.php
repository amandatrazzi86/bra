<?php 

include('_functions/functions.php');

$UserId = uniqid();
$_SESSION['uniq_id'] = $UserId;

$checkAcessoMobile = checkMobile();

if($checkAcessoMobile):
	header('Location: mobile/');
else:	
	header('Location: html/');
endif;

?>