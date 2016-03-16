<?php

namespace mCzolko\HerokuSchedulerBundle\Command;

use mCzolko\HerokuSchedulerBundle\Events;

class SchedulerDailyCommand extends SchedulerBaseCommand
{

    /**
     * @return string
     */
    protected function getSchedulerName()
    {
        return 'daily';
    }

    /**
     * @return string
     */
    protected function getSchedulerEvent()
    {
        return Events::DAILY;
    }
}
