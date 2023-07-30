<?php

return array(
    "list" => array(
        "left_sidebar" => [
           [ "title"     => "Kontrolna tabla", "url" => "/",  
            "breadcrumb" => [], 
            "icon"       => "team_dashboard" ],

           ["title"      => "Knjige", "url" => "/knjige",  
            "breadcrumb" => ["Kontrolna tabla", "Knjige"], 
            "icon"       => "menu_book" ],

           ["title"      => "Autori", "url" => "/autori",  
            "breadcrumb" => ["Kontrolna tabla", "Autori"], 
            "icon"       => "account_box" ],

           ["title"      => "Izdavanje knjiga", "url" => "/izdavanje-knjiga",  
            "breadcrumb" => ["Kontrolna tabla", "Izdavanje knjiga"], 
            "icon"       => "currency_exchange" ],

           ["title"      => "Bibliotekari", "url" => "/bibliotekari", 
            "breadcrumb" => ["Kontrolna tabla", "Bibliotekari"], 
            "icon"       => "switch_account" ],

           ["title"      => "Članovi", "url" => "/clanovi",  
            "breadcrumb" => ["Kontrolna tabla", "Članovi"], 
            "icon"       => "groups" ],

           ["title"      => "Korpa za otpatke", "url" => "/recycle-bin",  
            "breadcrumb" => ["Kontrolna tabla", "Korpa za otpatke"], 
            "icon"       => "delete" ],
            
           ["title"      => "Podešavanja", "url" => "/podesavanja",  
            "breadcrumb" => ["Kontrolna tabla", "Podešavanja"], 
            "icon"       => "settings" ],
        ],

        "top_right" => [

        ]
    ),
);