<?php
    function check($a)
    {
        if($a%2==0)
        {
            return "Even";
        }
        else{
            return "Odd";
        }
    }
?>
<html>
    <body>
        <h1><?php echo "10 : ";?><?php echo check(10);?></h1>
    </body>
</html>