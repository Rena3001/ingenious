<?php

namespace App\Filament\Resources\ProductShowcaseResource\Pages;

use App\Filament\Resources\ProductShowcaseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProductShowcases extends ListRecords
{
    protected static string $resource = ProductShowcaseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
