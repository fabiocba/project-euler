<?
/**
 * You are given the following information, but you may prefer to do some 
 * research for yourself.
 *
 * 1 Jan 1900 was a Monday.
 * Thirty days has September,
 * April, June and November.
 * All the rest have thirty-one,
 * Saving February alone,
 * Which has twenty-eight, rain or shine.
 * And on leap years, twenty-nine.
 * A leap year occurs on any year evenly divisible by 4, but not on a century 
 * unless it is divisible by 400.
 * How many Sundays fell on the first of the month during the twentieth 
 * century (1 Jan 1901 to 31 Dec 2000)?
 */

class Problem19 {

	private $months = array('jan'=>31, 'fev'=>28, 'mar'=>31, 'apr'=>30, 'may'=>31, 'jun'=>30, 'jul'=>31, 'aug'=>31, 'set'=>30, 'oct'=>31, 'nov'=>30, 'dez'=>31);
	private $counter = 0;
	private $totalDays = 36525;
	private	$sundays = 0;

	function init() {
		$this->countYear();
		return $this->sundays;
	}

	function countYear() {
		foreach(range(1901, 2000, 1) as $year)
			$this->countMonth($year%4==0);
	}

	function countMonth($leap=false) {
		foreach($this->months as $month=>$days) {
			if ($month=='fev' && $leap)
				$this->countSundays($days+1);
			else
				$this->countSundays($days);
		}
	}

	function countSundays($days) {
		if ($this->counter%7==0)
			$this->sundays++;
		$this->counter+=$days;
	}
}

$p = new Problem19();
echo $p->init();
?>
