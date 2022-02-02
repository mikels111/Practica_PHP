<style>
	a{
		width: 250px;
		display: block;
		padding: 2px 0px;
	}
	span{
		margin:30px;
	}
</style>
<?php
// if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
// 	$uri = 'https://';
// } else {
// 	$uri = 'http://';
// }
// $uri .= $_SERVER['HTTP_HOST'];
// header('Location: '.$uri.'/dashboard/');
if (isset($_GET['info'])) {
	phpinfo();
}
echo "<h2>Pasar 'info' por get para ver php.ini</h2>";
$files = scandir('./');


foreach ($files as $key) {
	echo "<a class='elemento' href='../$key'><span>$key</span></a><br>";
}
?>