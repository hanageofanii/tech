<?php

namespace App\Filament\Resources\PelacakPelangganResource\Pages;

use App\Filament\Resources\PelacakPelangganResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPelacakPelanggans extends ListRecords
{
    protected static string $resource = PelacakPelangganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
