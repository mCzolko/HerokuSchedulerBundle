<?php

namespace mCzolko\HerokuSchedulerBundle\Command;

use mCzolko\HerokuSchedulerBundle\Events;

class SchedulerTenMinutesCommand extends SchedulerBaseCommand
{

    /**
     * @return string
     */
    protected function getSchedulerName()
    {
        return '10minutes';
    }

    /**
     * @return string
     */
    protected function getSchedulerEvent()
    {
        return Events::TEN_MINUTES;
    }
}
