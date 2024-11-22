<?php

namespace App\Filament\Resources\DataLayananPelangganResource\Pages;

use App\Filament\Resources\DataLayananPelangganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDataLayananPelanggan extends EditRecord
{
    protected static string $resource = DataLayananPelangganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
