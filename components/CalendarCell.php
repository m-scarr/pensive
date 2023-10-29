<?php
function generateCell($cellData)
{
    ob_start();
    ?>
    <div class="calendar-cell" id="day-cell-<?php echo $cellData["id"] ?>">
        <div class="date-container">
            <canvas id="day-canvas-<?php echo $cellData["id"] ?>">
                <?php echo $cellData["date"] ?>
        </div>
    </div>;
    <script>
        var cell = document.getElementById("day-cell-<?php echo $cellData["id"] ?>");
        var canvas = document.getElementById("day-canvas-<?php echo $cellData["id"] ?>");
        var logs = <?php echo json_encode($cellData["logs"]) ?>;
        console.log(logs);
    </script>
    <?php
    return ob_get_clean();
}
?>