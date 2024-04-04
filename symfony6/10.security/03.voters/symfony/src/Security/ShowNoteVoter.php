<?php
// App/Security/ShowNoteVoter.php
namespace App\Security;

use App\Entity\Note;
use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class ShowNoteVoter extends Voter
{
    protected function supports($attribute, $entity): bool
    {
        dump('Inside ShowNoteVoter:supports',$entity);
        
        if (!in_array($attribute, array('showNote'))) {
            return false;
        }

        // sólo votar en objetos de tipo Nota dentro de este voter
        if ($entity instanceof Note) {
            return true;
        }

        return false;
    }

    protected function voteOnAttribute($attribute, $entity, TokenInterface $token): bool
    {
        dump('Inside ShowNoteVoter:voteOnAttribute');
        $user = $token->getUser();
        //Gracias al método supports ya sabemos que $entidad es un Evento
//        if($user->getId() == $entidad->getCreatedBy()->getId()){
//          return true;
//        }
        return false;
    }

}