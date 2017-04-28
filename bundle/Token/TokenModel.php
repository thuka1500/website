<?php

namespace Bundle\Token;

use Bundle\Token\Repository\TokenRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class TokenModel
{
    /**
     * @var TokenRepositoryInterface
     */
    protected $repository;

    /**
     * TokenModel constructor.
     * @param TokenRepositoryInterface $repository
     */
    public function __construct(TokenRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $data
     * @param string $column
     * @return string
     */
    public function getToken($data, string $column = 'id'): string
    {
        return (string) $this->repository->get($column, $data)->token;
    }

    /**
     * @param $data
     * @param string $column
     * @return Collection
     */
    public function getRow($data, string $column = 'id'): Collection
    {
        return $this->repository->get($column, $data);
    }

    /**
     * @param array $data
     * @return bool
     */
    public function update(array $data): bool
    {
        return $this->repository->update($data);
    }

    /**
     * @param array $data
     * @return bool
     */
    public function insert(array $data): bool
    {
        return $this->repository->insert($data);
    }

    public function check(string $column = 'id'): bool {

    }
}