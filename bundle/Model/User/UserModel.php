<?php

namespace Bundle\Model\User;

use Bundle\Repository\User\UserRepositoryInterface;

class UserModel
{
    /**
     * @var UserRepositoryInterface
     */
    protected $repository;

    /**
     * UserModel constructor.
     * @param UserRepositoryInterface $repository
     */
    public function __construct(UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $data
     * @param string $column
     * @return mixed
     */
    public function getUser($data, string $column = 'id')
    {
        return $this->repository->getUser($data, $column);
    }

    /**
     * @param int $skip
     * @param int $take
     * @return mixed
     */
    public function getUsers(int $skip, int $take) 
    {
        return $this->repository->getUsers($skip, $take);
    }

    /**
     * @param array $data
     * @return bool
     */
    public function update(array $data)
    {
        return $this->repository->update($data);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function save(array $data)
    {
        return $this->repository->save($data);
    }
}