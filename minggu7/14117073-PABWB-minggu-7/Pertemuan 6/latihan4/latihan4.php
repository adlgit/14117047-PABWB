<?php
for($i=1;$i<=37;$i++){
    $jum=0;
    for($j=1;$j<=$i;$j++)
        if($i%$j==0)
            $jum++;
    if($jum==2)
        echo "$i <br>";
}
?> 