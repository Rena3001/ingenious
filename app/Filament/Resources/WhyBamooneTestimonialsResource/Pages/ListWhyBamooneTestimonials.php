<?php

namespace App\Filament\Resources\WhyBamooneTestimonialsResource\Pages;

use App\Filament\Resources\WhyBamooneTestimonialsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWhyBamooneTestimonials extends ListRecords
{
    protected static string $resource = WhyBamooneTestimonialsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
