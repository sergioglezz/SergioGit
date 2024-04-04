<?php
namespace App\Command; 

use Symfony\Component\Console\Command\Command; 
use Symfony\Component\Console\Input\InputArgument; 
use Symfony\Component\Console\Input\InputDefinition; 
use Symfony\Component\Console\Input\InputInterface; 
use Symfony\Component\Console\Input\InputOption; 
use Symfony\Component\Console\Output\OutputInterface; 

use Symfony\Component\Console\Question\ConfirmationQuestion;

use Symfony\Component\Console\Question\Question;

class NormalizeAnswerCommand extends Command { 
  protected function configure() 
  { 
    $this
      /*
       * php bin/console demo:normalize-answer
       */
      // The name of the command (the part after "bin/console")
      ->setName('demo:normalize-answer') 
      // The text displayed when "bin/console list" is executed
      ->setDescription('Demo of simple question command')
      // the full command description shown when running the command with
      // the "--help" option
      ->setHelp('This command asks the user a simple question.');  
  } 
  protected function execute(InputInterface $input, OutputInterface $output) 
  { 
    $helper = $this->getHelper('question');
    // Normalizing the Answer
    $question = new Question('Please enter the name of the bundle', 'AcmeDemoBundle');
    $question->setNormalizer(function ($value) {
        // $value can be null here
        return $value ? trim($value) : '';
    });
    $bundleName = $helper->ask($input, $output, $question);
    $output->writeln('Your bundle is: "'.$bundleName.'"');

    return Command::SUCCESS;
  }  
} 