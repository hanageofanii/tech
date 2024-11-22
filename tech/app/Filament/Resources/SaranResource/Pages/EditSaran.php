<?php

namespace App\Filament\Resources\SaranResource\Pages;

use App\Filament\Resources\SaranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSaran extends EditRecord
{
    protected static string $resource = SaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
