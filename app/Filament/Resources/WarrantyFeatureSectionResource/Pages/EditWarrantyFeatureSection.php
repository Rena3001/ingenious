<?php

namespace App\Filament\Resources\WarrantyFeatureSectionResource\Pages;

use App\Filament\Resources\WarrantyFeatureSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWarrantyFeatureSection extends EditRecord
{
    protected static string $resource = WarrantyFeatureSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
