<?php
shell_exec('chmod +x pure');
header('Content-Type: application/json');
parse_str($_SERVER['QUERY_STRING']);
$cmd = "./pure $b $f $t";
$output = shell_exec($cmd);
if(!$output)
    http_response_code(204);
print_r (json_encode(explode("\n",trim($output))));
?>