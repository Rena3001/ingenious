<?php

namespace App\Filament\Resources\ProductVideoSectionsResource\Pages;

use App\Filament\Resources\ProductVideoSectionsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProductVideoSections extends ListRecords
{
    protected static string $resource = ProductVideoSectionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
