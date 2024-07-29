<?php 
function generatePassword($length,$lowercase,$uppercase,$number,$symbol){
    $lowercaseCharacters="qwertyuiopasdfghjklcbnm";
    $uppercaseCharacter="QWERTYUASDFGHKNVXZB";
    $allnumbers="0123456789";
    $allsymbols ="!@#$%&^*&()+_-";
    $characters="";

    if($lowercase){

        $characters .=$lowercaseCharacters;
    }
    
    if($uppercase){

        $characters .=$uppercaseCharacter;
    }
    
    if($number){

        $characters .=$allnumbers;
    }
    
    if($symbol){

        $characters .=$allsymbols;
    }
    $saffol=str_shuffle($characters);
    $password=substr($saffol,0,$length);
    return $password;

}

$generatedPassword=generatePassword(14,true,true,true,true);
echo $generatedPassword;