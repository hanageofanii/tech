<?php

namespace App\Filament\Resources\PelacakPelangganResource\Pages;

use App\Filament\Resources\PelacakPelangganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPelacakPelanggan extends EditRecord
{
    protected static string $resource = PelacakPelangganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
