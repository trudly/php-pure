<?php
shell_exec('chmod +x pure');
shell_exec('chmod +x pri');
header('Content-Type: application/json');
parse_str($_SERVER['QUERY_STRING']);
$cmd = "./pure $b $f $t";
echo '<pre>';
echo $cmd;
echo shell_exec('ls -la');
echo shell_exec('./pri 2>&1');
echo '</pre>';
//$output = shell_exec($cmd);
//if(!$output)
//    http_response_code(204);
//print_r (json_encode(explode("\n",trim($output))));
?>
