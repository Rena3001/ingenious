<?php

namespace App\Filament\Resources\FeatureSectionThreeResource\Pages;

use App\Filament\Resources\FeatureSectionThreeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFeatureSectionThree extends EditRecord
{
    protected static string $resource = FeatureSectionThreeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
