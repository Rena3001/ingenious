<?php

namespace App\Filament\Resources\SecurityFeatureResource\Pages;

use App\Filament\Resources\SecurityFeatureResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSecurityFeatures extends ListRecords
{
    protected static string $resource = SecurityFeatureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
