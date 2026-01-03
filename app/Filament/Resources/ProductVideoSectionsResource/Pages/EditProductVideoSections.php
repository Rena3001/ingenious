<?php

namespace App\Filament\Resources\ProductVideoSectionsResource\Pages;

use App\Filament\Resources\ProductVideoSectionsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductVideoSections extends EditRecord
{
    protected static string $resource = ProductVideoSectionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
