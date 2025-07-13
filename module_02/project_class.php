<?php

// Contact App
$contacts = [];

function addContact(array &$contacts, string $name, string $email, $phone){
    $contacts = ['name' => $name, 'email' => $email, 'phone' => $phone];
    array_push($contacts, ['name' => $name, 'email' => $email, 'phone' => $phone]);
    var_dump($contacts);
    return $contacts;
}
