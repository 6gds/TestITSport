<?php

declare(strict_types=1);

$jsonData = '{"years":[1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010]}';

$arr = json_decode($jsonData, true);

foreach ($arr['years'] as $year){
    echo $year;
    echo "</br>";
}
