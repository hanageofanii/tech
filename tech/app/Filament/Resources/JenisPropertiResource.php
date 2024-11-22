<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JenisPropertiResource\Pages;
use App\Filament\Resources\JenisPropertiResource\RelationManagers;
use App\Models\JenisProperti;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JenisPropertiResource extends Resource
{
    protected static ?string $model = JenisProperti::class;

    protected static ?string $navigationLabel = 'Jenis Properti';
    protected static ?string $navigationGroup = 'Extra';
    protected static ?string $navigationIcon = 'heroicon-o-building-library';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('jenis_properti')
                ->label('Jenis Properti')
                ->required(),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('jenis_properti')->label('Jenis Properti'),
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime('Y-m-d H:i:s')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('updated_at')
                ->dateTime('Y-m-d H:i:s')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('deleted_at')    
                ->dateTime('Y-m-d H:i:s')
                ->searchable()    
                ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListJenisPropertis::route('/'),
            'create' => Pages\CreateJenisProperti::route('/create'),
            'edit' => Pages\EditJenisProperti::route('/{record}/edit'),
        ];
    }
}
