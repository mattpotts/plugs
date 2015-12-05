<?php

$script = realpath(sprintf('%s/up1.py', __DIR__));
$command = sprintf('python %s', $script);
echo $command, "\n";
exec($command);
