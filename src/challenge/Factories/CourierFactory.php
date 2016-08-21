<?php
/**
 * CourierFactory Class
 *
 * Used for Courier Object creation to hide unnecessary details
 *
 * @author Michael Leah <m.leah@outlook.com>
 * @copyright Michael Leah, 2015
 */

namespace DocnetChallenge\Factories;

class CourierFactory
{
    const CONSTRUCT_PARAMETER_SUFFIXES = ['', 'Algorithm', 'DataTransport'];
    const VALID_NAMESPACES = [
        '\\DocnetChallenge\\Classes\\Couriers\\RoyalMail\\'
    ];

    /**
     * Builds a Courier instance based on the Courier Name provided.
     *
     * @param String $name
     * @return mixed
     * @throws \Exception
     */
    public static function build($name)
    {
        $algorithm     = $name . 'Algorithm';
        $dataTransport = $name . 'DataTransport';

        foreach (self::CONSTRUCT_PARAMETER_SUFFIXES as $parameter) {
            $isValid = false;

            foreach (self::VALID_NAMESPACES as $namespace) {
                $class = $namespace . $name . $parameter;
                if (class_exists($class)) {
                    $validNamespace = $namespace;
                    $isValid = true;
                    break;
                }
            }

            if ($isValid === false) {
                throw new \Exception('Missing ' . $class . ' class for Courier Object creation');
            }
        }

        $class     = $validNamespace . $name;
        $algorithm = $validNamespace . $algorithm;
        $dataTransport = $validNamespace . $dataTransport;

        return new $class(new $algorithm, new $dataTransport);
    }
}
