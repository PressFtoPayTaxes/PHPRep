<?php

class Matrix
{
    private $array;

    public function __construct(array $arr){
        $columnsCount = count($arr[0]);

        foreach($arr as $subarr)
            if(count($subarr) != $columnsCount)
                die("Matrix is not valid");

        $this->array = $arr;
    }

    public function add (Matrix $matrix){
        if(!$this->canOperate($matrix))
            die("Matrixes are not the same size");

        for($i = 0; $i < count($this->array); $i++){
            for ($j = 0; $j < count($this->array[$i]); $j++)
                $this->array[$i][$j] += $matrix->toArray()[$i][$j];
        }

        return $this;
    }

    public function diff(Matrix $matrix){
        if(!$this->canOperate($matrix))
            die("Matrixes are not the same size");

        for($i = 0; $i < count($this->array); $i++){
            for ($j = 0; $j < count($this->array[$i]); $j++)
                $this->array[$i][$j] -= $matrix->toArray()[$i][$j];
        }

        return $this;
    }

    public function mult(Matrix $matrix){
        if(!$this->canMultiply($matrix))
            die("Can't multiply");

        $newMatrix = [];

        for($i = 0; $i < count($this->array); $i++){
            for($j = 0; $j < count($this->array[0]); $j++){
                for($k = 0; $k < count($matrix->toArray()[0]); $k++){
                    $newMatrix[$i][$k] += $this->array[$i][$j] * $matrix->toArray()[$j][$k];
                }
            }
        }

        $this->array = $newMatrix;
        return $this;
    }

    private function canOperate(Matrix $matrix){
        if(count($matrix->toArray()) != count($this->array))
            return false;

        return count($this->array[0]) == count($matrix->toArray()[0]);
    }

    private function canMultiply(Matrix $matrix){
        return count($this->array[0]) == count($matrix->toArray());
    }

    public function toArray(){
        return $this->array;
    }
}

$arr = new Matrix([[2, -1], [5, 3]]);
$anotherArr = new Matrix([[3, 1, 0], [2, -1, 5]]);

$arr->mult($anotherArr);

foreach($arr->toArray() as $row){
    foreach ($row as $element){
        echo $element . " ";
    }
    echo PHP_EOL;
}