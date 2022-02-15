<?php
$myfile = fopen("testfile.py", "w");
$txt = "print('hello world')";
fwrite($myfile, $txt);
fclose($myfile);
$command = "python3 testfile.py > output.txt";
$output = null;
$retval = null;
exec($command, $output, $retval);
echo $retval;
print_r($output);
?>
