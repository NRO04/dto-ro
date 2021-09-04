<?php


namespace Ro\DtoPhp\Infrastructure;


use Ro\DtoPhp\Domain\Contracts\DTO\DtoFactoryRepository;
use Ro\DtoPhp\Domain\Contracts\Encapsulation\EncapsulationRepository;
use Ro\DtoPhp\Domain\Services\EncapsulationService;

class DTO implements EncapsulationRepository
{
    protected $mapper;

    public function __construct(DtoFactoryRepository $mapper)
    {
        $this->mapper = $mapper;
    }
    /**
     * Extract DTO generated .RO*
     * @return array values from DTO.
     */
    public function extractDto(): array
    {
        return $this->mapper->generateDto()->getDto();
    }

    public function get(string $property = null)
    {
        return $this->mapper->generateEncapsulation(new EncapsulationService($property), 'get');
    }

    public function set(array $encapsulate_info = null)
    {
        $this->mapper->generateEncapsulation(new EncapsulationService($encapsulate_info), 'set');
    }

    /**
     * @param DtoFactoryRepository $mapper
     */
    public function setMapper(DtoFactoryRepository $mapper): void
    {
        $this->mapper = $mapper;
    }

}
