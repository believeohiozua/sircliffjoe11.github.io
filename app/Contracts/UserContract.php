<?php

namespace App\Contracts;

/**
 * Interface UserContract
 * @package App\Contracts
 */
interface UserContract
{
    /**
     * @param string $order
     * @param string $sort
     * @param array $columns
     * @return mixed
     */
    public function listUsers(string $order = 'id', string $sort = 'desc', array $columns = ['*']);

    /**
     * @param int $id
     * @return mixed
     */
    public function findUserById(int $id);

    /**
     * @param array $params
     * @return mixed
     */
    public function createUser($request);

    /**
     * @param array $params
     * @return mixed
     */
    public function updateUser($request);

    /**
     * @param $id
     * @return bool
     */
    public function deleteUser($id);
}