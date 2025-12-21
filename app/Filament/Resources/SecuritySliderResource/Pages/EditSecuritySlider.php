<?php

namespace App\Filament\Resources\SecuritySliderResource\Pages;

use App\Filament\Resources\SecuritySliderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSecuritySlider extends EditRecord
{
    protected static string $resource = SecuritySliderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
