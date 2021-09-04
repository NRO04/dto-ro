<?php

namespace Ro\DtoPhp\Domain\Services;

use Fory\Shared\Domain\BaseDtoRepository;
use Ro\DtoPhp\Domain\Contracts\DTO\DtoFactoryRepository;
use Ro\DtoPhp\Domain\Contracts\DTO\DtoRepository;
use Ro\DtoPhp\Domain\Contracts\Encapsulation\EncapsulationRepository;
use Ro\DtoPhp\Domain\Exceptions\PropertyNotFound;

class DtoMappingService implements DtoFactoryRepository
{
    protected $data = [];
    protected $values;

    public function __construct($values)
    {
        $this->run($values);
    }

    public function run($values = null)
    {
        foreach ($values as $property => $value) {
            $this->{$property} = $value;
            $this->data[$property] = $value;
        }
    }

    public function __call($property, $values)
    {
        return $this->{$property};
    }

    /**
     * @throws PropertyNotFound
     */
    public function get(string $property = null)
    {
        if (!$this->validateProperty($property)) {
            throw new PropertyNotFound("RO-DTO Exception: Property: $property doesn't exists, if you want create it, use set() method.... RO");
        }
        return $this->{$property};
    }

    public function set(array $encapsulate_info = null)
    {
        $key = array_keys($encapsulate_info)[0];
        $this->{$key} = $encapsulate_info[$key];
        $this->addProperty($encapsulate_info);
    }

    public function generateEncapsulation(EncapsulationRepository $encapsulation_repository, string $action)
    {
        return $this->$action($encapsulation_repository->$action());
    }

    public function addProperty(array $encapsulate_info)
    {

        $this->run($encapsulate_info);
//        $key = array_keys($encapsulate_info)[0];
//        $this->data[$key] = $encapsulate_info[$key];
    }

    public function generateDto(): DtoRepository
    {
        return new BaseDtoRepository($this->data);
    }

    public function validateProperty(string $property): bool
    {
        return property_exists($this, $property);
    }

}
