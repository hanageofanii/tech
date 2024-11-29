<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JenisLayananResource\Pages;
use App\Filament\Resources\JenisLayananResource\RelationManagers;
use App\Models\JenisLayanan;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\NumberInput;
class JenisLayananResource extends Resource
{
    protected static ?string $model = JenisLayanan::class;

    protected static ?string $navigationLabel = 'Jenis Layanan';

    protected static ?string $pluralLabel = 'Jenis Layanan';
    protected static ?string $navigationGroup = 'Extra';

    protected static ?string $navigationIcon = 'heroicon-o-folder';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Hidden::make('id_jenis_layanan'),
                Forms\Components\TextInput::make('jenis_layanan')
                ->label('Jenis Layanan')
                ->required(),
                Forms\Components\TextInput::make('harga')
                ->label('Harga')
                ->required()
                ->minValue(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_jenis_layanan')->sortable(),
                Tables\Columns\TextColumn::make('jenis_layanan')->label('Jenis Layanan'),
                Tables\Columns\TextColumn::make('harga')->sortable(),
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime('Y-m-d H:i:s')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('updated_at')
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
            'index' => Pages\ListJenisLayanans::route('/'),
            'create' => Pages\CreateJenisLayanan::route('/create'),
            'edit' => Pages\EditJenisLayanan::route('/{record}/edit'),
        ];
    }
}
