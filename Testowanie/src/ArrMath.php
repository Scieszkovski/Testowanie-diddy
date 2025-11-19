<?php

class ArrMath{

    public function maxValue($arr){

        if(empty($arr)){return null}
        
        $max = $arr[0];
        foreach($arr as $currentValue){

            if($currentValue > $max){

                $max = $currentValue;

            }

        }
        return $max;

    }

}
