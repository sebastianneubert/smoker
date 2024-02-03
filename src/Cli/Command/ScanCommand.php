<?php

namespace App\Cli\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'scan',
    description: 'Scanning a website by URL',
)]
class ScanCommand extends Command
{
    public function __construct()
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->setDefinition([
                new InputArgument('url', InputArgument::REQUIRED, 'the url to start with'),
                new InputOption('num_urls', 'u', InputOption::VALUE_OPTIONAL, 'number of urls to be checked', 20),
                new InputOption('run_level', 'l', InputOption::VALUE_OPTIONAL, 'limit the rules that are called', 10),
            ])
            ->setAliases(['analyse']);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $url = $input->getArgument('url');

        if ($url) {
            $io->note(sprintf('You passed an argument: %s', $url));
        }

        if ($input->getOption('num_urls')) {
            // ...
        }

        $io->success('You have a new command! Now make it your own! Pass --help to see your options.');

        return Command::SUCCESS;
    }
}
