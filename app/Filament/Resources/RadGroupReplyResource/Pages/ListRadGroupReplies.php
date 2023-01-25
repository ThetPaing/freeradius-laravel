<?php

namespace App\Filament\Resources\RadGroupReplyResource\Pages;

use App\Filament\Resources\RadGroupReplyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRadGroupReplies extends ListRecords
{
    protected static string $resource = RadGroupReplyResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
