<?php
if(isset($_POST['haut']))
{
$haut=$_POST['haut'];
$bas=$_POST['bas'];
$close=$_POST['close'];

//Point Pivots
$P=($haut+$bas+$close)/3;
//Points de fibonacci

$R3=$P+1.0000*($haut-$bas);
$R2=$P+0.6180*($haut-$bas);
$R1=$P+0.3820*($haut-$bas);
$S1=$P-0.3820*($haut-$bas);
$S2=$P-0.6180*($haut-$bas);
$S3=$P-1.0000*($haut-$bas);

//Points intermédiaires de fibonacci

$MR3=$R2+($R3-$R2)/2;
$MR2=$R1+($R2-$R1)/2;
$MR1=$P+($R1-$P)/2;
$MS1=$P-($P-$S1)/2;
$MS2=$S1-($S1-$S2)/2;
$MS3=$S2-($S2-$S3)/2;

}

  
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pionts Pivots de Fibonacci.</title>
</head>

<body>

<div style="height:100px;  margin: auto; width: 1000px;">
<div style="float:left; margin-right:30px;">
<div>S3</div>
<div><?php if(isset($_POST['haut'])) echo round($S3,4);?></div>
<div>MS3</div>
<div><?php if(isset($_POST['haut'])) echo round($MS3,4);?></div>
</div>
<div style="float:left; margin-right:30px;">
<div>S2</div>
<div><?php if(isset($_POST['haut'])) echo round($S2,4);?></div>
<div>MS2</div>
<div><?php if(isset($_POST['haut'])) echo round($MS2,4);?></div>
</div>
<div style="float:left; margin-right:30px;">
<div>S1</div>
<div><?php if(isset($_POST['haut'])) echo round($S1,4);?></div>
<div>MS1</div>
<div><?php if(isset($_POST['haut'])) echo round($MS1,4);?></div>
</div>
<div style="float:left; margin-right:30px;">
<div>P</div>
<div><?php if(isset($_POST['haut'])) echo round($P,4);?></div>
<div>P</div>
<div><?php if(isset($_POST['haut'])) echo round($P,4);?></div>
</div>
<div style="float:left; margin-right:30px;">
<div>R1</div>
<div><?php if(isset($_POST['haut'])) echo round($R1,4);?></div>
<div>MR1</div>
<div><?php if(isset($_POST['haut'])) echo round($MR1,4);?></div>
</div>
<div style="float:left; margin-right:30px;">
<div>R2</div>
<div><?php if(isset($_POST['haut'])) echo round($R2,4);?></div>
<div>MR2</div>
<div><?php if(isset($_POST['haut'])) echo round($MR2,4);?></div>
</div>
<div style="float:left; margin-right:30px;">
<div>R3</div>
<div><?php if(isset($_POST['haut'])) echo round($R3,4);?></div>
<div>MR3</div>
<div><?php if(isset($_POST['haut'])) echo round($MR3,4);?></div>
</div>
</div>
<div>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
<span>Haut (H) :</span>
<textarea name="haut" cols="40" rows="1" ></textarea> <br/>
<span>Bas (L) :</span>
<textarea name="bas" cols="40" rows="1" ></textarea> <br/>
<span>Cloture (c) :</span>
<textarea name="close" cols="40" rows="1" ></textarea> <br/>
<div><input type="submit" name="envoyer" value="Soumettre" /></div>
</form>
</div>
</body>
</html>