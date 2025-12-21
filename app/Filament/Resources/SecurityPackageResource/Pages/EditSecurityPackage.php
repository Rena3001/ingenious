<?php

namespace App\Filament\Resources\SecurityPackageResource\Pages;

use App\Filament\Resources\SecurityPackageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSecurityPackage extends EditRecord
{
    protected static string $resource = SecurityPackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
