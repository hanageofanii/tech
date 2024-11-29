<?php
// namespace App\Filament\Resources;

// use App\Filament\Resources\PelacakPelangganResource\Pages;
// use App\Models\PelacakPelanggan;
// use Filament\Forms;
// use Filament\Forms\Form;
// use Filament\Resources\Resource;
// use Filament\Tables;
// use Filament\Tables\Table;
// use Filament\Tables\Columns\TextColumn;


// class PelacakPelangganResource extends Resource
// {
//     protected static ?string $model = PelacakPelanggan::class;
//     protected static ?string $navigationIcon = 'heroicon-o-map';
//     protected static ?string $navigationLabel = 'Pelacak Pelanggan';

//     protected static ?string $pluralLabel = 'Pelacak Pelanggan';


    // public static function form(Form $form): Form
    // {
    //     return $form
    //         ->schema([
    //             Forms\Components\Select::make('id')
    //                 ->label('User')
    //                 ->relationship('user', 'name')
    //                 ->required(),
    //             Forms\Components\Select::make('id_teknisi')
    //                 ->label('Nama Teknisi')
    //                 ->relationship('teknisi', 'nama')
    //                 ->required(),
    //             Forms\Components\Select::make('id_pelanggan')
    //                 ->label('Nama Pelanggan')
    //                 ->relationship('pelanggan', 'nama')
    //                 ->required(),
    //             Forms\Components\Select::make('id_jenis_layanan')
    //                 ->label('Jenis Layanan')
    //                 ->relationship('jenisLayanan', 'jenis_layanan')
    //                 ->required(),
    //             Forms\Components\TextInput::make('total_biaya')
    //                 ->label('Total Biaya')
    //                 ->numeric()
    //                 ->required(),
    //             Forms\Components\Select::make('status')
    //                 ->label('Status')
    //                 ->options([
    //                     'done' => 'Done',
    //                     'cancel' => 'Cancel',
    //                     'proses' => 'Proses',
    //                 ])
    //                 ->default('proses')
    //                 ->required(),
    //         ]);
    // }

    // public static function table(Table $table): Table
    // {
    //     return $table
    //         ->columns([
    //             Tables\Columns\TextColumn::make('id_pelacak_pelanggan')->label('ID'),
    //             Tables\Columns\TextColumn::make('user.name')->label('User'),
    //             Tables\Columns\TextColumn::make('teknisi.nama')->label('Teknisi'),
    //             Tables\Columns\TextColumn::make('pelanggan.nama')->label('Pelanggan'),
    //             Tables\Columns\TextColumn::make('total_biaya')->label('Total Biaya'),
    //             TextColumn::make('status')
    //             ->label('Status')
    //             ->formatStateUsing(function ($state) {
    //                 // Return plain text based on state
    //                 if ($state === 'done') {
    //                     return 'Done';
    //                 } elseif ($state === 'cancel') {
    //                     return 'Canceled';
    //                 } elseif ($state === 'proses') {
    //                     return 'In Progress';
    //                 }

    //                 return 'Unknown'; // Default case
    //             }),
    //         Tables\Columns\TextColumn::make('created_at')
    //             ->dateTime('Y-m-d H:i:s')
    //             ->searchable()
    //             ->sortable(),
    //         Tables\Columns\TextColumn::make('updated_at')
    //             ->dateTime('Y-m-d H:i:s')
    //             ->searchable()
    //             ->sortable(),
    //         Tables\Columns\TextColumn::make('deleted_at')    
    //             ->dateTime('Y-m-d H:i:s')
    //             ->searchable()    
    //             ->sortable(),
    //     ])
    //         ->filters([
    //             // Add filters here if needed
    //         ])
    //         ->actions([
    //             Tables\Actions\EditAction::make(),
    //             Tables\Actions\DeleteAction::make(),
    //             Tables\Actions\ViewAction::make(),
    //         ]);
    // }

//     public static function getPages(): array
//     {
//         return [
//             'index' => Pages\ListPelacakPelanggans::route('/'),
//             'create' => Pages\CreatePelacakPelanggan::route('/create'),
//             'edit' => Pages\EditPelacakPelanggan::route('/{record}/edit'),
//         ];
//     }
// }