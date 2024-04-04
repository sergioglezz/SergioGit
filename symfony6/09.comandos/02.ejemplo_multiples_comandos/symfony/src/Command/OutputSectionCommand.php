<?php
namespace App\Command; 

use Symfony\Component\Console\Command\Command; 
use Symfony\Component\Console\Input\InputArgument; 
use Symfony\Component\Console\Input\InputDefinition; 
use Symfony\Component\Console\Input\InputInterface; 
use Symfony\Component\Console\Input\InputOption; 
use Symfony\Component\Console\Output\OutputInterface; 
use Symfony\Component\Console\Question\ConfirmationQuestion;

class OutputSectionCommand extends Command { 
  protected function configure() 
  { 
    $this
      /*
       * php bin/console demo:question
       */
      // The name of the command (the part after "bin/console")
      ->setName('demo:output-section') 
      // The text displayed when "bin/console list" is executed
      ->setDescription('Demo of question command')
      // the full command description shown when running the command with
      // the "--help" option
      ->setHelp('This command asks the user a question.');  
  } 
  protected function execute(InputInterface $input, OutputInterface $output) 
  {
    $section1 = $output->section();
    $section2 = $output->section();
    $section1->writeln('Hello');
    $section2->writeln('World!');
    // Output displays "Hello\nWorld!\n"

    // overwrite() replaces all the existing section contents with the given content
    $section1->overwrite('Goodbye');
    // Output now displays "Goodbye\nWorld!\n"

    // clear() deletes all the section contents...
    $section2->clear();
    // Output now displays "Goodbye\n"

    // ...but you can also delete a given number of lines
    // (this example deletes the last two lines of the section)
    $section1->clear(2);
    // Output is now completely empty!

    return Command::SUCCESS;
  }
} 