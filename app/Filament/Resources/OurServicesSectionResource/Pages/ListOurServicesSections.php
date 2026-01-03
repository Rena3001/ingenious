<?php

namespace App\Filament\Resources\OurServicesSectionResource\Pages;

use App\Filament\Resources\OurServicesSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOurServicesSections extends ListRecords
{
    protected static string $resource = OurServicesSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
