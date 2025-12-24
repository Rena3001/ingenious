<?php

namespace App\Filament\Resources\CallToActionTwoResource\Pages;

use App\Filament\Resources\CallToActionTwoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCallToActionTwo extends EditRecord
{
    protected static string $resource = CallToActionTwoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
