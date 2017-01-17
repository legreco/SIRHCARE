<?php
/**
 * Created by PhpStorm.
 * User: MarcGrecoPeralte
 * Date: 1/13/2017
 * Time: 12:43 AM
 */

namespace App\Helpers;
use Carbon\Carbon;
use App\Calendar;
class CalendarHelper
{
    public static function addBusinessDays($date, $days)
    {
        $count=0;

        $currentDate=new Calendar();
        $cursorDate=Carbon::parse($date);
        while ($count<=$days)
        {
            $currentDate=Calendar::where('date','=',$cursorDate->toDateString())->first();
            if($currentDate->isBusinessDay)
            $count++;
            $cursorDate->addDay();
        }
        
        return $currentDate->date;
    }
}