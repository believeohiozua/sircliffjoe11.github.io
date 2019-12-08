<?php

namespace App\Repositories;

use App\Models\Subscriber;
use App\Contracts\SubscriberContract;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Doctrine\Instantiator\Exception\InvalidArgumentException;

/**
 * Class SubscriberRepository
 *
 * @package \App\Repositories
 */
class SubscriberRepository extends BaseRepository implements SubscriberContract
{

    /**
     * SubscriberRepository constructor.
     * @param Subscriber $model
     */
    public function __construct(Subscriber $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    /**
     * @param string $order
     * @param string $sort
     * @param array $columns
     * @return mixed
     */
    public function listSubscribers(string $order = 'id', string $sort = 'desc', array $columns = ['*'])
    {
        return $this->all($columns, $order, $sort);
    }

    /**
     * @param int $id
     * @return mixed
     * @throws ModelNotFoundException
     */
    public function findSubscriberById(int $id)
    {
        try {
            return $this->findOneOrFail($id);

        } catch (ModelNotFoundException $e) {

            throw new ModelNotFoundException($e);
        }

    }

    /**
     * @param array $params
     * @return Subscriber|mixed
     */
    public function createSubscriber($request)
    {
        try {

            $subscriber = new Subscriber();
            $subscriber->email = $request->email;
            $subscriber->save();
            
            return $subscriber;

        } catch (QueryException $exception) {
            throw new InvalidArgumentException($exception->getSubscriber());
        }
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function updateSubscriber($request)
    {       
        //
    }

    /**
     * @param $id
     * @return bool|mixed
     */
    public function deleteSubscriber($id)
    {
        try {
            $subscriber = $this->findSubscriberById($id);
    
            $subscriber->delete();
    
            return $subscriber;
        } catch (QueryException $exception) {
            throw new InvalidArgumentException($exception->getSubscriber());
        }
    }
}