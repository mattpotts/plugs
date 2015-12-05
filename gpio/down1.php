<?php

$script = realpath(sprintf('%s/down1.py', __DIR__));
$command = sprintf('python %s', $script);

echo '<pre>';
echo $command, "\n";
echo get_current_user();

$output = [];
exec($command, $output);
echo $output[0];

echo '</pre>';
