<?php

namespace App\Contracts;

/**
 * Interface AdminContract
 * @package App\Contracts
 */
interface AdminContract
{
    /**
     * @param string $order
     * @param string $sort
     * @param array $columns
     * @return mixed
     */
    public function listAdmins(string $order = 'id', string $sort = 'desc', array $columns = ['*']);

    /**
     * @param int $id
     * @return mixed
     */
    public function findAdminById(int $id);

    /**
     * @param array $params
     * @return mixed
     */
    public function createAdmin($request);

    /**
     * @param array $params
     * @return mixed
     */
    public function updateAdmin($request);

    /**
     * @param $id
     * @return bool
     */
    public function deleteAdmin($id);
}