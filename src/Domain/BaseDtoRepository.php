<?php


namespace Ro\DtoPhp\Domain;

use Ro\DtoPhp\Domain\Contracts\DTO\DtoRepository;

class BaseDtoRepository implements DtoRepository
{
    protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function getDto(): array
    {
        return $this->data;
    }
}
