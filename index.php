<?php
    class User{
    public $fistname;
  
    public function __construct($fistname)
    {
        $this->fistname = $fistname;
       
    }

    public function hello()
    {
        echo "hello". $this->fistname;
        return $this;
    }
        public function register()
    {
        echo " >> registered";
        return $this;
    }

    public function mail()
    {
       echo " >> email sent \n";
        
    }
    }
$user = new User("jane");
$user->hello()->register()->mail();

?>
