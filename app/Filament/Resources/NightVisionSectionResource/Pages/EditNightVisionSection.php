<?php

namespace App\Filament\Resources\NightVisionSectionResource\Pages;

use App\Filament\Resources\NightVisionSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNightVisionSection extends EditRecord
{
    protected static string $resource = NightVisionSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
