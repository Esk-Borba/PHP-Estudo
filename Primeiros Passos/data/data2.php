<?php

$ts = strtotime("-1 day");
//pega o timestamp de uma data

echo date('l, d/m/Y', $ts);
//apresenta a data com base no seu timestamp