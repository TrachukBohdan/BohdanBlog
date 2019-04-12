<?php

namespace Infrastructure\Command\User;

use Domain\User\User\User;
use Domain\User\User\UserCollectionInterface;
use Domain\User\User\UserEmail;
use Domain\User\User\UserId;
use Domain\User\User\UserPassword;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class CreateUserCommand extends Command
{
    protected static $defaultName = 'blog:user:create';
    protected $userCollection;

    public function __construct(?string $name = null, UserCollectionInterface $userCollection)
    {
        $this->userCollection = $userCollection;
        parent::__construct($name);
    }

    protected function configure()
    {
        $this
            ->setDescription('Create an admin')
            ->addArgument('email', InputArgument::REQUIRED, 'admin email')
            ->addArgument('password', InputArgument::REQUIRED, 'admin password')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $user = User::createUserWithData(
            UserId::generate(),
            UserEmail::createFromString('dev.bohdan@gmail.com'),
            UserPassword::createFromString('123')
        );

        $this->userCollection->add($user);
    }
}
