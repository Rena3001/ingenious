<?php

namespace App\Filament\Resources\SecurityFeatureResource\Pages;

use App\Filament\Resources\SecurityFeatureResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSecurityFeature extends EditRecord
{
    protected static string $resource = SecurityFeatureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
