<?php
/**
 * Courier Data Transport Interface
 *
 * @author Michael Leah <m.leah@outlook.com>
 * @copyright Michael Leah, 2015
 */

namespace DocnetChallenge\Interfaces;

interface CourierDataTransportInterface
{
    /**
     * Sends an array of consigment numbers to the courier
     * @param String[] $data
     * @return boolean
     */
    public function sendData($data);
}