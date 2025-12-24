<?php

namespace App\Filament\Resources\HomeApplianceSlideResource\Pages;

use App\Filament\Resources\HomeApplianceSlideResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomeApplianceSlides extends ListRecords
{
    protected static string $resource = HomeApplianceSlideResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
