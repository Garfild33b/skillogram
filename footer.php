<hr/>

<?php

$time_start = microtime(true);
$time_end = microtime(true);
$time = $time_end - $time_start;
echo "Время выполнения скриптов в микросекундах: " . round($time, 4);
?>
</body>
</html>