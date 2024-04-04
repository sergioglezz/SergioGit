<?php
namespace App\Command;


use Symfony\Component\Console\Input\InputArgument; 
use Symfony\Component\Console\Input\InputDefinition; 
use Symfony\Component\Console\Input\InputOption; 

use Symfony\Component\Console\Command\Command; 
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use App\Service\UserManager;

class GettingServicesCommand extends Command
{ 
  private $userManager;

  public function __construct(UserManager $userManager)
  {
      $this->userManager = $userManager;

      parent::__construct();
  }

  protected function configure() 
  { 
    $this
      /*
       * php bin/console demo:getting-service Wouter
       */
      // the name of the command (the part after "bin/console")
      ->setName('demo:getting-service') 
      // the short description shown while running "php bin/console list"
      ->setDescription('Demo that prints text on screen..')
      // the full command description shown when running the command with
      // the "--help" option
      ->setHelp('This demo does not need entries.')
      // configure an argument
      ->addArgument('username', InputArgument::REQUIRED, 'The username of the user.');  
  } 
  protected function execute(InputInterface $input, OutputInterface $output) 
  { 
    // outputs multiple lines to the console (adding "\n" at the end of each line)
    $this->userManager->create($input->getArgument('username'));

    $output->writeln('User successfully generated!');
    return Command::SUCCESS;
  }  
} 