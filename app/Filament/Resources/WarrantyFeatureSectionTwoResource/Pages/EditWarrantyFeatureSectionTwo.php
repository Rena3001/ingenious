<?php

namespace App\Filament\Resources\WarrantyFeatureSectionTwoResource\Pages;

use App\Filament\Resources\WarrantyFeatureSectionTwoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWarrantyFeatureSectionTwo extends EditRecord
{
    protected static string $resource = WarrantyFeatureSectionTwoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
