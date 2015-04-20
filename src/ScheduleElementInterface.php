<?php
namespace Riskio\Schedule;

use DateTime;

interface ScheduleElementInterface
{
    /**
     * @param  string $event
     * @param  DateTime $date
     * @return bool
     */
    public function isOccuring($event, DateTime $date);
}
