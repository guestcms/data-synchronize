<?php

namespace GuestcmsDataSynchronize\Table\HeaderActions;

use GuestcmsTable\HeaderActions\HeaderAction;

class ImportHeaderAction extends HeaderAction
{
    public static function make(string $name = 'import'): static
    {
        return parent::make($name)
            ->label(trans('packages/data-synchronize::data-synchronize.import.name'))
            ->icon('ti ti-file-import');
    }
}
