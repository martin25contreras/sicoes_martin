<?php

//formato de fecha con /
if (! function_exists('show_full_date')) {
    function show_full_date($date)
    {
        $split = explode(' ', $date);
        $d = explode("-", $split[0]);
        $date = $d[2].'/'.$d[1].'/'.$d[0];
        return $date.'    '. $split[1];
    }
}

// Transform the date of Format 00-00-0000 to the Format 00/00/0000
if (! function_exists('show_date')) {
    function show_date($date)
    {
        $date = explode('-', $date);
        return $date[2] . '/' . $date[1] . '/' . $date[0];
    }
}

//colocar texto a mayusculas
if (! function_exists('textUpper')) {
    function textUpper($text)
    {
        return mb_strtoupper($text, 'UTF8');
    }
}

// ceros a la izquierda
if (! function_exists('FullSerial')) {
    function FullSerial($serial, $zero = 6)
    {
        return str_pad($serial, $zero, "0", STR_PAD_LEFT);
    }
}

//funcion para el tiempo
if (! function_exists('msToTime')) { 
    
    function msToTime($s) {
      $secs = $s % 60;
      $s = ($s - $secs) / 60;
      $mins = $s % 60;
      $hrs = ($s - $mins) / 60;
      return FullSerial($hrs, 2) . ':' . FullSerial($mins, 2) . ':' . FullSerial($secs, 2);
    }
}
