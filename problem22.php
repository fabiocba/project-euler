<?

$letters = array('A'=>1, 'B'=>2, 'C'=>3, 'D'=>4, 'E'=>5, 'F'=>6, 'G'=>7, 'H'=>8, 'I'=>9, 'J'=>10, 'K'=>11, 'L'=>12, 'M'=>13, 'N'=>14, 'O'=>15, 'P'=>16, 'Q'=>17, 'R'=>18, 'S'=>19, 'T'=>20, 'U'=>21, 'V'=>22, 'W'=>23, 'X'=>24, 'Y'=>25, 'Z'=>26);

$content = fread(fopen('./names.txt', 'r'), filesize('names.txt')-1);
//var_dump($content);

$names = split(",", $content);
sort($names);

$total = 0;
foreach($names as $k=>$name) {
	$sumName = 0;
	foreach(str_split($name) as $c) {
		$sumName += $letters[$c];
	}
	$total += ($sumName*($k+1));
}

echo $total;
?>
