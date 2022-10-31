<?php
$myfile = fopen("read.txt",r) or die ("Unable to open file");
$txt="hello";
fwrite($myfile,$txt);
while(!feof($myfile)){
    echo fgets($myfile)."<br>";

}

fclsoe($myfile);
?>