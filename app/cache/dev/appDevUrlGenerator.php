<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:importAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/import',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_export' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:exportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '.txt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler/export',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jaevi\\HotelesBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listadoHoteles' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jaevi\\HotelesBundle\\Controller\\DefaultController::listadoHotelesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listadoHoteles',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annadirHotel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jaevi\\HotelesBundle\\Controller\\DefaultController::annadirHotelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/annadirHotel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listadoHabitaciones' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jaevi\\HotelesBundle\\Controller\\DefaultController::listadoHabitacionesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listadoHabitaciones',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annadirHabitacion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jaevi\\HotelesBundle\\Controller\\DefaultController::annadirHabitacionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/annadirHabitacion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listadoReservas' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jaevi\\HotelesBundle\\Controller\\DefaultController::listadoReservasAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listadoReservas',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annadirReserva' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jaevi\\HotelesBundle\\Controller\\DefaultController::annadirReservaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/annadirReserva',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'habitacion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jaevi\\HotelesBundle\\Controller\\HabitacionController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/habitacion/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'habitacion_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jaevi\\HotelesBundle\\Controller\\HabitacionController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/habitacion/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'habitacion_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jaevi\\HotelesBundle\\Controller\\HabitacionController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/habitacion/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'habitacion_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jaevi\\HotelesBundle\\Controller\\HabitacionController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/habitacion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'habitacion_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jaevi\\HotelesBundle\\Controller\\HabitacionController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/habitacion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'habitacion_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jaevi\\HotelesBundle\\Controller\\HabitacionController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/habitacion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'habitacion_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jaevi\\HotelesBundle\\Controller\\HabitacionController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/habitacion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hotel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jaevi\\HotelesBundle\\Controller\\HotelController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/hotel/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hotel_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jaevi\\HotelesBundle\\Controller\\HotelController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/hotel/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hotel_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jaevi\\HotelesBundle\\Controller\\HotelController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/hotel/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hotel_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jaevi\\HotelesBundle\\Controller\\HotelController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/hotel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hotel_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jaevi\\HotelesBundle\\Controller\\HotelController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/hotel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hotel_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jaevi\\HotelesBundle\\Controller\\HotelController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/hotel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hotel_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jaevi\\HotelesBundle\\Controller\\HotelController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/hotel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reserva' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jaevi\\HotelesBundle\\Controller\\ReservaController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/reserva/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reserva_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jaevi\\HotelesBundle\\Controller\\ReservaController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/reserva/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reserva_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Jaevi\\HotelesBundle\\Controller\\ReservaController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/reserva/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reserva_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jaevi\\HotelesBundle\\Controller\\ReservaController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/reserva',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reserva_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jaevi\\HotelesBundle\\Controller\\ReservaController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/reserva',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reserva_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jaevi\\HotelesBundle\\Controller\\ReservaController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/reserva',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reserva_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Jaevi\\HotelesBundle\\Controller\\ReservaController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/reserva',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
