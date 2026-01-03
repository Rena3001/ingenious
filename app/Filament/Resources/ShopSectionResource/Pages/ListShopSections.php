<?php

namespace App\Filament\Resources\ShopSectionResource\Pages;

use App\Filament\Resources\ShopSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListShopSections extends ListRecords
{
    protected static string $resource = ShopSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
