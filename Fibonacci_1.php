<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/pivots.css" rel="stylesheet">
<title>Pionts Pivots de Fibonacci.</title>
</head>

<body>
<?php
//?d=eur-usd
$devise=$_GET['d'];
$fb_ligne=$_GET['l'];
$test=$_GET['t'];
//http://localhost/pivot/Fibonacci.php?d=eur-usd&l=755&t=0
?>
<?php 
$temps = array(900,1800,3600);
$point = array();
for($j=0;$j<3;$j++)
{
$curl_handle=curl_init();
curl_setopt($curl_handle, CURLOPT_URL,'http://www.investing.com/currencies/'.$devise.'-technical?period='.$temps[$j].'');
curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Mozilla/5.0');
$query = curl_exec($curl_handle);
curl_close($curl_handle);
preg_match('|<table class="(.*)">(.*)</table>|', $query,$pivot);
//print_r($pivot);
$lines = array(); 
$lines = explode("\n", $query);
//$query =  htmlentities($query);
//$pivot = $lines[$fb_ligne];
if($test == 1)
{
	 print_r($lines);
}
 else if($test == 0)
{
	
 }

$fibo = array();
$fibo = explode("</td>",$pivot[0]);

	
	for($i=15;$i<22;$i++)
	{
		array_push($point,substr($fibo[$i],-6));
	}
}
//print_r($point);

?> 
<div class="main_fibonacci">
	<div class="pivot_box">
		<div class="heurs">EN 15 MINUTES</div>
		<div class="fibonacci_box">
			<ul class="intitule">
				<li>S3</li>
				<li>S2</li>
				<li>S1</li>
				<li>PP</li>
				<li>R1</li>
				<li>R2</li>
				<li>R3</li>
			</ul>
			<ul class="chiffres">
				<li><?php echo $point[0]; ?></li>
				<li><?php echo $point[1]; ?></li>
				<li><?php echo $point[2]; ?></li>
				<li><?php echo $point[3]; ?></li>
				<li><?php echo $point[4]; ?></li>
				<li><?php echo $point[5]; ?></li>
				<li><?php echo $point[6]; ?></li>
			</ul>
		</div>
	</div>
	<div class="pivot_box">
		<div class="heurs">EN 30 MINUTES</div>
		<div class="fibonacci_box">
			<ul class="intitule">
				<li>S3</li>
				<li>S2</li>
				<li>S1</li>
				<li>PP</li>
				<li>R1</li>
				<li>R2</li>
				<li>R3</li>
			</ul>
			<ul class="chiffres">
				<li><?php echo $point[7]; ?></li>
				<li><?php echo $point[8]; ?></li>
				<li><?php echo $point[9]; ?></li>
				<li><?php echo $point[10]; ?></li>
				<li><?php echo $point[11]; ?></li>
				<li><?php echo $point[12]; ?></li>
				<li><?php echo $point[13]; ?></li>
			</ul>
		</div>
	</div>
	<div class="pivot_box">
		<div class="heurs">EN 60 MINUTES</div>
		<div class="fibonacci_box">
			<ul class="intitule">
				<li>S3</li>
				<li>S2</li>
				<li>S1</li>
				<li>PP</li>
				<li>R1</li>
				<li>R2</li>
				<li>R3</li>
			</ul>
			<ul class="chiffres">
				<li><?php echo $point[14]; ?></li>
				<li><?php echo $point[15]; ?></li>
				<li><?php echo $point[16]; ?></li>
				<li><?php echo $point[17]; ?></li>
				<li><?php echo $point[18]; ?></li>
				<li><?php echo $point[19]; ?></li>
				<li><?php echo $point[20]; ?></li>
			</ul>
		</div>
	</div>
</div>
</body>
</html>