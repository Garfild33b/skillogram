<hr/>

<?php


$time_end = microtime(true);
$time = $time_end - $time_start;
$counter_file = 'counter.txt';
echo "Время выполнения скриптов в микросекундах: " . round($time, 4);
if (file_exists($counter_file)) {
	$counter = file_get_contents($counter_file);
} else {
	$counter = 0;
}
$counter++;
file_put_contents($counter_file, $counter);
?>
</body>
</html>