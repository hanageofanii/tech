<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PelangganResource\Pages\ListPelanggans;
use App\Filament\Resources\PelangganResource\Pages\CreatePelanggan;
use App\Filament\Resources\PelangganResource\Pages\EditPelanggan;
use App\Models\Pelanggan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PelangganResource extends Resource
{
    protected static ?string $model = Pelanggan::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationGroup = 'Extra';
    protected static ?string $navigationLabel = 'Pelanggan';

    protected static ?string $pluralLabel = 'Pelanggan';


    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('nama')->required(),
            Forms\Components\TextInput::make('email')->email()->required(),
            Forms\Components\TextInput::make('no_hp')->required(),
            Forms\Components\TextInput::make('alamat')->required(),
            
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->sortable()->searchable()->label('Nama'),
                Tables\Columns\TextColumn::make('email')->sortable()->searchable()->label('Email'),
                Tables\Columns\TextColumn::make('no_hp')->sortable()->searchable()->label('No. HP'),
                Tables\Columns\TextColumn::make('alamat')->sortable()->searchable()->label('Alamat'),
                // Tables\Columns\TextColumn::make('created_at')
                //     ->dateTime('Y-m-d H:i:s')
                //     ->sortable()
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('updated_at')
                //     ->dateTime('Y-m-d H:i:s')
                //     ->searchable()
                //     ->sortable(),
                // Tables\Columns\TextColumn::make('deleted_at')
                //     ->dateTime('Y-m-d H:i:s')
                //     ->searchable()
                //     ->sortable(),   
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPelanggans::route('/'),
            'create' => CreatePelanggan::route('/create'),
            // 'edit' => EditPelanggan::route('/{record}/edit'),
        ];
    }
}
