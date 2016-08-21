<?php
/**
 * Courier Abstract Class
 *
 * @author Michael Leah <m.leah@outlook.com>
 * @copyright Michael Leah, 2015
 */

namespace DocnetChallenge\Abstracts;

abstract class CourierAbstract
{
    /**
     * @var CourierAlgorithmInterface
     */
    protected $algorithm;

    /**
     * @var CourierDataTransportMethodInterface
     */
    protected $dataTransport;

    /**
     * CourierAbstract constructor.
     * @param \DocnetChallenge\Interfaces\CourierAlgorithmInterface $algorithm
     * @param \DocnetChallenge\Interfaces\CourierDataTransportInterface $dataTransport
     */
    public function __construct(
        \DocnetChallenge\Interfaces\CourierAlgorithmInterface $algorithm,
        \DocnetChallenge\Interfaces\CourierDataTransportInterface $dataTransport
    ) {
        $this->algorithm     = $algorithm;
        $this->dataTransport = $dataTransport;
    }

    /**
     * Generates the current active couriers UUID numbers
     * @return mixed
     */
    public function generateNumber()
    {
        return $this->algorithm->generateNumber();
    }

    /**
     * Sends the current active Couriers data
     * @return mixed
     */
    public function sendData()
    {
        return $this->dataTransport->sendData();
    }
}