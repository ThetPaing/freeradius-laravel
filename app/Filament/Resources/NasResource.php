<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NasResource\Pages;
use App\Filament\Resources\NasResource\RelationManagers;
use App\Models\Nas;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NasResource extends Resource
{
    protected static ?string $model = Nas::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Fieldset::make('Required')
            ->schema([
                Forms\Components\TextInput::make('nasname')
                    ->label('Server IP')
                    ->required(),
                    
                Forms\Components\TextInput::make('type')
                    ->default('other')
                    ->required(),
                Forms\Components\TextInput::make('ports')
                    ->default(0)
                    ->required(),
                    
                Forms\Components\TextInput::make('secret')
                    ->placeholder('Use a strong secret')
                    ->required(),
            ]),
         Forms\Components\Fieldset::make('Optional')
                ->schema([
                Forms\Components\TextInput::make('shortname'),
                
                 Forms\Components\TextInput::make('server'),
                
                 Forms\Components\TextInput::make('community'),
                
                 Forms\Components\TextInput::make('description')
                
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nasname')
                ->label('Server'),
                TextColumn::make('ports'),
                TextColumn::make('type'),
                TextColumn::make('secret'),
                
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
            'index' => Pages\ListNas::route('/'),
            'create' => Pages\CreateNas::route('/create'),
            'edit' => Pages\EditNas::route('/{record}/edit'),
        ];
    }    
}