<?php
	require "fileupload.class.php";

	$up=new FileUpload(array('isRandName'=>true,'allowType'=>array('txt', 'doc', 'php', 'gif'),'FilePath'=>'./fileupload/', 'MAXSIZE'=>200000));

	echo '<pre>';

	if($up->uploadFile('spic')){
		print_r($up->getNewFileName());
	}else{
		print_r($up->getErrorMsg());
	}

	echo '</pre>';
