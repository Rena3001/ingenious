<?php

namespace App\Filament\Resources\WarrantyMainSliderResource\Pages;

use App\Filament\Resources\WarrantyMainSliderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWarrantyMainSlider extends EditRecord
{
    protected static string $resource = WarrantyMainSliderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
