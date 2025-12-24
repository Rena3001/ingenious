<?php

namespace App\Filament\Resources\HomeApplianceSlideResource\Pages;

use App\Filament\Resources\HomeApplianceSlideResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomeApplianceSlide extends EditRecord
{
    protected static string $resource = HomeApplianceSlideResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
