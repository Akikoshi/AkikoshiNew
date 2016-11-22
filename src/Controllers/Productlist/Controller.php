<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 07.09.2016
 * Time: 10:45
 */

namespace Class152\PizzaMamamia\Controllers\Productlist;


use Class152\PizzaMamamia\AbstractClasses\AbstractController;
use Class152\PizzaMamamia\Library\TwigRendering;
use Class152\PizzaMamamia\Services\MenuService\MenuService;
use Class152\PizzaMamamia\Services\ProductListService\ProductListService;


class Controller extends AbstractController
{
    
    public function indexAction(){

        $menuService = new MenuService($this->request);
        $mainMenu = $menuService->getMainMenu();
        $accountMenu = $menuService->getAccountMenu();
        $footerMenu = $menuService->getFooterMenu();
        $breadcrumbMenu = $menuService->getBreadcrumbMenu();


        $productListService = new ProductListService();

        $productGroupId = (INT)$this->request->getFirstAdditionalVar();

        $getVars = new FilterGetVars( $_GET );


        $productListFilter = $productListService->getProductListFilter(
            $productGroupId,
            $getVars->getCurrentPage(),
            12 // Todo: ItemsPerPage muss noch vom HtmL kommen
        );

        if( empty( $getVars->getSortBy() ) )
        {
            $productListFilter->isSortByPrice();
        }

        $pagination = $productListService->getPagination($productListFilter);

        $productList = $productListService->getProductList( $productListFilter );

            new TwigRendering(
                'Productlist/index.twig',
                [
                    'controllerName'=>'ProductList',
                    'actionName' => 'index',
                    'mainMenu' => $mainMenu,
                    'footerMenu' => $footerMenu,
                    'accountMenu' => $accountMenu,
                    'productList'=> $productList,
                    'breadcrumbMenu' => $breadcrumbMenu,
                    'sidebar' => $footerMenu,
                    'productList' => $productList,
                ]
            );
    }
}


