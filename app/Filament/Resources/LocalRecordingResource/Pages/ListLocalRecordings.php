<?php

namespace App\Filament\Resources\LocalRecordingResource\Pages;

use App\Filament\Resources\LocalRecordingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLocalRecordings extends ListRecords
{
    protected static string $resource = LocalRecordingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
