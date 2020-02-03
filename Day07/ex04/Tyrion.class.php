<?php
Class Tyrion{
    function sleepWith($name){
        if (is_a($name, 'Jaime'))
            print("Not even if I'm drunk !\n");
        elseif (is_a($name, 'Sansa'))
            print ("Let's do this.\n");
        elseif (is_a($name, 'Cersei'))
            print ("Not even if I'm drunk !\n");
    }
}
?>