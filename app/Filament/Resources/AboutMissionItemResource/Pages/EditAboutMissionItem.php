<?php

namespace App\Filament\Resources\AboutMissionItemResource\Pages;

use App\Filament\Resources\AboutMissionItemResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutMissionItem extends EditRecord
{
    protected static string $resource = AboutMissionItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
