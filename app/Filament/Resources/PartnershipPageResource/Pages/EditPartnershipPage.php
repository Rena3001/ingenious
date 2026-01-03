<?php

namespace App\Filament\Resources\PartnershipPageResource\Pages;

use App\Filament\Resources\PartnershipPageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPartnershipPage extends EditRecord
{
    protected static string $resource = PartnershipPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
