<?php

namespace App\Filament\Resources\InstallationServiceResource\Pages;

use App\Filament\Resources\InstallationServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInstallationServices extends ListRecords
{
    protected static string $resource = InstallationServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
