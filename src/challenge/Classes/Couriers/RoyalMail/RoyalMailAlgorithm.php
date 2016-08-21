<?php
/**
 * Royal Mail Algorithm Class
 *
 * @author Michael Leah <m.leah@outlook.com>
 * @copyright Michael Leah, 2015
 */

namespace DocnetChallenge\Classes\Couriers\RoyalMail;

class RoyalMailAlgorithm implements \DocnetChallenge\Interfaces\CourierAlgorithmInterface
{
    public function generateNumber()
    {
        return uniqid();
    }
}