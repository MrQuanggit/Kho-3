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
        $storeItem['totalPrice']+=$product->priceEach;
        $this->items[$product->id] = $storeItem;
        $this->totalQty++;
        $this->totalPrice+=$product->priceEach;
    }

    function minus($product){
        $storeItem = [
            "product"=>$product,
            "totalQty"=>0,
            "totalPrice"=>0,
        ];
        if(array_key_exists($product->id,$this->items)) {
            $storeItem = $this->items[$product->id];
        }
        $storeItem['totalQty']--;
        $storeItem['totalPrice']-=$product->priceEach;
        $this->items[$product->id] = $storeItem;
        $this->totalQty--;
        $this->totalPrice-=$product->priceEach;
    }

    function remove($product){
        if(array_key_exists($product->id,$this->items)) {
            $deleteItem = $this->items[$product->id];
            $this->totalQty -= $deleteItem['totalQty'];
            $this->totalPrice -= $deleteItem['totalPrice'];
            unset($this->items[$product->id]);
        }
    }
}


