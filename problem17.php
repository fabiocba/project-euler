<?php

class Problem17 {	

    private $oneToNineteen = array ('one', 
        'two', 
        'three', 
        'four',
        'five',
        'six',
        'seven',
        'eight',
        'nine',
        'ten',
        'eleven',
        'twelve',
        'thirteen',
        'fourteen',
        'fifteen',
        'sixteen',
        'seventeen',
        'eighteen',
        'nineteen' );
    private $decimals = array (20 => 'twenty', 
        30 => 'thirty',
        40 => 'forty',
        50 => 'fifty',
        60 => 'sixty',
        70 => 'seventy',
        80 => 'eighty',
        90 => 'ninety' );
	private $hundred = 'hundred';
	private $thousand = 'onethousand';
	public function run() {

		$total = 0;

		// one to nineteen
		for($i=1; $i<=19; $i++) {
			$word = $this->oneToNineteen[$i-1];
			$total += strlen($word);
		}

		// twenty to nine hundred and ninety nine
		for ($i=20; $i<=999; $i++ ) {
			switch (strlen($i)) {
				case 2:
					if (preg_match('/^[2-9]0$/i', $i)) {
						$word = $this->decimals[$i];
						$total += strlen($word);
					} else {
						list($d, $u) = str_split($i);
						$word = $this->decimals[(int)$d.'0'] . $this->oneToNineteen[$u-1];
						$total += strlen($word);
					}
					break;
				case 3:
					list ($c, $d, $u) = str_split($i);
					$word = $this->oneToNineteen[$c-1].$this->hundred;

					// [1-9]01 - [1-9]19
					if (preg_match('/^[1-9](0[1-9]|1[0-9])/i', $i)) {
						$word .= 'and';
						$word .= ($d.$u < 10) ? $this->oneToNineteen[(int)$u-1] : $this->oneToNineteen[(int)$d.$u-1];
					}

					// [1-9][2-9]0
					if (preg_match('/^[1-9][2-9]0/i', $i))
						$word .= 'and'.$this->decimals[(int)$d.'0'];

					// [1-9][2-9][1-9]
					if (preg_match('/^[1-9][2-9][1-9]/i', $i))
						$word .= 'and'.$this->decimals[(int)$d.'0'].$this->oneToNineteen[$u-1];

					$total += strlen($word);
					break;
			}
		}

		$total += strlen($this->thousand);
		echo "$total\n"; 
	}

}

$problem = new Problem17;
$problem->run();

?>
