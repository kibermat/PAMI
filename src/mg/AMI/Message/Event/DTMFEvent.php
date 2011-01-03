<?php
namespace AMI\Message\Event;

use AMI\Message\Event\EventMessage;

class DTMFEvent extends EventMessage
{
    /**
     * Returns key: 'Privilege'.
     *
     * @return string
     */
    public function getPrivilege()
    {
        return $this->getKey('Privilege');
    }
    
    /**
     * Returns key: 'Channel'.
     *
     * @return string
     */
    public function getChannel()
    {
        return $this->getKey('Channel');
    }

    /**
     * Returns key: 'Digit'.
     *
     * @return string
     */
    public function getDigit()
    {
        return $this->getKey('Digit');
    }
    
    /**
     * Returns key: 'Direction'.
     *
     * @return string
     */
    public function getDirection()
    {
        return $this->getKey('Direction');
    }

    /**
     * Returns key: 'End'.
     *
     * @return string
     */
    public function getEnd()
    {
        return $this->getKey('End');
    }

    /**
     * Returns key: 'Begin'.
     *
     * @return string
     */
    public function getBegin()
    {
        return $this->getKey('Begin');
    }
    
    /**
     * Returns key: 'UniqueID'.
     *
     * @return string
     */
    public function getUniqueID()
    {
        return $this->getKey('UniqueID');
    }

    /**
     * Constructor.
     *
     * @param string $rawContent Literal message as received from ami.
     * 
     * @return void
     */
    public function __construct($rawContent)
    {
        parent::__construct($rawContent);
    }
}