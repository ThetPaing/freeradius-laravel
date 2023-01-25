<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RadGroupCheckResource\Pages;
use App\Filament\Resources\RadGroupCheckResource\RelationManagers;
use App\Models\RadGroupCheck;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RadGroupCheckResource extends Resource
{
    protected static ?string $model = RadGroupCheck::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('groupname')
                    ->required()
                    ->maxLength(64),
                Forms\Components\TextInput::make('attribute')
                    ->required()
                    ->maxLength(64),
                Forms\Components\Select::make('op')
                ->options([
                    ':=' => ':=',
                    '=' => '=',
                    '==' => '==',
                    '+=' => '+=',
                    '!=' => '!=',
                    '>' => '>',
                    '>=' => '>=',
                    '<' => '<',
                    '<=' => '<=',
                    '=~' => '=~',
                    '!~' => '!~',
                    '=*' => '=*',
                    '!*' => '!*',
                ])
                
                ->required(),
                Forms\Components\TextInput::make('value')
                    ->required()
                    ->maxLength(253),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('groupname'),
                Tables\Columns\TextColumn::make('attribute'),
                Tables\Columns\TextColumn::make('op'),
                Tables\Columns\TextColumn::make('value'),
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
            'index' => Pages\ListRadGroupChecks::route('/'),
            'create' => Pages\CreateRadGroupCheck::route('/create'),
            'edit' => Pages\EditRadGroupCheck::route('/{record}/edit'),
        ];
    }    
}
