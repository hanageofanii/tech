<?php

namespace App\Filament\Resources\DataLayananPelangganResource\Pages;

use App\Filament\Resources\DataLayananPelangganResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDataLayananPelanggans extends ListRecords
{
    protected static string $resource = DataLayananPelangganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
