<?php


namespace App;


class Cart
{
    public $items =[];
    public $totalPrice = 0;
    public $totalQty = 0;

    public function __construct($oldcart)
    {
        if ($oldcart){
            $this->items = $oldcart->items;
            $this->totalPrice = $oldcart->totalPrice;
            $this->totalQty = $oldcart->totalQty;
        }
    }
    function add($product){
        $storeItem = [
            "product"=>$product,
            "totalQty"=>0,
            "totalPrice"=>0,
        ];
        if(array_key_exists($product->id,$this->items)) {
            $storeItem = $this->items[$product->id];
        }
        $storeItem['totalQty']++;
        $storeItem['totalPrice']+=$product->price;
        $this->items[$product->id] = $storeItem;
        $this->totalQty++;
        $this->totalPrice+=$product->price;
    }
}
