<?php
Class House{
    function introduce(){
        printf("House %s of %s : \"%s\"\n", $this->getHouseName(), $this->getHouseSeat(), $this->getHouseMotto());
    }
}
?>