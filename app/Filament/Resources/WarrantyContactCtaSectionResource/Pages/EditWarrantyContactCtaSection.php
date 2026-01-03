<?php

namespace App\Filament\Resources\WarrantyContactCtaSectionResource\Pages;

use App\Filament\Resources\WarrantyContactCtaSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWarrantyContactCtaSection extends EditRecord
{
    protected static string $resource = WarrantyContactCtaSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
