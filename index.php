<?php

$day_of_week = array('first_day' => 'Sunday', 
                    'second_day' => 'Monday',
                    'Third_day' => 'Tuesday',
                    'Fourth_day' => 'Wednesday',
                    'Fifth_day' => 'Thursday',
                    'Sixth_day' => 'Friday',
                    'Seventh_day' => 'Saturday'
);
 foreach ($day_of_week as $key => $value) {
    echo "<li>$value</li>";
 }