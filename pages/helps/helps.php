<?php

/**
 * function that works to validate and cleaning the wield
 * @param input   $campo  Its obligatory (POST)
 * @return string 
 */

function validar_campo($campo){
        $campo = trim($campo);
        $campo = stripcslashes($campo);
        $campo = htmlspecialchars($campo);

        return $campo;

}