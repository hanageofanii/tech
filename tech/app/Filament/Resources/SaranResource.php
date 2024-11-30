<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SaranResource\Pages;
use App\Filament\Resources\SaranResource\RelationManagers;
use App\Models\Saran;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SaranResource extends Resource
{
    protected static ?string $model = Saran::class;

    protected static ?string $navigationLabel = 'Saran';

    protected static ?string $pluralLabel = 'Saran';

    protected static ?string $navigationGroup = 'Extra'; 
    
    protected static ?string $navigationIcon = 'heroicon-o-inbox';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->label('Nama'),
                Forms\Components\TextInput::make('saran')
                    ->label('Saran'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->label('Nama')->searchable(),
                Tables\Columns\TextColumn::make('saran')->label('Saran')->searchable(),
                // Tables\Columns\TextColumn::make('created_at')
                // ->dateTime('Y-m-d H:i:s')
                // ->searchable()
                // ->sortable(),
                // Tables\Columns\TextColumn::make('updated_at')
                // ->dateTime('Y-m-d H:i:s')
                // ->searchable()
                // ->sortable(),
                // Tables\Columns\TextColumn::make('deleted_at')    
                // ->dateTime('Y-m-d H:i:s')
                // ->searchable()    
                // ->sortable(),
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
            'index' => Pages\ListSarans::route('/'),
            'create' => Pages\CreateSaran::route('/create'),
            // 'edit' => Pages\EditSaran::route('/{record}/edit'),
        ];
    }
}
