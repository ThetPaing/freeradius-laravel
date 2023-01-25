<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RadUserGroupResource\Pages;
use App\Filament\Resources\RadUserGroupResource\RelationManagers;
use App\Models\RadUserGroup;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\User;
use App\Models\RadGroupReply;
use App\Models\RadGroupCheck;

class RadUserGroupResource extends Resource
{
    protected static ?string $model = RadUserGroup::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        
        return $form
            ->schema([
                Forms\Components\Select::make('username')
                    ->required()
                    ->options(User::all()->pluck('name', 'email')),
                Forms\Components\Select::make('groupname')
                    ->required()
                    ->options(RadGroupReply::all()->pluck('groupname', 'groupname')->merge(RadGroupCheck::all()->pluck('groupname', 'groupname'))),
                Forms\Components\TextInput::make('priority')
                    ->numeric()
                    ->default('1')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('username'),
                Tables\Columns\TextColumn::make('groupname'),
                Tables\Columns\TextColumn::make('priority'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRadUserGroups::route('/'),
            'create' => Pages\CreateRadUserGroup::route('/create'),
            'edit' => Pages\EditRadUserGroup::route('/{record}/edit'),
        ];
    }    
}
