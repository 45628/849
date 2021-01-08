<?php
$data = $_GET['cmd'];
if(isset($_GET['cmd'])) {
$f = fopen("ng.txt", "w");
fwrite($f, $data."\n");
fclose($f);
}
?>