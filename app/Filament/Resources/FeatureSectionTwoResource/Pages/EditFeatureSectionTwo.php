<?php

namespace App\Filament\Resources\FeatureSectionTwoResource\Pages;

use App\Filament\Resources\FeatureSectionTwoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFeatureSectionTwo extends EditRecord
{
    protected static string $resource = FeatureSectionTwoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
