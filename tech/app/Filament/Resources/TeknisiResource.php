<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeknisiResource\Pages;
use App\Filament\Resources\TeknisiResource\RelationManagers;
use App\Models\layanan_pelanggan;
use App\Models\Teknisi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TeknisiResource extends Resource
{
    protected static ?string $model = Teknisi::class;

    protected static ?string $navigationGroup = 'Extra';
    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'Teknisi';

    protected static ?string $pluralLabel = 'Teknisi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')->required(),
                Forms\Components\TextInput::make('email')->email()->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->sortable()->searchable()->label('Nama'),
                Tables\Columns\TextColumn::make('email')->sortable()->searchable()->label('Email'),
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
            'index' => Pages\ListTeknisis::route('/'),
            'create' => Pages\CreateTeknisi::route('/create'),
            // 'edit' => Pages\EditTeknisi::route('/{record}/edit'),
        ];
    }
}
