<?php
/*              AUTOGENERATED CODE - DO NOT EDIT !
This base class was generated by the Dat0r library (https://github.com/berlinonline/Dat0r) 
on 2013-05-11 00:41:36 and is closed to modifications by any meaning.
If you are looking for a place to alter the behaviour of 'PluginResult' documents,
then the 'PluginResultDocument' (skeleton) class probally might be a good place to look. */

namespace Honeybee\Domain\Track\Base;

/**
 * Serves as the base class to the 'PluginResult' document skeleton.
 */
abstract class PluginResultDocument extends \Dat0r\Core\Runtime\Document\Document
{ 
    /**
     * Returns an 'PluginResult' document's state.
     *
     * @return int
     */
    public function getState()
    {
        return $this->getValue('state');
    }

    /**
     * Sets an 'PluginResult' document's state.
     *
     * @param int $state
     */
    public function setState($state)
    {
        $this->setValue('state', $state);
    }

    /**
     * Returns an 'PluginResult' document's gate.
     *
     * @return string
     */
    public function getGate()
    {
        return $this->getValue('gate');
    }

    /**
     * Sets an 'PluginResult' document's gate.
     *
     * @param string $gate
     */
    public function setGate($gate)
    {
        $this->setValue('gate', $gate);
    }

    /**
     * Returns an 'PluginResult' document's message.
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->getValue('message');
    }

    /**
     * Sets an 'PluginResult' document's message.
     *
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->setValue('message', $message);
    }
}
