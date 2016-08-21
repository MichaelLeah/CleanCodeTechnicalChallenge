<?php
/**
 * Batch Class
 *
 * @author Michael Leah <m.leah@outlook.com>
 * @copyright Michael Leah, 2015
 */

namespace DocnetChallenge\Classes;

class Batch
{
    /**
     * @var DateTime $start
     */
    public $start;

    /**
     * @var DateTime $end
     */
    public $end;

    /**
     * @var array
     */
    public $consignments = [];

    /**
     * Starts a new dispatch period.
     * @return boolean
     */
    public function startDispatchPeriod()
    {
        $this->start = new \DateTime();
        return true;
    }

    /**
     * Add a consignment to the current batch
     * @param $consignment
     */
    public function addConsignment($consignment)
    {
        $this->consignments[$consignment->getCourierName()][] = $consignment;
    }

    /**
     * Ends the current dispatch period.
     * @return boolean
     */
    public function endDispatchPeriod()
    {
        $this->end = new \DateTime();
        return $this->sendDispatchData();
    }

    public function sendDispatchData()
    {
        // Loop through consignments.
        // Build up an array of order numbers for each courier, $royalMail[] = $consigment->uuid;
        // Call the sendData() method on the array for each courier if the courier matches?
        return true;
    }


}