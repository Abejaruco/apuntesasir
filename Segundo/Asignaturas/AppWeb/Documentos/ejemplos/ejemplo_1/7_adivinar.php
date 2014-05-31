<?php
	
	if(!isset($_POST['valor'])){
		$num=rand(1,1000);
		$intent=0;
		$min=1;
		$max=1000;
		$valor="";
	} else { //cada vez que realizamos un intento
		//print_r($_POST);
		$num=$_POST["num"];
		$valor=$_POST["valor"];
		$min=$_POST["min"];
		$max=$_POST["max"];
		$intent=$_POST["intent"]+1;
		if($valor != $num){
			if($intent == 10){
				print "Lo siento, no has adivinado el número. <br> el número era: $num <br>
						Si en 10 segundos no se ha reiniciado pincha <a href='7_adivinar.php'>aquí</a>";
				header("refresh:10; 7_adivinar.php");
				exit();
			}
			if($valor > $num){
				$max=$valor-1;
			}else{
				$min=$valor+1;
			}
		}else{
			$mensaje ="Lo siento, no has adivinado el número. <br> el número era: $num <br>
				Si en 10 segundos no se ha reiniciado pincha <a href='7_adivinar.php'>aquí</a>";
			print $mensaje;
			header("refresh:10; 7_adivinar.php");
		}
	}
?>
<form method='POST' action=7_adivinar.php>
				<?php #print "$num <br>"; ?>
				<?php $restante = 10 - $intent;?>
				<?php print "Lo has intentado $intent veces. Te quedan $restante.<br>"; ?>
				Intenta adivinar el número que he pensado (<?php echo "$min-$max";?>).<br>
				Numero: <input type=text name=valor value=<?php echo $valor;?>>
				<input type=hidden name=num value=<?php echo $num;?>>
				<input type=hidden name=min value=<?php echo $min;?>>
				<input type=hidden name=max value=<?php echo $max;?>>
				<input type=hidden name=intent value=<?php echo $intent;?>>
				<input type=submit>
</form>
