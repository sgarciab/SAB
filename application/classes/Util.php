<?php
/**
 * Created by PhpStorm.
 * User: Excalibur
 * Date: 20/11/2014
 * Time: 23:58
 */

class Util{

    static function randomColor() {
        $str = '#';
        for($i = 0 ; $i < 6 ; $i++) {
            $randNum = rand(0 , 15);
            switch ($randNum) {
                case 10: $randNum = 'A'; break;
                case 11: $randNum = 'B'; break;
                case 12: $randNum = 'C'; break;
                case 13: $randNum = 'D'; break;
                case 14: $randNum = 'E'; break;
                case 15: $randNum = 'F'; break;
            }
            $str .= $randNum;
        }
        return $str;
    }

}