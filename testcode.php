
<?php 

function getBornOfYear($ageOfDeath,$yearOfDeath) {

	return $yearOfDeath - $ageOfDeath;	

}

function getPeopleKilledOnYear($year){
	$village = 0;
	
	for($i = 1;$i < $years;$i++){
		if($year == 1){
			$village = $village + 1;
		}else if($year == 2){
			$village = $village + 1;
		}else if($year == 3){
			$village = $village + 2;
		}else if($year == 4){
			$village = $village + 3;
		}else if($year == 5){
			$village = $village + 5;
		}else{
			$village = $village + $year;
		}
		
	}
	
	return $village;
	
}

function getAverageKilledOnYear($years){

	$sum = 0;
	for($i = 0; $i < count($years);$i++){
		$sum += getPeopleKilledOnYear($years[$i]);
	}
	
	return $sum / count($years);
	
}

function getData($ageOfDeathA,$yearOfDeathA,$ageOfDeathB,$yearOfDeathB) {
	if($ageOfDeathA < 0 or $yearOfDeathA < 0 ){
		return -1;
	}
	if($ageOfDeathB < 0 or $yearOfDeathB < 0 ){
		return -1;
	}
	$bornOfYear_A = getBornOfYear($ageOfDeath,$yearOfDeath);
	$peopleKilledOnYear_A = getPeopleKilledOnYear($bornOfYear_A);
	
	$bornOfYear_B = getBornOfYear($ageOfDeath,$yearOfDeath);
	$peopleKilledOnYear_B = getPeopleKilledOnYear($bornOfYear_B);
	
	return 
	"Person A Born on Year = ".$yearOfDeathA." - ".$ageOfDeathA." = ".$bornOfYear_A.", 
	number of people killed on year ".$bornOfYear_A." is ".$peopleKilledOnYear_A.". \n
	
	Person B Born on Year = ".$yearOfDeathB." - ".$ageOfDeathB." = ".$bornOfYear_B.", 
	number of people killed on year ".$bornOfYear_B." is ".$peopleKilledOnYear_B."."
	; 
}


$ageOfDeathA = 10;
$yearOfDeathA = 13;
$ageOfDeathB = 15;
$yearOfDeathB = 16;

echo getData($ageOfDeathA,$yearOfDeathA,$ageOfDeathB,$yearOfDeathB);

?>


