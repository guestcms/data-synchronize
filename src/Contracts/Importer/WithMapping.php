<?php

namespace GuestcmsDataSynchronize\Contracts\Importer;

interface WithMapping
{
    public function map(mixed $row): array;
}
