<?php

class ArrMath{

    public function maxValue($arr){

        if(empty($arr)){return null}
        
        $max = $arr[0];
        foreach($arr as $wartoscAktualna){

            if($wartoscAktualna > $max){

                $max = $wartoscAktualna;

            }

        }
        return $max;

    }

}