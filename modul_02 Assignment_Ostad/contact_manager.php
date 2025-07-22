<?php

// Empty Array
$contacts = [];

// Function to add a contact
function addContact(array &$contacts, string $name, string $email, string $phone):void
{
    array_push($contacts, [
        'name' => $name,
        'email' => $email,
        'phone' => $phone
    ]);
}

// Function to display contacts
function viewContacts(array $contacts):void
{
    if(empty($contacts)){
        echo "No contacts available.\n";
    }
    else{
        foreach($contacts as $contactItem){
            echo "Name: " . $contactItem['name'] . "\n";
            echo "Email: " . $contactItem['email'] . "\n";
            echo "Phone: " . $contactItem['phone'] . "\n";
            echo "-------------------------\n";
        }
    }
}


// Main loop to get input from user
while(true){
    echo "\nContact Management System\n";
    echo "1. Add Contact\n";
    echo "2. View Contacts\n";
    echo "3. Exit\n";
    
    $choice = (int)readline("Choose an option: ");
    switch($choice){
        case 1:
            $name = trim(readline("Enter Name: "));
            $email = trim(readline("Enter Email: "));
            $phone = trim(readline("Enter Phone: "));
            addContact($contacts, $name, $email, $phone);
            echo "Contact added Successfully.\n";
            break;
        case 2:
            viewContacts($contacts);
            break;
        case 3:
            echo "Exited the Contact Management System.\n";
            exit;
        default:
            echo "Invalid Selection. Please try again.\n";
            break;
    }
}


?>