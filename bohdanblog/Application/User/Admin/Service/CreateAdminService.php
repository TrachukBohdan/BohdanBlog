<?php

namespace Application\Admin\Service;

use Application\Admin\DTO\CreateAdminDTO;
use Application\ObjectPresenterInterface;
use Domain\Admin\User;
use Domain\Admin\AdminAlreadyExistsException;
use Domain\Admin\AdminCollectionInterface;
use Domain\Admin\AdminEmail;
use Domain\Admin\UserId;
use Domain\Admin\UserPassword;

/**
 * Class CreateAdminService
 * @package Application\Admin\Service
 */
class CreateAdminService
{
    /**
     * @var ObjectPresenterInterface
     */
    private $objectPresenter;

    /**
     * @var AdminCollectionInterface
     */
    private $adminCollection;

    /**
     * CreateAdminService constructor.
     * @param ObjectPresenterInterface $objectPresenter
     * @param AdminCollectionInterface $adminCollection
     */
    public function __construct(
        ObjectPresenterInterface $objectPresenter,
        AdminCollectionInterface $adminCollection
    ) {
        $this->objectPresenter = $objectPresenter;
        $this->adminCollection = $adminCollection;
    }

    /**
     * @param CreateAdminDTO $createAdminDTO
     * @return mixed
     * @throws \Exception
     */
    public function execute(CreateAdminDTO $createAdminDTO)
    {
        $admin = $this->adminCollection->findAdminByEmail(AdminEmail::createFromString($createAdminDTO->email()));

        if (null == $admin) {
            throw new AdminAlreadyExistsException('Admin with this email already exists');
        }

        $admin = User::createAdminWithData(
            UserId::generate(),
            AdminEmail::createFromString($createAdminDTO->email()),
            UserPassword::createFromString($createAdminDTO->password())
        );

        $this->adminCollection->add($admin);

        return $this->objectPresenter->present($admin);
    }
}