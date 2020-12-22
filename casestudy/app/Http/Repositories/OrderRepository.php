<?php

namespace App\Http\Repositories;

use App\Models\Order;

class OrderRepository implements RepositoryInterface {

    protected $orderModel;

    public function __construct(Order $orderModel)
    {
        $this->orderModel = $orderModel;
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
        return $this->orderModel->get();
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
        return $this->orderModel->findOrFail($id);
    }

    public function save($obj)
    {
        // TODO: Implement save() method.
        $obj->save();
    }

    public function delete($obj)
    {
        // TODO: Implement delete() method.
        $obj->delete();
    }
}

