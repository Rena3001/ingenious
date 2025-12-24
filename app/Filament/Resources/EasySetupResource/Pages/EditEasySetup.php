<?php

namespace App\Filament\Resources\EasySetupResource\Pages;

use App\Filament\Resources\EasySetupResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEasySetup extends EditRecord
{
    protected static string $resource = EasySetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
