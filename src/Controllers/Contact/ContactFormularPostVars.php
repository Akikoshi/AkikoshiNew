<?php
/**
 * Created by PhpStorm.
 * User: cbiedermann
 * Date: 03.11.2016
 * Time: 09:32
 */

namespace Class152\PizzaMamamia\Controllers\Contact;


use Class152\PizzaMamamia\AbstractClasses\AbstractValidator;

class ContactFormularPostVars extends AbstractValidator
{
    /** @var bool */
    protected $isSent;

    /** @var bool */
    protected $isValid;

    /** @var string */
    protected $department;

    /** @var string */
    protected $name;

    /** @var string */
    protected $email;

    /** @var string */
    protected $message;

    /** @var string */
    protected $hidden;

    /**
     * ContactFormularPostVars constructor.
     * @param array $postVars
     */
    public function __construct(array $postVars)
    {

        parent::__construct(
            $postVars,
            ['department', 'name', 'email', 'message', 'hidden']
        );

        $this->errorIfEmpty(
            'department',
            'An welche Abteilung wollen Sie die Message senden'
        );

        $this->errorIfEmpty(
            'name',
            'Bitte geben Sie Ihren Namen ein'
        );

        $this->errorIfNotThisValue(
            'department',
            'keine',
            'An welche Abteilung wollen Sie die Message senden'
        );

        $this->errorIfValueNotInArray(
            'department',
            ['chef', 'account'],
            'Bitte geben Sie die Abteilung an'
        );

        // $this->throwExceptionWhenErrors();

    }

    /**
     * @return string
     */
    public function getDepartment(): string
    {
        return $this->department;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return string
     */
    public function getHidden(): string
    {
        return $this->hidden;
    }

}
