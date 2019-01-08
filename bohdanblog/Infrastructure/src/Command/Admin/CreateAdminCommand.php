<?php

namespace Infrastructure\Command\Admin;

use Application\Admin\DTO\CreateAdminDTO;
use Application\Admin\Service\CreateAdminService;
use Infrastructure\Presenter\Admin\ToArrayCreateAdminPresenter;
use Infrastructure\Repository\InMemoryAdminRepository;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class CreateAdminCommand extends Command
{
    protected static $defaultName = 'blog:admin:create-admin';

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
        $createAdminService = new CreateAdminService(
            new ToArrayCreateAdminPresenter(),
            new InMemoryAdminRepository()
        );

        $createAdminDto = new CreateAdminDTO(
            $input->getArgument('email'),
            $input->getArgument('password')
        );

        $io = new SymfonyStyle($input, $output);
        $io->success($createAdminService->execute($createAdminDto));
    }
}
