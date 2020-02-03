<?php
Class UnholyFactory{
   public $people = array();
    function absorb($type){
        if ($type instanceof Fighter) {
            if (in_array($type, $this->people))
                printf("(Factory already absorbed a fighter of type %s)\n", $type->name);
            else {
                printf("(Factory absorbed a fighter of type %s)\n", $type->name);
                $this->people[$type->name] = $type;
            }
        }
        else
            print("(Factory can't absorb this, it's not a fighter)\n");
    }
    function fabricate($type){
        if (isset($this->people[$type]))
        {
            printf("(Factory fabricates a fighter of type %s)\n", $type);
            return $this->people[$type];
        }
        else {
            printf("(Factory hasn't absorbed any fighter of type %s)\n",  $type);
            return NULL;
        }
    }

}
?>