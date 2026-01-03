<?php

namespace App\Filament\Resources\WarrantyPortfolioSectionResource\Pages;

use App\Filament\Resources\WarrantyPortfolioSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWarrantyPortfolioSections extends ListRecords
{
    protected static string $resource = WarrantyPortfolioSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
