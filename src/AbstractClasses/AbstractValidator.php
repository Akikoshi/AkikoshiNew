<?php
/**
 * Created by PhpStorm.
 * User: cbiedermann
 * Date: 03.11.2016
 * Time: 11:06
 */

namespace Class152\PizzaMamamia\AbstractClasses;


use Class152\PizzaMamamia\Exception\FormValidationFailedException;
use Class152\PizzaMamamia\Exception\ValidatorUsageFailException;

abstract class AbstractValidator
{
    /** @var array */
    private $expectedKeys;

    /** @var array */
    private $errors = [];

    /** @var bool */
    private $isSent = false;

    /** @var bool */
    private $isValid = true;

    /**
     * AbstractValidator constructor.
     * @param array $postVars
     * @param array $expectedKeys
     */
    protected function __construct(array $postVars, array $expectedKeys)
    {
        $this->expectedKeys = $expectedKeys;

        $found = 0;

        foreach ($expectedKeys as $postVarKey) {
            if (empty($postArray[$postVarKey])) {
                $this->$postVarKey = '';
            } else {
                $found++;
                $this->$postVarKey = $postArray[$postVarKey];
            }
        }

        if ($found == 0) {
            $this->isSent = false;
        } else {
            $this->isSent = true;
        }
    }

    /**
     * @return bool
     */
    public final function isSent() : bool
    {
        return $this->isSent;
    }

    /**
     * @return boolean
     */
    public final function isValid(): bool
    {
        return $this->isValid;
    }

    /**
     * @param string $keyName
     * @return bool
     * @throws ValidatorUsageFailException
     */
    public function hasThisFieldErrors(string $keyName) : bool
    {

        if (!in_array($keyName, $this->expectedKeys)) {
            throw new ValidatorUsageFailException(
                'Key ' . $keyName . ' not defined in expectedKeys'
            );
        }

        if (isset($this->errors[$keyName])) {
            return true;
        }

        return false;

    }

    /**
     * @param string $keyName
     * @return array
     * @throws ValidatorUsageFailException
     */
    public function readFieldErrors(string $keyName) : array
    {

        if (!in_array($keyName, $this->expectedKeys)) {
            throw new ValidatorUsageFailException(
                'Key ' . $keyName . ' not defined in expectedKeys'
            );
        }

        if (isset($this->errors[$keyName])) {
            return $this->errors[$keyName];
        }

        return [];

    }

    /**
     * @param string $keyName
     * @param string $customErrorString
     * @throws ValidatorUsageFailException
     */
    protected function errorIfEmpty(string $keyName, string $customErrorString = '')
    {
        if (!in_array($keyName, $this->expectedKeys)) {
            throw new ValidatorUsageFailException(
                'Key ' . $keyName . ' not defined in expectedKeys'
            );
        }

        if (empty($this->$keyName)) {
            $this->writeErrorEntry(
                $keyName,
                'Dieses Feld darf nicht leer sein.',
                $customErrorString
            );
        }
    }

    /**
     * @param string $keyName
     * @param string $defaultErrorMessage
     * @param string $customErrorMessage
     */
    private function writeErrorEntry(
        string $keyName,
        string $defaultErrorMessage,
        string $customErrorMessage = ''
    )
    {
        $this->isValid = false;

        if (!isset($this->errors[$keyName])) {
            $this->errors[$keyName] = [];
        }

        $this->errors[$keyName][] = (
        !empty($customErrorMessage)
            ? $customErrorMessage
            : $defaultErrorMessage
        );
    }

    /**
     * @param string $keyName
     * @param array $allowedValues
     * @param string $customErrorString
     * @throws ValidatorUsageFailException
     */
    protected function errorIfValueNotInArray(
        string $keyName,
        array $allowedValues,
        string $customErrorString = ''
    )
    {

        if (!in_array($keyName, $this->expectedKeys)) {
            throw new ValidatorUsageFailException(
                'Key ' . $keyName . ' not defined in expectedKeys'
            );
        }

        if (empty($allowedValues)) {
            throw new ValidatorUsageFailException(
                'allowedValues are empty'
            );
        }

        if (!in_array($this->$keyName, $this->expectedKeys)) {
            $this->writeErrorEntry(
                $keyName,
                'Dieses Feld ist nicht korrekt.',
                $customErrorString
            );
        }

    }

    /**
     * @param string $keyName
     * @param string $expectedValue
     * @param string $customErrorString
     * @throws ValidatorUsageFailException
     */
    protected function errorIfNotThisValue(
        string $keyName,
        string $expectedValue,
        string $customErrorString = ''
    )
    {

        if (!in_array($keyName, $this->expectedKeys)) {
            throw new ValidatorUsageFailException(
                'Key ' . $keyName . ' not defined in expectedKeys'
            );
        }

        if ($expectedValue == $this->$keyName) {
            $this->writeErrorEntry(
                $keyName,
                'Dieses Feld ist nicht korrekt.',
                $customErrorString
            );
        }

    }

    /**
     * @param string $keyName
     * @param string $customErrorString
     * @throws ValidatorUsageFailException
     */
    protected function errorIfNotBoolean(
        string $keyName,
        string $customErrorString = ''
    )
    {

        if (!in_array($keyName, $this->expectedKeys)) {
            throw new ValidatorUsageFailException(
                'Key ' . $keyName . ' not defined in expectedKeys'
            );
        }

        if (is_bool($this->$keyName)) {
            return;
        }

        $filter = filter_var(
            $this->$keyName,
            FILTER_VALIDATE_BOOLEAN,
            FILTER_NULL_ON_FAILURE
        );

        if (is_bool($filter)) {
            $this->$keyName = $filter;
            return;
        }

        $this->writeErrorEntry(
            $keyName,
            'Dieses Feld ist nicht korrekt.',
            $customErrorString
        );

    }

    /**
     * @param string $keyName
     * @param string $customErrorString
     * @throws ValidatorUsageFailException
     */
    protected function errorIfNotInteger(
        string $keyName,
        string $customErrorString = ''
    )
    {

        if (!in_array($keyName, $this->expectedKeys)) {
            throw new ValidatorUsageFailException(
                'Key ' . $keyName . ' not defined in expectedKeys'
            );
        }

        $integer = filter_var($this->$keyName, FILTER_VALIDATE_INT);

        if (false === $integer) {
            $this->writeErrorEntry(
                $keyName,
                'Dieses Feld muss eine Ganzzahl ohne Komma enthalten.',
                $customErrorString
            );
        }

        $this->$keyName = $integer;

    }

    /**
     * @param string $keyName
     * @param string $customErrorString
     * @throws ValidatorUsageFailException
     */
    protected function errorIfNotFloat(
        string $keyName,
        string $customErrorString = ''
    )
    {

        if (!in_array($keyName, $this->expectedKeys)) {
            throw new ValidatorUsageFailException(
                'Key ' . $keyName . ' not defined in expectedKeys'
            );
        }

        $float = filter_var($this->$keyName, FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_THOUSAND);

        if (false === $float) {
            $this->writeErrorEntry(
                $keyName,
                'Dieses Feld muss eine Fliesszahl enthalten.',
                $customErrorString
            );
        }

        $this->$keyName = $float;

    }

    /**
     * @throws FormValidationFailedException
     */
    protected function throwExceptionWhenErrors()
    {
        if (!empty($this->errors)) {
            $exception = new FormValidationFailedException();
            throw $exception;
        }
    }

}