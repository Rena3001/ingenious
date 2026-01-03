<?php

namespace App\Filament\Resources\ShopSectionResource\Pages;

use App\Filament\Resources\ShopSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditShopSection extends EditRecord
{
    protected static string $resource = ShopSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
