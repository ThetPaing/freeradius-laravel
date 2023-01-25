<?php

namespace App\Filament\Resources\RadGroupCheckResource\Pages;

use App\Filament\Resources\RadGroupCheckResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRadGroupChecks extends ListRecords
{
    protected static string $resource = RadGroupCheckResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
