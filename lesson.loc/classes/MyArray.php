<?php

class MyArray
{
    private $arr;

    public function __construct(array $arr){
        $this->arr = $arr;
    }

    public function addItem($item){
        $this->arr[] = $item;
    }

    /*
     * -Item
     * --SubItem
     * --SubItem2
     * ---subsubitem
     * -item2
     */



    public function printArray(){
        foreach($this->arr as $item){
            $this->printItem($item, 1);
        }
    }

    public function printItem($item, $count = 1){
        if(is_array($item)){
            foreach($item as $subitem){
                $this->printItem($subitem, $count + 1);
            }
        }
        else{
            for($i = 0; $i < $count; $i++){
                echo "-";
            }
        }
        echo $item . "<br/>";
    }


}