<?php
Class Jaime{
    function sleepWith($name){
        if (is_a($name, 'Tyrion'))
            print("Not even if I'm drunk !\n");
        elseif (is_a($name, 'Sansa'))
            print ("Let's do this.\n");
        elseif (is_a($name, 'Cersei'))
            print ("With pleasure, but only in a tower in Winterfell, then.\n");
    }
}
?>