
<?php
class Father {
    // //public
    // public $name = "Sazzad Hossen";

    //  //private
    //  private $name = "Sazzad Hossen";

      //protected
      protected $name = "Sazzad Hossen";

    public function ShowName() {
        echo $this->name;
    }
}

class Son extends Father {

    public function ShowName() {
        echo $this->name;
    }
}


 $fatherObj = new Father();
$fatherObj->ShowName();
