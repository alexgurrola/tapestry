<?php
	$line = date('Y-m-d H:i:s') . " $_SERVER[REMOTE_ADDR] $_SERVER[REQUEST_URI] $_SERVER[HTTP_USER_AGENT]";
	file_put_contents('visitors.log', $line . PHP_EOL, FILE_APPEND);
?>

<html>
	<head>
		<title>Versidyne Inc</title>
	</head>
	<body>
		<p>Your domain has been pulled from the DNS pool and is now connected to a web server.  Please remain patient while we allocate space for your website.</p>
                <p>Thanks,<br>Administration</p>
		<p>Note: If you have reached this message in error, information regarding this issue has been logged based on the time of request.</p>
	</body>
</html>
