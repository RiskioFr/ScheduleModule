<?php
namespace Riskio\EventScheduler\ValueObject;

use DateTime;
use InvalidArgumentException;
use Riskio\EventScheduler\ValueObject\Exception\InvalidMonthDayException;
use ValueObjects\DateTime\MonthDay as BaseMonthDay;

class MonthDay extends BaseMonthDay
{
    /**
     * {@inheritdoc}
     */
    public function __construct($year)
    {
        try {
            parent::__construct($year);
        } catch (InvalidArgumentException $e) {
            throw new InvalidMonthDayException('Month day must be an integer between 1 and 31');
        }
    }

    /**
     * @param  DateTime $date
     * @return self
     */
    public static function fromNativeDateTime(DateTime $date)
    {
        return static::fromNative($date->format('j'));
    }
}
