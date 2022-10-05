<?php

    function helloWorld(){
        return "Hello World!"; 
    }

    function QuiEstLeMeilleurProf(){
        return "Le prof de programmation Web";
    } 
    
    function jeRetourneMonArgument($abc = 'abc'){
        return $abc;
    }

    function concatenation($arg1 = 'Antoine', $arg2 = 'Griezmann'){
        return $arg1 . $arg2;
    }

    function concatenationAvecEspace($arg1 = 'Ngolo', $arg2 = 'Kante'){
        return $arg1 . ' ' . $arg2;
    }

    function somme($arg1 = 5, $arg2 = 5){
        return $arg1 + $arg2;
    }

    function soustraction($arg1 = 5, $arg2 = 5){
        return $arg1 - $arg2;
    }

    function multiplication($arg1 = 5, $arg2 = 5){
        return $arg1 * $arg2;
    }
?>