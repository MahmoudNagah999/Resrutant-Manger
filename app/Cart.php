<?php

namespace App;

class Cart
{
    public $items = null;
    public $TotalQny = 0;
    public $TotalPrice = 0;
    
    public function __construct($oldcart){
        if($oldcart){
            $this->items = $oldcart->items;
            $this->TotalQny = $oldcart -> TotalQny;
            $this->TotalPrice = $oldcart -> TotalPrice;
        }
    }

    public function add($item, $id){
        $storeditem = ['qnt' => 0 , 'price' => $item->Price , 'item' => $item];
        
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storeditem = $this->items[$id];
            }
        }

        $storeditem['qnt']++;
        $storeditem['price'] = $item->Price * $storeditem['qnt'];
        $this->items[$id] = $storeditem;
        $this->TotalQny++;
        $this->TotalPrice += $item->Price; 
    }

    public function delete($item,$id)
    {
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storeditem = $this->items[$id];
            }
        }

        $OneitemPrice = $storeditem['price'] / $storeditem['qnt'];
        $storeditem['qnt']--;
        $storeditem['price'] -= $OneitemPrice ;
        $this->items[$id] = $storeditem;
        $this->TotalQny--;
        $this->TotalPrice -= $OneitemPrice;
    }

    public function DestroyAllCart()
    {
        $this->items = [];
        $this->TotalQny = 0;
        $this->TotalPrice = 0;       
    }

}
