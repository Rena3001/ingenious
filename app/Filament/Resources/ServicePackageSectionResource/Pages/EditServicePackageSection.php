<?php

namespace App\Filament\Resources\ServicePackageSectionResource\Pages;

use App\Filament\Resources\ServicePackageSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServicePackageSection extends EditRecord
{
    protected static string $resource = ServicePackageSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
