<?php
namespace ScnSocialAuthDoctrineORM\Entity;

use Doctrine\ORM\Mapping as ORM;
use ScnSocialAuth\Entity\UserProviderInterface;

/** @ORM\Entity @ORM\Table(name="user_provider") */
class UserProvider implements UserProviderInterface
{
    /**
     * @ORM\OneToOne(targetEntity="Application\Entity\User", inversedBy="userProvider")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     */
    protected $user;

    /** @ORM\Id @ORM\Column(type="integer", name="provider_id") */
    protected $providerId;

    /** @ORM\Column(type="string") */
    protected $provider;

    /**
     * @return User
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * @param User $user
     * @return UserProvider
     */
    public function setUser($user) {
        $this->user = $user;

        return $this;
    }
    
    public function getUserId() { }
    public function setUserId($userId) { }

    /**
     * @return the $providerId
     */
    public function getProviderId()
    {
        return $this->providerId;
    }

    /**
     * @param  integer      $providerId
     * @return UserProvider
     */
    public function setProviderId($providerId)
    {
        $this->providerId = $providerId;

        return $this;
    }

    /**
     * @return the $provider
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param  string       $provider
     * @return UserProvider
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;

        return $this;
    }
}
