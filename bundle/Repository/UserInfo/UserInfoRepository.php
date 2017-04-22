<?php

namespace Bundle\Repository\UserInfo;

use App\Eloquent\UserInfo;

class UserInfoRepository
{
    /**
     * @var User
     */
    protected $eloquent;

    /**
     * UserInfoRepository constructor.
     * @param UserInfo $eloquent
     */
    public function __construct(UserInfo $eloquent)
    {
        $this->eloquent = $eloquent;
    }

    /**
     * @param $data
     * @param string $column
     * @return mixed
     */
    public function getUser($data, string $column)
    {
        return $this->eloquent->where($column, $data)->first();
    }


    /**
     * @param array $data
     * @return bool
     */
    public function update(array $data)
    {
        return $this->eloquent->update($data);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function insert(array $data)
    {
        return $this->eloquent->insert($data);
    }

    /**
     * @param $data
     * @param string $column
     * @return mixed
     */
    public function delete($data, string $column)
    {
        return $this->eloquent->where($column, $data)->delete();
    }
}