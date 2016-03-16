<?php

namespace mCzolko\HerokuSchedulerBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class SchedulerBaseCommand extends ContainerAwareCommand
{

    /**
     * @return string
     */
    abstract protected function getSchedulerName();

    /**
     * @return string
     */
    abstract protected function getSchedulerEvent();

    /**
     * Configures the current command.
     */
    protected function configure()
    {
        $this->setName('heroku:scheduler:'. $this->getSchedulerName());
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $now = new \DateTime();
        $output->writeln($now->format("d.m.Y H:i:s") . ' [INFO] Heroku scheduler '. $this->getSchedulerName() .' started');

        $eventDispatcher = $this->getContainer()->get('event_dispatcher');
        $eventDispatcher->dispatch($this->getSchedulerEvent());

        $now = new \DateTime();
        $output->writeln($now->format("d.m.Y H:i:s") . ' [INFO] Heroku scheduler '. $this->getSchedulerName() .' finished');

        return 0;
    }
}
