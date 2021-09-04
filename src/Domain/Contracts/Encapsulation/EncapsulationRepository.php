<?php


namespace Ro\DtoPhp\Domain\Contracts\Encapsulation;


interface EncapsulationRepository
{
    /**
     * Gets the property if it exists .RO*
     * @param string|null $property name of the property to be search it.
     */
    public function get(string $property = null);

    /**
     * Sets new property .RO*
     * @param array|null $encapsulate_info
     */
    public function set(array $encapsulate_info = null);
}
