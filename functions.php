<?php
// Funzione per generare una password
function generatePassword($lunghezza){
    $comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!?~@#-_+<>[]{}';
    $new_password = '';
    for ($i = 0; $i < $lunghezza; $i++) {
        $new_password .= $comb[rand(0, strlen($comb) - 1)];
    }
    return $new_password;
};