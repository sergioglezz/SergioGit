<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Security;

use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

/**
 * Este voter tonto hace falta así como está
 */
class GenericVoter extends Voter
{
    protected function supports($attribute, $entity): bool
    {
        dump('Inside GenericVoter:supports');
        return false;
    }

    protected function voteOnAttribute($attribute, $entity, TokenInterface $token): bool
    {
        dump('Inside GenericVoter:voteOnAttribute');
        return false;
    }
}