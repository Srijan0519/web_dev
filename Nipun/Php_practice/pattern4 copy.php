<?php

for($i=1 ; $i<=5 ; $i++)
    {

        for($spaces=1 ; $spaces < 6-$i; $spaces++)
        {
            echo "&nbsp&nbsp";

        }
        

    for($stars=1 ; $stars<=$i ; $stars++)
    
        {
            echo "*";

           
        }

        for( $j=$i-1 ;$j>=1;$j--)

            {
                echo "*";
                
            }

        
        

        echo nl2br("\n");

    }


?>