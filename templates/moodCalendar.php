<?php
/*if (count(get_included_files()) == 1)
    exit("Direct access not permitted.");
$days = array();
//----
$logs = array();
$log = array(
    "id" => 1,
    "rating" => 4
);
array_push($logs, $log);
$log = array(
    "id" => 2,
    "rating" => 3
);
array_push($logs, $log);
$day = array("id" => 1, "date" => 1, "logs" => $logs);
array_push($days, $day);
//----
$logs = array();
$log = array(
    "id" => 3,
    "rating" => 6
);
array_push($logs, $log);
$log = array(
    "id" => 4,
    "rating" => 8
);
array_push($logs, $log);
$log = array(
    "id" => 5,
    "rating" => 7
);
array_push($logs, $log);
$day = array("id" => 2, "date" => 2, "logs" => $logs);
array_push($days, $day);
//----
$logs = array();
$log = array(
    "id" => 6,
    "rating" => 4
);
array_push($logs, $log);
$log = array(
    "id" => 7,
    "rating" => 10
);
array_push($logs, $log);
$day = array("id" => 1, "date" => 1, "logs" => $logs);
array_push($days, $day);
//----
$logs = array();
$log = array(
    "id" => 8,
    "rating" => 4
);
array_push($logs, $log);
$log = array(
    "id" => 9,
    "rating" => 10,
);
array_push($logs, $log);
$day = array("id" => 1, "date" => 1, "logs" => $logs);
array_push($days, $day);
//----
$logs = array();
$log = array(
    "id" => 1,
    "rating" => 4
);
array_push($logs, $log);
$log = array(
    "id" => 2,
    "rating" => 10
);
array_push($logs, $log);
$day = array("id" => 1, "date" => 1, "logs" => $logs);
array_push($days, $day);
//----
*/
?>

<main>
    <div style="text-align: center;">Mood Calendar</div>
    <div class="calendar-container">
        <div class="calendar-header-cell">
            Sun
        </div>
        <div class="calendar-header-cell">
            Mon
        </div>
        <div class="calendar-header-cell">
            Tues
        </div>
        <div class="calendar-header-cell">
            Wed
        </div>
        <div class="calendar-header-cell">
            Thur
        </div>
        <div class="calendar-header-cell">
            Fri
        </div>
        <div class="calendar-header-cell">
            Sat
        </div>
        <div class="calendar-cell">
        </div>
        <div class="calendar-cell">
        </div>
        <div class="calendar-cell">
        </div>
        <?php 
        for($i = 1; $i<=31; $i++) {
            echo "<div class='calendar-cell'>";
            echo $i;
            echo "</div>";
        }
        
        ?>
    </div>
</main>

<style>
    .calendar-container {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
    }

    .calendar-header-cell {
        width: calc(calc(100% - 14px) / 7);
        border: 1px solid deepskyblue;
    }

    .calendar-cell {
        width: calc(calc(100% - 14px) / 7);
        height: calc(calc(100vh - 128px) / 6);
        border: 1px solid deepskyblue;
    }
</style>