<?php

namespace Market;

class Inventory{

    public $inventory = [];

    public function addToInventory($product){
        echo "-- ".$product[0] . " (".$product[1].") added to inventory<br/>";
        $this->inventory[] = $product;
    }

    public function removeFromInventory($item){
        echo "-- ".$this->inventory[$item][0] . " (".$this->inventory[$item][1].") removed from inventory<br/>";
        unset($this->inventory[$item]);

    }

    public function getInventory(){
        echo '<b>Inventory</b><br/>';
        foreach($this->inventory as $key=>&$product){
            echo "$key - $product[0] ($product[1])<br/>";
        }
    }
}
