<?php

namespace App\Filament\Resources\ProductVideoItemsResource\Pages;

use App\Filament\Resources\ProductVideoItemsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProductVideoItems extends ListRecords
{
    protected static string $resource = ProductVideoItemsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
