Installation
============

Step 1: Download the Bundle
---------------------------

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```bash
$ composer require mczolko/heroku-scheduler-bundle
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Step 2: Enable the Bundle
-------------------------

Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...

            new mCzolko\HerokuSchedulerBundle\mCzolkoHerokuSchedulerBundle(),
        );

        // ...
    }

    // ...
}
```


Setup the Scheduler on Heroku
============

Install the addon: https://elements.heroku.com/addons/scheduler

Open it and fill these values:

![Heroku Scheduler](https://github.com/mCzolko/HerokuSchedulerBundle/blob/master/Resources/doc/scheduler-jobs.png)

That's it. See Events.php file for available events which you can handle inside your app.


Usage
============

Create a event subscriber (or listener) for scheduler events.


```php
class HerokuSchedulerSubscriber implements EventSubscriberInterface
{

    public static function getSubscribedEvents()
    {
        return [
            Events::TEN_MINUTES => 'tenMinutes',
            Events::HOURLY      => 'hourly',
            Events::DAILY       => 'daily'
        ];
    }

    public function tenMinutes()
    {
        // Check notifications on your Apple watch 
    }

    public function hourly()
    {
        // Send message at least one hot chick on Badoo
    }

    public function daily()
    {
        // https://www.youtube.com/watch?v=lxptFSJJ14Y
    }
}
```
