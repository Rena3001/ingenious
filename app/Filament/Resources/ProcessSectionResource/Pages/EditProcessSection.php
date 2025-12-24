<?php

namespace App\Filament\Resources\ProcessSectionResource\Pages;

use App\Filament\Resources\ProcessSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProcessSection extends EditRecord
{
    protected static string $resource = ProcessSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
