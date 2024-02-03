<?php

namespace sebb\smoker\Cli;

use Symfony\Component\Console\Formatter\OutputFormatter;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Output\OutputInterface;

class Application extends \Symfony\Component\Console\Application
{
    public function __construct(string $name, string $version)
    {
        parent::__construct($name, $version);
    }

    /**
     * {@inheritdoc}
     */
    public function run(InputInterface $input = null, OutputInterface $output = null): int
    {
        if (null === $output) {
            $styles = array();
            $styles['failure'] = new OutputFormatterStyle('red');
            $formatter = new OutputFormatter(false, $styles);
            $output = new ConsoleOutput(OutputInterface::VERBOSITY_NORMAL, null, $formatter);
        }

        return parent::run($input, $output);
    }

    /**
     * {@inheritdoc}
     * @throws \Throwable
     */
    public function doRun(InputInterface $input, OutputInterface $output): int
    {
        $this->registerCommands();

        return parent::doRun($input, $output);
    }

    /**
     * Initializes all the commands.
     */
    private function registerCommands()
    {
    }
}
