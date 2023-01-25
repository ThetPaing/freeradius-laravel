<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RadAcctResource\Pages;
use App\Filament\Resources\RadAcctResource\RelationManagers;
use App\Models\RadAcct;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RadAcctResource extends Resource
{
    protected static ?string $model = RadAcct::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('acctsessionid')
                    ->required()
                    ->maxLength(64),
                Forms\Components\TextInput::make('acctuniqueid')
                    ->required()
                    ->maxLength(32),
                Forms\Components\TextInput::make('username')
                    ->required()
                    ->maxLength(64),
                Forms\Components\TextInput::make('realm')
                    ->maxLength(64),
                Forms\Components\TextInput::make('nasipaddress')
                    ->required()
                    ->maxLength(15),
                Forms\Components\TextInput::make('nasportid')
                    ->maxLength(32),
                Forms\Components\TextInput::make('nasporttype')
                    ->maxLength(32),
                Forms\Components\DateTimePicker::make('acctstarttime'),
                Forms\Components\DateTimePicker::make('acctupdatetime'),
                Forms\Components\DateTimePicker::make('acctstoptime'),
                Forms\Components\TextInput::make('acctinterval'),
                Forms\Components\TextInput::make('acctsessiontime'),
                Forms\Components\TextInput::make('acctauthentic')
                    ->maxLength(32),
                Forms\Components\TextInput::make('connectinfo_start')
                    ->maxLength(128),
                Forms\Components\TextInput::make('connectinfo_stop')
                    ->maxLength(128),
                Forms\Components\TextInput::make('acctinputoctets'),
                Forms\Components\TextInput::make('acctoutputoctets'),
                Forms\Components\TextInput::make('calledstationid')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('callingstationid')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('acctterminatecause')
                    ->required()
                    ->maxLength(32),
                Forms\Components\TextInput::make('servicetype')
                    ->maxLength(32),
                Forms\Components\TextInput::make('framedprotocol')
                    ->maxLength(32),
                Forms\Components\TextInput::make('framedipaddress')
                    ->required()
                    ->maxLength(15),
                Forms\Components\TextInput::make('framedipv6address')
                    ->required()
                    ->maxLength(45),
                Forms\Components\TextInput::make('framedipv6prefix')
                    ->required()
                    ->maxLength(45),
                Forms\Components\TextInput::make('framedinterfaceid')
                    ->required()
                    ->maxLength(44),
                Forms\Components\TextInput::make('delegatedipv6prefix')
                    ->required()
                    ->maxLength(45),
                Forms\Components\TextInput::make('class')
                    ->maxLength(64),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('acctsessionid'),
                Tables\Columns\TextColumn::make('acctuniqueid'),
                Tables\Columns\TextColumn::make('username'),
                Tables\Columns\TextColumn::make('realm'),
                Tables\Columns\TextColumn::make('nasipaddress'),
                Tables\Columns\TextColumn::make('nasportid'),
                Tables\Columns\TextColumn::make('nasporttype'),
                Tables\Columns\TextColumn::make('acctstarttime')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('acctupdatetime')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('acctstoptime')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('acctinterval'),
                Tables\Columns\TextColumn::make('acctsessiontime'),
                Tables\Columns\TextColumn::make('acctauthentic'),
                Tables\Columns\TextColumn::make('connectinfo_start'),
                Tables\Columns\TextColumn::make('connectinfo_stop'),
                Tables\Columns\TextColumn::make('acctinputoctets'),
                Tables\Columns\TextColumn::make('acctoutputoctets'),
                Tables\Columns\TextColumn::make('calledstationid'),
                Tables\Columns\TextColumn::make('callingstationid'),
                Tables\Columns\TextColumn::make('acctterminatecause'),
                Tables\Columns\TextColumn::make('servicetype'),
                Tables\Columns\TextColumn::make('framedprotocol'),
                Tables\Columns\TextColumn::make('framedipaddress'),
                Tables\Columns\TextColumn::make('framedipv6address'),
                Tables\Columns\TextColumn::make('framedipv6prefix'),
                Tables\Columns\TextColumn::make('framedinterfaceid'),
                Tables\Columns\TextColumn::make('delegatedipv6prefix'),
                Tables\Columns\TextColumn::make('class'),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListRadAccts::route('/'),
            // 'create' => Pages\CreateRadAcct::route('/create'),
            // 'edit' => Pages\EditRadAcct::route('/{record}/edit'),
        ];
    }    
}
