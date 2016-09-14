<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 14.09.2016
 * Time: 14:10
 */

namespace Class152\PizzaMamamia\Services\ProductListService\Library;


class ProductListPaginator
{
    /*
     * es ist noch keine wirkliche Logik eingebaut, teils im Controller und in der Twig verdrahtet
     */
    private $productFactory;

    private $limit;
    
    private $total;

    private $output;

    public function __construct(int $limit)
    {
        $this->limit = $limit;
        $this->productFactory = new ProductListFactory();
        $this->total = count($this->productFactory->getProductList());
    }

    private function limitItems()
    {
        $counter = 0;
        for($i = $counter; $i < $this->total; $i++ )
        {
            for ($j = 0; $j < $this->limit; $j++)
            {
                $counter = $j;
            }
        }
    }

    public function getProductList()
    {
        return $this->output;
    }

    public function hasNext()
    {
        return true;
    }

    public function getNextUrl()
    {
        return '/productlist/index';
    }

    public function hasBefore()
    {
        return true;
    }

    public function getBeforeUrl()
    {
        return '/productlist/index';
    }

}