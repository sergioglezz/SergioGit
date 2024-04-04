<?php
namespace App\Command; 

use Symfony\Component\Console\Command\Command; 
use Symfony\Component\Console\Input\InputArgument; 
use Symfony\Component\Console\Input\InputDefinition; 
use Symfony\Component\Console\Input\InputInterface; 
use Symfony\Component\Console\Input\InputOption; 
use Symfony\Component\Console\Output\OutputInterface; 

use Symfony\Component\Console\Question\Question;

class HiddenResponseCommand extends Command { 
  protected function configure() 
  { 
    $this
      /*
       * php bin/console demo:hidden-response
       */
      // The name of the command (the part after "bin/console")
      ->setName('demo:hidden-response') 
      // The text displayed when "bin/console list" is executed
      ->setDescription('Demo of hidden response')
      // the full command description shown when running the command with
      // the "--help" option
      ->setHelp('This command asks the user a simple question.');  
  } 
  protected function execute(InputInterface $input, OutputInterface $output) 
  { 
    $helper = $this->getHelper('question');
    // Hidden Response
    $helper = $this->getHelper('question');

    $question = new Question('What is the database password?');
    $question->setHidden(true);
    $question->setHiddenFallback(false);

    $password = $helper->ask($input, $output, $question);
    $output->writeln('You have just selected: ' . $password);

    return Command::SUCCESS;
  }  
} 