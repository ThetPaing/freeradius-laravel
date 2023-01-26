<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RadPostAuthResource\Pages;
use App\Filament\Resources\RadPostAuthResource\RelationManagers;
use App\Models\RadPostAuth;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RadPostAuthResource extends Resource
{
    protected static ?string $model = RadPostAuth::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('username')
                    ->required()
                    ->maxLength(64),
                Forms\Components\TextInput::make('pass')
                    ->required()
                    ->maxLength(64),
                Forms\Components\TextInput::make('reply')
                    ->required()
                    ->maxLength(32),
                Forms\Components\DateTimePicker::make('authdate')
                    ->required(),
                Forms\Components\TextInput::make('class')
                    ->maxLength(64),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('username'),
                Tables\Columns\TextColumn::make('pass'),
                Tables\Columns\TextColumn::make('reply'),
                Tables\Columns\TextColumn::make('authdate')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('class'),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListRadPostAuths::route('/'),
            // 'create' => Pages\CreateRadPostAuth::route('/create'),
            // 'edit' => Pages\EditRadPostAuth::route('/{record}/edit'),
        ];
    }    
}
