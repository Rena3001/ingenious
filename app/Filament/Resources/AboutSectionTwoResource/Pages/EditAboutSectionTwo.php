<?php

namespace App\Filament\Resources\AboutSectionTwoResource\Pages;

use App\Filament\Resources\AboutSectionTwoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutSectionTwo extends EditRecord
{
    protected static string $resource = AboutSectionTwoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
