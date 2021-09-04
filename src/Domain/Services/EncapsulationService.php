<?php


namespace Ro\DtoPhp\Domain\Services;


use Ro\DtoPhp\Domain\Contracts\Encapsulation\EncapsulationRepository;

class EncapsulationService implements EncapsulationRepository
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function get(string $property = null)
    {
        return $this->data;
    }

    public function set(array $encapsulate_info = null)
    {
        return $this->data;
    }


}
