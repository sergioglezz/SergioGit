<?php
namespace App\Command; 

use Symfony\Component\Console\Command\Command; 
use Symfony\Component\Console\Input\InputArgument; 
use Symfony\Component\Console\Input\InputDefinition; 
use Symfony\Component\Console\Input\InputInterface; 
use Symfony\Component\Console\Input\InputOption; 
use Symfony\Component\Console\Output\OutputInterface; 

use Symfony\Component\Console\Question\ConfirmationQuestion;

class ConfirmationQuestionCommand extends Command { 
  protected function configure() 
  { 
    $this
      /*
       * php bin/console demo:confirmation-question
       */
      // The name of the command (the part after "bin/console")
      ->setName('demo:confirmation-question') 
      // The text displayed when "bin/console list" is executed
      ->setDescription('Demo of simple question command')
      // the full command description shown when running the command with
      // the "--help" option
      ->setHelp('This command asks the user a simple question.');  
  } 
  protected function execute(InputInterface $input, OutputInterface $output) 
  { 
    $helper = $this->getHelper('question');
    // Asking the User for Confirmation
    $question1 = new ConfirmationQuestion('Are you sure that you want to do the operation?', false, '/^(y|s)/i');   
    $question2 = new ConfirmationQuestion('Continue with this action?', false);
    if (!$helper->ask($input, $output, $question1)) { 
      $output->writeln('you clicked no'); 
    }else{
      $output->writeln('you clicked yes');
    }
    return Command::SUCCESS;
  }  
} 