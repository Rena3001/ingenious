<?php

namespace App\Filament\Resources\MainAboutPageResource\Pages;

use App\Filament\Resources\MainAboutPageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMainAboutPage extends EditRecord
{
    protected static string $resource = MainAboutPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
