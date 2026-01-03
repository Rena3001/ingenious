<?php

namespace App\Filament\Resources\TechnicalIconsResource\Pages;

use App\Filament\Resources\TechnicalIconsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTechnicalIcons extends EditRecord
{
    protected static string $resource = TechnicalIconsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
