<?php

namespace mCzolko\HerokuSchedulerBundle;

final class Events
{

    /**
     * Event triggered once a day.
     */
    const DAILY = 'heroku_daily';

    /**
     * Event triggered hourly.
     */
    const HOURLY = 'heroku_hourly';

    /**
     * Event triggered every 10 minutes.
     */
    const TEN_MINUTES = 'heroku_ten_minutes';
}
