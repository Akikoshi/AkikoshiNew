<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 07.09.2016
 * Time: 11:36
 */

namespace Class152\PizzaMamamia\Controllers\Productdetails;


use Class152\PizzaMamamia\AbstractClasses\AbstractController;
use Class152\PizzaMamamia\Library\TwigRendering;
use Class152\PizzaMamamia\Services\MenuService\MenuService;
use Class152\PizzaMamamia\Services\ProductDetailService\ProductDetailService;

class Controller extends AbstractController
{
    public function indexAction()
    {
        $menuService = new MenuService($this->request);
        $mainMenu = $menuService->getMainMenu();
        $accountMenu = $menuService->getAccountMenu();
        $footerMenu = $menuService->getFooterMenu();
        $breadcrumbMenu = $menuService->getBreadcrumbMenu();

        $productId = $this->request->getFirstAdditionalVar();

        $productDetailService = new ProductDetailService( (INT)$productId );
        $productDetail = $productDetailService->getProductById( (INT)$productId );

        new TwigRendering(
            'Productdetails/index.twig',
            [
                'controllerName'=>'Productdetails',
                'actionName' => 'index',
                'mainMenu' => $mainMenu,
                'footerMenu' => $footerMenu,
                'accountMenu' => $accountMenu,
                'breadcrumbMenu' => $breadcrumbMenu,
                'productDetail' => $productDetail,
            ]
        );
    }
}