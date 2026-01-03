<?php

namespace App\Filament\Resources\InstallationSectionResource\Pages;

use App\Filament\Resources\InstallationSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInstallationSections extends ListRecords
{
    protected static string $resource = InstallationSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
