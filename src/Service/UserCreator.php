<?php

namespace App\Service;

use App\Entity\Persona\Persona;
use Doctrine\Common\Persistence\ObjectManager;
use LightSaml\Model\Protocol\Response;
use LightSaml\SpBundle\Security\User\UserCreatorInterface;
use LightSaml\SpBundle\Security\User\UsernameMapperInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UserCreator implements UserCreatorInterface
{
    /** @var ObjectManager */
    private $objectManager;

    /** @var UsernameMapperInterface */
    private $usernameMapper;

    public function __construct(ObjectManager $objectManager, UsernameMapperInterface $usernameMapper)
    {
        $this->objectManager = $objectManager;
        $this->usernameMapper = $usernameMapper;
    }

    public function createUser(Response $response) : ?UserInterface
    {
        $username = $this->usernameMapper->getUsername($response);
        $user = new Persona();
        $user
            ->setUsername($username)
            ->setRoles(['ROLE_USER'])
        ;

        $this->objectManager->persist($user);
        $this->objectManager->flush();

        return $user;
    }
}