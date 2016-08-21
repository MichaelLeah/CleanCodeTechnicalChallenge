<?php
/**
* RoyalMail Courier Class
*
* @author Michael Leah <m.leah@outlook.com>
* @copyright Michael Leah, 2015
*/

namespace DocnetChallenge\Classes\Couriers\RoyalMail;

class RoyalMail extends \DocnetChallenge\Abstracts\CourierAbstract
{
    /**
     * Returns Courier Name
     * @return String
     */
    public function getName()
    {
        return 'Royal Mail';
    }
}