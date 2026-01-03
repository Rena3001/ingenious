<?php

namespace App\Filament\Resources\WarrantyMainSliderResource\Pages;

use App\Filament\Resources\WarrantyMainSliderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWarrantyMainSliders extends ListRecords
{
    protected static string $resource = WarrantyMainSliderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
