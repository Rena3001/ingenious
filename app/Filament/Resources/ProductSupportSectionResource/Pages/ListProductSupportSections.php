<?php

namespace App\Filament\Resources\ProductSupportSectionResource\Pages;

use App\Filament\Resources\ProductSupportSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProductSupportSections extends ListRecords
{
    protected static string $resource = ProductSupportSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
