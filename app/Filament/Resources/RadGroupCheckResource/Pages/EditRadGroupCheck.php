<?php

namespace App\Filament\Resources\RadGroupCheckResource\Pages;

use App\Filament\Resources\RadGroupCheckResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRadGroupCheck extends EditRecord
{
    protected static string $resource = RadGroupCheckResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
