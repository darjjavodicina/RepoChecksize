function checkOneSize($text){
    if(substr_count($text, 'единий') || 
        substr_count($text, 'единый')
    ){
        return true;
    }
}

//поиск всех чисел, за исключением цены
function searchSize($text){
	global $price;
	$searchNum = [];
	$re = '/(\d*)/m';
	preg_match_all($re, $text, $matches, PREG_SET_ORDER, 0);

	foreach ($matches as $value) {
		if($value[0] && $value[0] != $price){
			$searchNum[] = $value[0];
		}
	}

	return $searchNum;
}
