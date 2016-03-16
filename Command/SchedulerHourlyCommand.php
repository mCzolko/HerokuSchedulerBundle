<?php

namespace mCzolko\HerokuSchedulerBundle\Command;

use mCzolko\HerokuSchedulerBundle\Events;

class SchedulerHourlyCommand extends SchedulerBaseCommand
{

    /**
     * @return string
     */
    protected function getSchedulerName()
    {
        return 'hourly';
    }

    /**
     * @return string
     */
    protected function getSchedulerEvent()
    {
        return Events::HOURLY;
    }
}
