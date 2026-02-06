<?php

namespace App\Filament\Resources\Home2ndSectionResource\Pages;

use App\Filament\Resources\Home2ndSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHome2ndSection extends EditRecord
{
    protected static string $resource = Home2ndSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
