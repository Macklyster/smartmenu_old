<?php

namespace libs;

/**
 * Description of Router
 *
 * @author Macklyster
 */
class Router {
    /*
    * @var routers
    */

    protected $routers = array(
        'site' => 'site',
        'admin' => 'admin'
    );

    private $urlBase = APP_ROOT;

    /*
     * @var router on raiz
     */

    protected $routerOnRaiz = 'admin';

    /*
     * @var onRaiz
     */

    protected $onRaiz = true;
}