<?php

$routes = [
    'Item' => [ // Controller
        // Lorsque l'utilisateur est sur l'url / et
        // que la methode de la requete est GET, alors tu appel
        // la methode index du controlleur ItemController
        ['index', '/', 'GET'], // action, url, HTTP method
        ['show', '/item/{id}', ['GET','POST']], // action, url, HTTP
        ['add', '/items/add', ['GET','POST']],
        ['edit', '/items/edit/{id}',['GET','POST']],
	    ['delete', '/items/delete/{id}',['GET','POST']],

    ],
    'Category' => [
        ['index', '/categories', 'GET'],
        ['show', '/category/{id}', ['GET','POST']],
        ['add', '/categories/add', ['GET','POST']],
	    ['edit', '/category/edit/{id}',['GET','POST']],
	    ['delete', '/category/delete/{id}',['GET','POST']],
    ],
];


