<?php

interface canEat{
    function eat();
}

interface canSleep{
    function sleep();
}

interface canFly{
    function fly();
}

interface canTalk{

}

interface canSwim{
    function swim();
}

class Human implements canEat,canSleep,canSwim{
function eat(){
   echo "Human can eat\n"; 
}
function sleep(){
    echo "Human can sleep\n"; 
 }
 function swim(){
    echo "Human can swim\n"; 
 }
}


class Bird implements canEat,canSleep{
    function eat(){
       echo "Human can eat\n"; 
    }
    function sleep(){
        echo "Human can sleep\n"; 
     }
   
    }


    class Fish implements canEat,canSleep,canSwim{
        function eat(){
           echo "Human can eat\n"; 
        }
        function sleep(){
            echo "Human can sleep\n"; 
         }
         function swim(){
            echo "Human can swim\n"; 
         }
        }

        $human=new Human();
        $bird=new Bird();
        $fish =new Fish();

        function canYouswim(canSwim $object){
            echo $object->swim();
        }

        canYouswim($human);
        canYouswim($fish);