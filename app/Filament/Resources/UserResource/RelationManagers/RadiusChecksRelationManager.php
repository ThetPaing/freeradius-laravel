<?php

namespace App\Filament\Resources\UserResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RadiusChecksRelationManager extends RelationManager
{
    protected static string $relationship = 'radius_checks';

    protected static ?string $recordTitleAttribute = 'username';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                
                Forms\Components\TextInput::make('attribute')
                ->required()
                ->maxLength(255),
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
                
                ->required()
                ,
                Forms\Components\TextInput::make('value')
                ->required()
                ->maxLength(255),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('username'),
                Tables\Columns\TextColumn::make('attribute'),
                Tables\Columns\TextColumn::make('op'),
                Tables\Columns\TextColumn::make('value'),
                
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }    
}
