<?php

namespace Proxies\__CG__\PaBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PaVoteCast extends \PaBundle\Entity\PaVoteCast implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'PaBundle\\Entity\\PaVoteCast' . "\0" . 'id', '' . "\0" . 'PaBundle\\Entity\\PaVoteCast' . "\0" . 'figureValue', '' . "\0" . 'PaBundle\\Entity\\PaVoteCast' . "\0" . 'wordValue', '' . "\0" . 'PaBundle\\Entity\\PaVoteCast' . "\0" . 'edited', '' . "\0" . 'PaBundle\\Entity\\PaVoteCast' . "\0" . 'pollingStation', '' . "\0" . 'PaBundle\\Entity\\PaVoteCast' . "\0" . 'paCandidate'];
        }

        return ['__isInitialized__', '' . "\0" . 'PaBundle\\Entity\\PaVoteCast' . "\0" . 'id', '' . "\0" . 'PaBundle\\Entity\\PaVoteCast' . "\0" . 'figureValue', '' . "\0" . 'PaBundle\\Entity\\PaVoteCast' . "\0" . 'wordValue', '' . "\0" . 'PaBundle\\Entity\\PaVoteCast' . "\0" . 'edited', '' . "\0" . 'PaBundle\\Entity\\PaVoteCast' . "\0" . 'pollingStation', '' . "\0" . 'PaBundle\\Entity\\PaVoteCast' . "\0" . 'paCandidate'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PaVoteCast $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setFigureValue($figureValue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFigureValue', [$figureValue]);

        return parent::setFigureValue($figureValue);
    }

    /**
     * {@inheritDoc}
     */
    public function getFigureValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFigureValue', []);

        return parent::getFigureValue();
    }

    /**
     * {@inheritDoc}
     */
    public function setWordValue($wordValue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWordValue', [$wordValue]);

        return parent::setWordValue($wordValue);
    }

    /**
     * {@inheritDoc}
     */
    public function getWordValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWordValue', []);

        return parent::getWordValue();
    }

    /**
     * {@inheritDoc}
     */
    public function setEdited($edited)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEdited', [$edited]);

        return parent::setEdited($edited);
    }

    /**
     * {@inheritDoc}
     */
    public function getEdited()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEdited', []);

        return parent::getEdited();
    }

    /**
     * {@inheritDoc}
     */
    public function setPollingStation(\VtallyBundle\Entity\PollingStation $pollingStation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPollingStation', [$pollingStation]);

        return parent::setPollingStation($pollingStation);
    }

    /**
     * {@inheritDoc}
     */
    public function getPollingStation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPollingStation', []);

        return parent::getPollingStation();
    }

    /**
     * {@inheritDoc}
     */
    public function setPaCandidate(\PaBundle\Entity\PaCandidate $paCandidate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPaCandidate', [$paCandidate]);

        return parent::setPaCandidate($paCandidate);
    }

    /**
     * {@inheritDoc}
     */
    public function getPaCandidate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPaCandidate', []);

        return parent::getPaCandidate();
    }

}
