<?php

namespace App\Filament\Resources\InstallationServiceResource\Pages;

use App\Filament\Resources\InstallationServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInstallationService extends EditRecord
{
    protected static string $resource = InstallationServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
