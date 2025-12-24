<?php

namespace App\Filament\Resources\LocalRecordingResource\Pages;

use App\Filament\Resources\LocalRecordingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLocalRecording extends EditRecord
{
    protected static string $resource = LocalRecordingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
