<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;

use App\Services\InitializationDatabase;

class UploadDataBaseAddressCommand extends Command
{
    /*
     * matches: php bin/console app:intialization-database-address
     */
    private $uploadDataBase;
    public function __construct(InitializationDatabase $uploadDataBase)
    {
        $this->uploadDataBase = $uploadDataBase;
        parent::__construct();
    }
    protected function configure()
    {
        $this->setName('app:intialization-database-address')
            ->setDescription('We initialize the database with the minimum generic listings.');
    }
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln([
            'Initialization Data base Address',
            '================================',
        ]);
        $output->writeln($this->uploadDataBase->uploadDataAddressInitial());
        return Command::SUCCESS;
    }
}