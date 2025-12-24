<?php

namespace App\Filament\Resources\FeatureSectionFourResource\Pages;

use App\Filament\Resources\FeatureSectionFourResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFeatureSectionFour extends EditRecord
{
    protected static string $resource = FeatureSectionFourResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
