<?php

namespace App\Models\Calendar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Yasumi\Yasumi;

class HolidaySetting extends Model
{
    use HasFactory;

    private $holidays = null;

	function loadHoliday($year){
		$this->holidays = Yasumi::create("Japan", $year,"ja_JP");		
	}

	function isHoliday($date){
		if(!$this->holidays)return false;
		return $this->holidays->isHoliday($date);
	}

}

