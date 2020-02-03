<?php
Class Targaryen{
    public function resistsFire() {
        return False;
    }
    public function getBurned(){
        if ($this->resistsFire() == False)
            return $this->burn = "burns alive";
        elseif ($this->resistsFire() == True)
            return $this->burn = "emerges naked but unharmed";
    }
}
?>