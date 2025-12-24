<?php

namespace App\Filament\Resources\FeatureItemResource\Pages;

use App\Filament\Resources\FeatureItemResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFeatureItem extends EditRecord
{
    protected static string $resource = FeatureItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
