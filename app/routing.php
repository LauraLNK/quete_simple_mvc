<?php
// routing.php
$routes = [
    'Item' => [ // Controller
        // Lorsque l'utilisateur est sur l'url / et
        // que la methode de la requete est GET, alors tu appel
        // la methode index du controlleur ItemController
        ['index', '/', 'GET'], // action, url, HTTP method
        ['show', '/item/{id}', ['GET','POST']], // action, url, HTTP method
    ],
    'category' => [ // Controller
        // Lorsque l'utilisateur est sur l'url / et
        // que la methode de la requete est GET, alors tu appel
        // la methode index du controlleur ItemController
        ['index', '/categories', 'GET'], // action, url, HTTP method
        ['show', '/category/{id}', ['GET','POST']], // action, url, HTTP method
    ],
];