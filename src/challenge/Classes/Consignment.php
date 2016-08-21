<?php
/**
 * Consignment Class
 *
 * @author Michael Leah <m.leah@outlook.com>
 * @copyright Michael Leah, 2015
 */

namespace DocnetChallenge\Classes;

class Consignment
{
    /**
     * @var integer $uuid
     */
    protected $uuid;

    /**
     * @var CourierAbstract $courier
     */
    protected $courier;

    /**
     * @var String
     */
    protected $item;

    public function __construct($courierName, $item)
    {
        try {
            $courier = \DocnetChallenge\Factories\CourierFactory::build($courierName);
        } catch (\Exception $e) {
            throw $e; // Raise the exception
        }

        // BUild up the courier details
        $this->uuid    = $courier->generateNumber();
        $this->courier = $courier;
        $this->item    = $item;
    }

    /**
     * Returns this Consignments Courier Name
     * @return String
     */
    public function getCourierName()
    {
        return $this->courier->getName();
    }
}