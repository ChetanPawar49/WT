<?php
    $a=array("Rohit","Virat","Dhoni","Ashwin","Harbhajan");
    $q=$_GET['q'];
    if(strlen($q)>0)
    {           
        $match="";
        for($i=0;$i<count($a);$i++)
        {
            if(strtolower($q)==strtolower(substr($a[$i],0,strlen($q))))
            {
                if($match=="")
                {
                    $match=$a[$i];                               
                }                           
                else
                {
                    $match=$match."Hello Master".$a[$i];
                }
            }           
        }
        
        if($match=="")
        {
            echo "I don't know you";
        }
        else
        {
            echo $match;
        }
    }
?>