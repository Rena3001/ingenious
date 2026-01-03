<?php

namespace App\Filament\Resources\InstallationStepResource\Pages;

use App\Filament\Resources\InstallationStepResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInstallationSteps extends ListRecords
{
    protected static string $resource = InstallationStepResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
