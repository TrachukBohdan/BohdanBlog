<?php

namespace Infrastructure\Repository;

use Doctrine\ORM\EntityRepository;
use Domain\User\User\User;
use Domain\User\User\UserCollectionInterface;
use Domain\User\User\UserEmail;

class DoctrineUserRepository extends EntityRepository implements UserCollectionInterface
{
    /**
     * @param User $user
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function add(User $user)
    {
        $this->getEntityManager()->persist($user);
        $this->getEntityManager()->flush();
    }

    /**
     * @return array
     */
    public function all(): array
    {
        return $this->findAll();
    }

    /**
     * @param UserEmail $userEmail
     * @return mixed
     */
    public function findUserByEmail(UserEmail $userEmail): ?User
    {
        return $this->findOneBy(['email' => $userEmail->toString()]);
    }
}