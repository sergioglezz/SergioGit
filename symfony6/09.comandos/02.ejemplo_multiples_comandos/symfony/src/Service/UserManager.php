<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;

class UserManager
{
    private $em;
    public function __construct(EntityManagerInterface $em) {
        $this->em = $em;
    }
    public function create ($username)
    {
      return $username;
    }       
}