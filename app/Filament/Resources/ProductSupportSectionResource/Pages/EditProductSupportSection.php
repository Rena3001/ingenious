<?php

namespace App\Filament\Resources\ProductSupportSectionResource\Pages;

use App\Filament\Resources\ProductSupportSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductSupportSection extends EditRecord
{
    protected static string $resource = ProductSupportSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
