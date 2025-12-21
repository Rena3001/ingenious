<?php

namespace App\Filament\Resources\ProductShowcaseResource\Pages;

use App\Filament\Resources\ProductShowcaseResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductShowcase extends EditRecord
{
    protected static string $resource = ProductShowcaseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
