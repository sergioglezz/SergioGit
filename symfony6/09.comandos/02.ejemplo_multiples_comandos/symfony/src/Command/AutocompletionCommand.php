<?php
namespace App\Command; 

use Symfony\Component\Console\Command\Command; 
use Symfony\Component\Console\Input\InputArgument; 
use Symfony\Component\Console\Input\InputDefinition; 
use Symfony\Component\Console\Input\InputInterface; 
use Symfony\Component\Console\Input\InputOption; 
use Symfony\Component\Console\Output\OutputInterface; 

use Symfony\Component\Console\Question\Question;

class AutocompletionCommand extends Command { 
  protected function configure() 
  { 
    $this
      /*
       * php bin/console demo:autocomplete
       */
      // The name of the command (the part after "bin/console")
      ->setName('demo:autocomplete') 
      // The text displayed when "bin/console list" is executed
      ->setDescription('Demo of autocomplete')
      // the full command description shown when running the command with
      // the "--help" option
      ->setHelp('This command asks the user a simple question.');  
  } 
  protected function execute(InputInterface $input, OutputInterface $output) 
  { 
    $helper = $this->getHelper('question');
    // Autocompletion
    $bundles = array('AcmeDemoBundle', 'AcmeBlogBundle', 'AcmeStoreBundle');
    $question = new Question('Please enter the name of a bundle: ', 'FooBundle');
    $question->setAutocompleterValues($bundles);

    $bundleName = $helper->ask($input, $output, $question);
    $output->writeln('You have just selected: ' . $bundleName);
    return Command::SUCCESS;
  }  
} 