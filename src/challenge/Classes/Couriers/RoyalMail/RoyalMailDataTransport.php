<?php
/**
 * Royal Mail Data Transport Class
 *
 * @author Michael Leah <m.leah@outlook.com>
 * @copyright Michael Leah, 2015
 */

namespace DocnetChallenge\Classes\Couriers\RoyalMail;

class RoyalMailDataTransport implements \DocnetChallenge\Interfaces\CourierDataTransportInterface
{
    public function sendData($data)
    {
        return 'Data sent';
    }
}