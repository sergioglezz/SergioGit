<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Helper\TableCell;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Grade;

class NotesReportsCommand extends Command
{
    /*
     * matches: 
     *  php bin/console reports:notes "Ingeniería de montes" 2016-09-01 2017-08-31
     *  php bin/console reports:notes "Ingeniería de montes" 2016-01-01 2017-12-31
     */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct();
        $this->entityManager = $entityManager;
    }

    protected function configure()
    {
        $this
            ->setName('reports:notes')
            ->setDescription('List of the average grades of the subjects of a grade between two given dates ')
            ->addArgument('gradeName', InputArgument::REQUIRED, 'Grade Name')
            ->addArgument('startedOn', InputArgument::REQUIRED, 'Started On (yyyy-mm-dd)')
            ->addArgument('finishOn', InputArgument::REQUIRED, 'Finish On (yyyy-mm-dd)');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $gradeName = $input->getArgument('gradeName');
        $output->writeln('gradeName: ' . $input->getArgument('gradeName'));
        $startedOn = $input->getArgument('startedOn');
        $output->writeln('startedOn: ' . $input->getArgument('startedOn'));
        $finishOn = $input->getArgument('finishOn');
        $output->writeln('finishOn: ' . $input->getArgument('finishOn'));
        $subjects = $this->entityManager
            ->getRepository(Grade::class)
            ->getAverageNoteGrade($gradeName, $startedOn, $finishOn);

        $rows = [];
        foreach ($subjects as $subject) {
            $rows[] = [$subject['name'], $subject['average_note']];
        }

        $table = new Table($output);

        if (!empty($rows)) {
            $table->setHeaders([
                [new TableCell('Grade: ' . $gradeName . ' ---- Date: ' . $startedOn . ' / ' . $finishOn, ['colspan' => 2])],
                ['Subject', 'Note Average'],
            ]);

            $table->setRows($rows);
        } else {
            $table->setHeaders(array('No records found'));
        }

        $table->render();

        return Command::SUCCESS;
    }
}
