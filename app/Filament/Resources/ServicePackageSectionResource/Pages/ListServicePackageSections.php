<?php

namespace App\Filament\Resources\ServicePackageSectionResource\Pages;

use App\Filament\Resources\ServicePackageSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServicePackageSections extends ListRecords
{
    protected static string $resource = ServicePackageSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
