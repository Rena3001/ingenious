<?php

namespace App\Filament\Resources\InstallationStepResource\Pages;

use App\Filament\Resources\InstallationStepResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInstallationStep extends EditRecord
{
    protected static string $resource = InstallationStepResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
