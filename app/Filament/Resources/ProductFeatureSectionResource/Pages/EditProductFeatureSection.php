<?php

namespace App\Filament\Resources\ProductFeatureSectionResource\Pages;

use App\Filament\Resources\ProductFeatureSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductFeatureSection extends EditRecord
{
    protected static string $resource = ProductFeatureSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
