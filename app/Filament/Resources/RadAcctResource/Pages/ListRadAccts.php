<?php

namespace App\Filament\Resources\RadAcctResource\Pages;

use App\Filament\Resources\RadAcctResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRadAccts extends ListRecords
{
    protected static string $resource = RadAcctResource::class;

    protected function getActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
