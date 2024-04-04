<?php
namespace App\Command; 

use Symfony\Component\Console\Command\Command; 
use Symfony\Component\Console\Input\InputArgument; 
use Symfony\Component\Console\Input\InputDefinition; 
use Symfony\Component\Console\Input\InputInterface; 
use Symfony\Component\Console\Input\InputOption; 
use Symfony\Component\Console\Output\OutputInterface; 

use Symfony\Component\Console\Question\ChoiceQuestion;

class SimpleChooseCommand extends Command { 
  protected function configure() 
  { 
    $this
      /*
       * php bin/console demo:simple-choose
       */
      // The name of the command (the part after "bin/console")
      ->setName('demo:simple-choose') 
      // The text displayed when "bin/console list" is executed
      ->setDescription('Demo of simple question command')
      // the full command description shown when running the command with
      // the "--help" option
      ->setHelp('This command asks the user a simple question.');  
  } 
  protected function execute(InputInterface $input, OutputInterface $output) 
  { 
    $helper = $this->getHelper('question');
    // Let the User Choose from a List of Answers
    $question4 = new ChoiceQuestion(
      'Please select your favorite color (defaults to red)',
      array('red', 'blue', 'yellow'),
      0
    );
    $question4->setErrorMessage('Color %s is invalid.');
    $color = $helper->ask($input, $output, $question4);
    $output->writeln('You have just selected: '.$color);

    return Command::SUCCESS;
  }  
} 