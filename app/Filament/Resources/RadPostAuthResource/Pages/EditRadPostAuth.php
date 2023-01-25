<?php

namespace App\Filament\Resources\RadPostAuthResource\Pages;

use App\Filament\Resources\RadPostAuthResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRadPostAuth extends EditRecord
{
    protected static string $resource = RadPostAuthResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
