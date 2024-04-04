<?php
namespace App\Command;


use Symfony\Component\Console\Input\InputArgument; 
use Symfony\Component\Console\Input\InputDefinition; 
use Symfony\Component\Console\Input\InputOption; 

use Symfony\Component\Console\Command\Command; 
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Symfony\Component\Console\Helper\ProgressBar;

class ProgressBarCommand extends Command
{ 
  protected function configure() 
  { 
    $this
      /*
       * php bin/console demo:progress
       */
      // the name of the command (the part after "bin/console")
      ->setName('demo:progress') 
      // the short description shown while running "php bin/console list"
      ->setDescription('Progress Demo on screen..')
      // the full command description shown when running the command with
      // the "--help" option
      ->setHelp('This demo shows the progress on screen, no input needed..');   
  } 
  protected function execute(InputInterface $input, OutputInterface $output) 
  { 
    $progressBar = new ProgressBar($output, 50);
    // starts and displays the progress bar
    $progressBar->start();
    $i = 0;
    while ($i++ < 50) {
        // ... do some work

        // advances the progress bar 1 unit
        $progressBar->advance();

        // you can also advance the progress bar by more than 1 unit
        // $progressBar->advance(3);
    }
    // ensures that the progress bar is at 100%
    $progressBar->finish();

    return Command::SUCCESS;
  }  
} 