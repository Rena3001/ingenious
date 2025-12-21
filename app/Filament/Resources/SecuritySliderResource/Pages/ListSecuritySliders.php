<?php

namespace App\Filament\Resources\SecuritySliderResource\Pages;

use App\Filament\Resources\SecuritySliderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSecuritySliders extends ListRecords
{
    protected static string $resource = SecuritySliderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
