<?php

namespace App\Filament\Resources\ConsumerElectronicsSliderResource\Pages;

use App\Filament\Resources\ConsumerElectronicsSliderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListConsumerElectronicsSliders extends ListRecords
{
    protected static string $resource = ConsumerElectronicsSliderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
