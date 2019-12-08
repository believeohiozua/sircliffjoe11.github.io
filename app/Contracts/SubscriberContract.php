<?php

namespace App\Contracts;

/**
 * Interface SubscriberContract
 * @package App\Contracts
 */
interface SubscriberContract
{
    /**
     * @param string $order
     * @param string $sort
     * @param array $columns
     * @return mixed
     */
    public function listSubscribers(string $order = 'id', string $sort = 'desc', array $columns = ['*']);

    /**
     * @param int $id
     * @return mixed
     */
    public function findSubscriberById(int $id);

    /**
     * @param array $params
     * @return mixed
     */
    public function createSubscriber($request);

    /**
     * @param array $params
     * @return mixed
     */
    public function updateSubscriber($request);

    /**
     * @param $id
     * @return bool
     */
    public function deleteSubscriber($id);
}