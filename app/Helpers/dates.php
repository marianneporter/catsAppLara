<?php

use Carbon\Carbon;

    function convertDBDateToDispFormat($date) {
        return Carbon::createFromFormat('Y-m-d', $date)->format('d M Y');
    }

?>