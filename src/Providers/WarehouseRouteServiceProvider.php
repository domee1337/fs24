<?php

namespace Warehouse\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class WarehouseRouteServiceProvider extends RouteServiceProvider
{
    /**
     * @param Router $router
     */
    public function map(Router $router)
    {

        /**
        * GET Routing CALLS
        */
        //$router->get('warehouse/calls/findStock/{id}',            'Warehouse\Controllers\ContentController@findStock')->where('id', '\d+');
        //$router->get('warehouse/calls/stockByVariation/{id}',     'Warehouse\Controllers\ContentController@stockByVariation')->where('id', '\d+');

        /**
        * GET Routing Templates
        */
        
        $router->get('warehouse',                       'Warehouse\Controllers\ContentController@render_start');
        $router->get('warehouse/start-page',            'Warehouse\Controllers\ContentController@render_start');
        $router->get('warehouse/incoming',              'Warehouse\Controllers\ContentController@render_incoming');
        $router->get('warehouse/transfer',              'Warehouse\Controllers\ContentController@render_transfer');
        $router->get('warehouse/inventur',              'Warehouse\Controllers\ContentController@render_inventur');
        /**
        * POST Routing
        */
        //$router->post('warehouse/calls/bookStock',                'Warehouse\Controllers\ContentController@bookStock');
        //$router->post('warehouse/calls/correctStock',             'Warehouse\Controllers\ContentController@correctStock');

        /*listStockStorageLocationsByVariationId
        $router->put('todo/{id}', 'ToDoList\Controllers\ContentController@updateToDo')->where('id', '\d+');
        $router->delete('todo/{id}', 'ToDoList\Controllers\ContentController@deleteToDo')->where('id', '\d+');*/
    }

}

?>
