<?php
namespace App\Command; 

use Symfony\Component\Console\Command\Command; 
use Symfony\Component\Console\Input\InputArgument; 
use Symfony\Component\Console\Input\InputDefinition; 
use Symfony\Component\Console\Input\InputInterface; 
use Symfony\Component\Console\Input\InputOption; 
use Symfony\Component\Console\Output\OutputInterface; 

class InputOptionCommand extends Command { 
  protected function configure() 
  { 
    $this
      /*
       * php bin/console demo:inputs-option --bar 5 
       * php bin/console demo:inputs-option --bar 5 -c seven 
       * php bin/console demo:inputs-option --bar 5 -c seven -c eight
       */
      // The name of the command (the part after "bin/console")
      ->setName('demo:inputs-option') 
      // The text displayed when "bin/console list" is executed
      ->setDescription('Demo of inputs options like variable inline')
      // the full command description shown when running the command with
      // the "--help" option
      ->setHelp('This command capture variable inline like options.')
      // configure an argument
      ->setDefinition( 
        array(
          new InputOption('foo','f'),
          new InputOption('bar','b', InputOption::VALUE_REQUIRED, 'How many times should the message be printed', 1),
          new InputOption('cat','c', InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY),
          new InputOption('sev','s', InputOption::VALUE_OPTIONAL),
        )
      );  
  } 
  protected function execute(InputInterface $input, OutputInterface $output) 
  { 
    // retrieve the option value using getOption()
    $output->writeln('Foo: '.$input->getOption('foo')); 
    $output->writeln('Bar: '.$input->getOption('bar')); 
    $cat = $input->getOption('cat');
    foreach($cat as $key => $value){
      $output->writeln('Cat: '.$value);
    }

    return Command::SUCCESS;
  }  
} 