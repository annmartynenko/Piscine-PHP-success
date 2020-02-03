<?php
Class NightsWatch{
    public function fight() {
        print("");
    }
    public function recruit($name){
        if ($name instanceof IFighter)
            return $name->fight();
    }
}
?>