<?php
// App/Security/Voter/IpVoter.php
namespace App\Security\Voter;

use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class IpVoter extends Voter
{
    /**
     * @var array
     */
    private $bannedIpsPath;

    public function __construct(array $bannedIpsPath)
    {
        $this->bannedIpsPath = $bannedIpsPath;
    }

    protected function supports($attribute, $subject): bool
    {
        return true;
    }

    protected function voteOnAttribute($attribute, $subject, TokenInterface $token): bool
    {
        dump($this->bannedIpsPath);die();
        $bannedIps = file($this->bannedIpsPath, FILE_IGNORE_NEW_LINES);

        if (in_array($attribute, $bannedIps)) {
            return false;
        }

        return true;
    }
}