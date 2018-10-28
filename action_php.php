 <?php
$vote = array(0,0,0);

if($value = candidate1) {
	$vote[0] += 1;
} else if ($value = candidate2){
	$vote[1] += 1;
} else if ($value = candidate3) {
	$vote[2] += 1;
} else {
echo "Failed";
}

?>

