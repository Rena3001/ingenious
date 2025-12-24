<?php

namespace App\Filament\Resources\CallToActionTwoResource\Pages;

use App\Filament\Resources\CallToActionTwoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCallToActionTwos extends ListRecords
{
    protected static string $resource = CallToActionTwoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
