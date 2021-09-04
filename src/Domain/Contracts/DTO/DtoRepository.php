<?php


namespace Ro\DtoPhp\Domain\Contracts\DTO;

interface DtoRepository
{
    /**
     * Generate Data Transfer Object .RO*
     * @return array
     */
    public function getDto(): array;
}
