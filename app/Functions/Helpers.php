<?php

namespace App\Functions;


class Helpers
{

    public static function getCsvTrains($path){
        $file_steam = fopen($path, 'r');
        if($file_steam === false){
            exit('Cannot open th file: '.$path);
        }

        $trains = [];
        while($row = fgetcsv($file_steam)) {
            $trains[] = $row;
        }
        dd($trains);
        return $trains;
    }
}