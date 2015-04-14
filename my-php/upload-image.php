<?php 
	$raw_post_data = file_get_contents( 'php://input' );
	error_log( date("Y-m-d H:i:s")."\t\r\n", 3, '/tmp/upload-inmage.log' );
	
	$fp = fopen( dirname(__FILE__).'/wdh.png', 'wb' );
	if( $fp==false) {
		echo "文件创建失败！\n";
		exit;
	}
		
	fwrite( $fp, $raw_post_data );
	fclose( $fp );
	
	//echo $raw_post_data.'\n'; 
	echo  dirname(__FILE__).'/wdh.png'."  文件发送成功！".strlen($raw_post_data)."\n"; 
?> 