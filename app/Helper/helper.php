<?php

function getFirstName($fullName) {
    // Első és utolsó név kinyerése a teljes névből
    $nameParts = explode(' ', trim($fullName));
    $firstName = $nameParts[0];
    $lastName = $nameParts[count($nameParts) - 1];

    // Középső név keresése, ha van
    $middleName = '';
    if (count($nameParts) > 2) {
        $middleName = $nameParts[1];
    }

    // Keresztnév összeállítása
    $firstName = $middleName ? $firstName . ' ' . $middleName : $firstName;
    return $lastName;
}

function getFirstCharacter($fullName){
    $firstCharacter = substr($fullName, 0, 1);
    return $firstCharacter;
}
