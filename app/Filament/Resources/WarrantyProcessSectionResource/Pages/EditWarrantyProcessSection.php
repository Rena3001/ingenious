<?php

namespace App\Filament\Resources\WarrantyProcessSectionResource\Pages;

use App\Filament\Resources\WarrantyProcessSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWarrantyProcessSection extends EditRecord
{
    protected static string $resource = WarrantyProcessSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
