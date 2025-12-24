<?php

namespace App\Filament\Resources\QualityConsumerEquipmentSectionResource\Pages;

use App\Filament\Resources\QualityConsumerEquipmentSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditQualityConsumerEquipmentSection extends EditRecord
{
    protected static string $resource = QualityConsumerEquipmentSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
