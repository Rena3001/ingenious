<?php

namespace App\Filament\Resources\TechnicalServicesSliderResource\Pages;

use App\Filament\Resources\TechnicalServicesSliderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTechnicalServicesSliders extends ListRecords
{
    protected static string $resource = TechnicalServicesSliderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
