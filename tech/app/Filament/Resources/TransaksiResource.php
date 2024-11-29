<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransaksiResource\Pages;
use App\Models\Transaksi;
use App\Models\Teknisi;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms\Components\TextInput;
use App\Models\JenisLayanan;
use App\Models\JenisProperti;
use App\Models\User;

class TransaksiResource extends Resource
{
    protected static ?string $model = Transaksi::class;

    protected static ?string $navigationLabel = 'Transaksi';

    protected static ?string $pluralLabel = 'Transaksi';


    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('nama')
                ->label('Nama')
                ->required(),

            Forms\Components\Select::make('id_teknisi')
                ->label('Nama Teknisi')
                ->options(Teknisi::all()->pluck('nama', 'id_teknisi'))
                ->required(),

            Forms\Components\Select::make('id_jenis_layanan')
                ->label('Jenis Layanan')
                ->options(JenisLayanan::all()->pluck('jenis_layanan', 'id_jenis_layanan'))
                ->required(),

            Forms\Components\Select::make('id_jenis_properti')
                ->label('Jenis Properti')
                ->options(JenisProperti::all()->pluck('jenis_properti', 'id_jenis_properti'))
                ->required(),

            // Forms\Components\TextInput::make('total_biaya')
            //     ->label('Total Biaya')
            //     ->numeric()
            //     ->required(),

            Forms\Components\Select::make('status')
                ->label('Status')
                ->options([
                    'progress' => 'Progress',
                    'cancel' => 'Cancel',
                    'done' => 'Done',
                ])
                ->required(),

            // Forms\Components\Select::make('id')
            //     ->label('User')
            //     ->options(User::all()->pluck('name', 'id'))
            //     ->required(),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('nama')
                ->label('Nama')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('jenisLayanan.jenis_layanan')
                ->label('Jenis Layanan')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('jenisProperti.jenis_properti')
                ->label('Jenis Properti')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('jenisLayanan.harga')
                ->label('Biaya')
                ->money('IDR')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('status')
                ->label('Status')
                ->sortable()
                ->searchable()
                ->getStateUsing(fn($record) => match($record->status) {
                    'progress' => 'Progress',
                    'cancel' => 'Cancel',
                    'done' => 'Done',
                }),

            Tables\Columns\TextColumn::make('teknisi.nama')
                ->label('Nama Teknisi')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('created_at')
                ->dateTime('Y-m-d H:i:s')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('updated_at')
                ->dateTime('Y-m-d H:i:s')
                ->sortable()
                ->searchable(),

            // Tables\Columns\TextColumn::make('deleted_at')
            //     ->dateTime('Y-m-d H:i:s')
            //     ->sortable()
            //     ->searchable(),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTransaksis::route('/'),
            'create' => Pages\CreateTransaksi::route('/create'),
            'edit' => Pages\EditTransaksi::route('/{record}/edit'),
        ];
    }
}