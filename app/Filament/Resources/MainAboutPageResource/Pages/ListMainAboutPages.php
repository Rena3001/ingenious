<?php

namespace App\Filament\Resources\MainAboutPageResource\Pages;

use App\Filament\Resources\MainAboutPageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMainAboutPages extends ListRecords
{
    protected static string $resource = MainAboutPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
