<?php

namespace App\Filament\Resources\AppProductSectionResource\Pages;

use App\Filament\Resources\AppProductSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAppProductSection extends EditRecord
{
    protected static string $resource = AppProductSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
