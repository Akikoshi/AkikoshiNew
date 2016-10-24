<?php
/**
 * Created by PhpStorm.
 * User: vieteo
 * Date: 24.10.2016
 * Time: 10:14
 */

namespace Class152\PizzaMamamia\Services\ProductListService\Library;


class ProductVariantsFactory
{
    /** @var  string */
    private $parentId;
    
    /** @var  array */
    private $variantsArray;
    
    public function __construct(string $parentId)
    {
        $this->parentId = $parentId;
    }
    
    private function createProductVariants()
    {
        
    }
}