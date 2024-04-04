<?php
namespace App\Command; 

use Symfony\Component\Console\Command\Command; 
use Symfony\Component\Console\Input\InputArgument; 
use Symfony\Component\Console\Input\InputDefinition; 
use Symfony\Component\Console\Input\InputInterface; 
use Symfony\Component\Console\Input\InputOption; 
use Symfony\Component\Console\Output\OutputInterface; 
use Symfony\Component\Console\Question\ConfirmationQuestion;

class InputsInlineCommand extends Command { 
  protected function configure() 
  { 
    $this
      /*
       * php bin/console demo:inputs-inline Wouter
       */
      // The name of the command (the part after "bin/console")
      ->setName('demo:inputs-inline') 
      // The text displayed when "bin/console list" is executed
      ->setDescription('Demo of inputs variable inline')
      // the full command description shown when running the command with
      // the "--help" option
      ->setHelp('This command asks the user a question.')
      // configure an argument
      ->addArgument('username', InputArgument::REQUIRED, 'The username of the user.');  
  } 
  protected function execute(InputInterface $input, OutputInterface $output) 
  { 
    $output->writeln([
      'User Creator',
      '============',
      '',
    ]);
    // retrieve the argument value using getArgument()
    $output->writeln('Username: '.$input->getArgument('username')); 

    return Command::SUCCESS;
  }  
} 