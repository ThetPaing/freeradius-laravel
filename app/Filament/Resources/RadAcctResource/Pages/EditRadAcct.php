<?php

namespace App\Filament\Resources\RadAcctResource\Pages;

use App\Filament\Resources\RadAcctResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRadAcct extends EditRecord
{
    protected static string $resource = RadAcctResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
