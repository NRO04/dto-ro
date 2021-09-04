<?php


namespace Ro\DtoPhp\Domain\Contracts\DTO;


use Ro\DtoPhp\Domain\Contracts\Encapsulation\EncapsulationRepository;

interface DtoFactoryRepository extends EncapsulationRepository
{

    /**
     * Generate instance from @DtoRepository  .RO*
     * @return DtoRepository
     */
    public function generateDto(): DtoRepository;

    /**
     * Validate if the property exists .RO*
     * @param string $property name of the property to be validated.
     * @return boolean true if Exists.
     */
    public function validateProperty(string $property): bool;

    public function addProperty(array $encapsulate_info);

    /**
     * Generate new Encapsulation.RO*
     * @param EncapsulationRepository $encapsulation_repository
     * @param string $action get | set.
     * return: get fields encapsulated using get Method, otherwise set new properties using set method.
     */

    public function generateEncapsulation(EncapsulationRepository $encapsulation_repository, string $action);

    public function run();

}
