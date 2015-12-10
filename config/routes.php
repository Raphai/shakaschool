<?php
use Cake\Core\Plugin;
use Cake\Routing\Router;
Router::defaultRouteClass('Route');
Router::scope('/', function ($routes) {
    $routes->connect('/', ['controller' => 'Pages', 'action' => 'accueil']);
    $routes->fallbacks('InflectedRoute');
});
Router::connect('/accueil', array('controller' => 'Pages', 'action' => 'accueil'));
Router::connect('/manager', array('controller' => 'Pages', 'action' => 'manager'));
Router::connect('/plan-de-site', array('controller' => 'Pages', 'action' => 'planDeSite'));
Router::connect('/travaux-portfolio', array('controller' => 'Pages', 'action' => 'travaux'));
Router::connect('/demande-de-devis', array('controller' => 'Pages', 'action' => 'devis'));

Router::connect('/creation-de-sites-internet-a-poitiers', array('controller' => 'Pages', 'action' => 'view',3));
Router::connect('/design-creations-graphiques', array('controller' => 'Pages', 'action' => 'view',14));
Router::connect('/supports-de-communication-papier', array('controller' => 'Pages', 'action' => 'view',17));
Router::connect('/a-propos-de-votre-prestataire', array('controller' => 'Pages', 'action' => 'view',20));
Router::connect('/liens-utiles', array('controller' => 'Pages', 'action' => 'view',23));
Router::connect('/assistance', array('controller' => 'Pages', 'action' => 'view',26));

Router::connect('/informations-legales', array('controller' => 'Pages', 'action' => 'view',22));


//Router::connect('/page/:slug-:id',
//    ['controller' => 'Pages', 'action' => 'view'],
//    [
//        'pass' => ['id', 'slug'],
//        'id' => '[0-9]+']
//);

Router::connect('/projets/:slug-:id',
    ['controller' => 'Pages', 'action' => 'projet'],
    [
        'pass' => ['id', 'slug'],
        'id' => '[0-9]+']
);


Router::extensions(['rss', 'xml']);
Router::connect('/sitemaps', array('controller' => 'Sitemaps', 'action' => 'index'));

Plugin::routes();