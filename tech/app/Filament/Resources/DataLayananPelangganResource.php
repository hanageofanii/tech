<?php

namespace App\Filament\Resources;

use App\Models\DataLayananPelanggan;
use App\Filament\Resources\DataLayananPelangganResource\Pages;
use App\Filament\Resources\DataLayananPelangganResource\RelationManagers;
use App\Models\DataLayanan;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Teknisi;
use Illuminate\Support\Facades\Auth;
use App\Models\JenisLayanan;
use App\Models\JenisProperti;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class DataLayananPelangganResource extends Resource
{
    protected static ?string $model = DataLayananPelanggan::class;

    protected static ?string $navigationLabel = 'Data Layanan';

    protected static ?string $pluralLabel = 'Data Layanan Pelanggan';
    protected static ?string $navigationIcon = 'heroicon-o-circle-stack';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            TextInput::make('nama')->required(),
            TextInput::make('email')->email()->required(),
            TextInput::make('no_hp')->required(),
            TextInput::make('alamat')->required(),
            Select::make('id_teknisi')
                ->label('Nama Teknisi')
                ->options(Teknisi::all()->pluck('nama', 'id_teknisi')->toArray())
                ->nullable(),
            Select::make('id_jenis_layanan')
                ->label('Jenis Layanan')
                ->options(JenisLayanan::all()->pluck('jenis_layanan', 'id_jenis_layanan')->toArray()),
            Select::make('id_jenis_properti')
                ->label('Jenis Properti')
                ->options(JenisProperti::all()->pluck('jenis_properti', 'id_jenis_properti')->toArray()),
            Forms\Components\DatePicker::make('tanggal')->required(),
            Forms\Components\TimePicker::make('waktu')->required(),
            Forms\Components\Textarea::make('notes'),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            // TextColumn::make('user.name')->label('Id User')->sortable()->searchable(),
            TextColumn::make('teknisi.nama')->label('Nama Teknisi')->sortable()->searchable(),
            TextColumn::make('nama')->sortable()->searchable(),
            TextColumn::make('email')->sortable()->searchable(),
            TextColumn::make('no_hp')->sortable()->searchable(),
            TextColumn::make('alamat')->sortable()->searchable(),
            TextColumn::make('jenisLayanan.jenis_layanan')->label('Jenis Layanan')->sortable()->searchable(),
            TextColumn::make('jenisProperti.jenis_properti')->label('Jenis Properti')->sortable()->searchable(),
            TextColumn::make('notes')->sortable()->searchable(),
            TextColumn::make('created_at')->dateTime('Y-m-d H:i:s')->searchable()->sortable(),
            TextColumn::make('updated_at')->dateTime('Y-m-d H:i:s')->searchable()->sortable(),
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
            'index' => Pages\ListDataLayananPelanggans::route('/'),
            'create' => Pages\CreateDataLayananPelanggan::route('/create'),
            'edit' => Pages\EditDataLayananPelanggan::route('/{record}/edit'),
        ];
    }
}
