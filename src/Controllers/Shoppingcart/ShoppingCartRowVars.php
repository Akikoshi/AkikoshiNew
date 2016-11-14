<?php
/**
 * Created by PhpStorm.
 * User: trentschc
 * Date: 07.11.2016
 * Time: 13:42
 */

namespace Class152\PizzaMamamia\Controllers\Shoppingcart;


use Class152\PizzaMamamia\AbstractClasses\AbstractValidator;

class ShoppingCartRowVars extends AbstractValidator
{
    /** @var  string */
    protected $action;
    
    /** @var  int */
    protected $id;
    
    /**
    * ShoppingCartRowVars constructor.
    * @param array $postVars
    */
    public function __construct(array $postVars)
    {
        parent::__construct(
            $postVars,
            ['action','id']
        );
        
        $this->errorIfEmpty(
            'action',
            'Es ist ein Fehler beim absenden entstanden. Bitte versuchen Sie es erneut!'
        );
        
        $this->errorIfEmpty(
            'id',
            'Diese ID ist im System nicht vorhanden! Bitte versuchen Sie es erneut!'
        );

        $this->errorIfValueNotInArray(
            'action',
            ['dec', 'del', 'inc'],
            'Hier ist etwas schief gelaufen! Bitte versuchen Sie es erneut!'
        );
    }

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
}