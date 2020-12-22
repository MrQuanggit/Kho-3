<?php

namespace App\Http\Services;

use App\Http\Repositories\OrderRepository;

class OrderService implements ServiceInterface {

    protected $orderRepository;

    public function __construct(OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    function getAll()
    {
        // TODO: Implement getAll() method.
        return $this->orderRepository->getAll();
    }

    function findById($id)
    {
        // TODO: Implement findById() method.
        return $this->orderRepository->findById($id);
    }


    function delete($obj)
    {
        // TODO: Implement delete() method.
    }

    function update($request, $obj = null)
    {
        // TODO: Implement update() method.
    }

    function add($request, $obj = null)
    {
        // TODO: Implement add() method.
    }
}


