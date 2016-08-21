<?php
/**
 * Courier Algorithm Interface
 *
 * @author Michael Leah <m.leah@outlook.com>
 * @copyright Michael Leah, 2015
 */

namespace DocnetChallenge\Interfaces;

interface CourierAlgorithmInterface
{
    /**
     * Generates a consignment number using a courier algorithm
     * @return integer
     */
    public function generateNumber();
}
