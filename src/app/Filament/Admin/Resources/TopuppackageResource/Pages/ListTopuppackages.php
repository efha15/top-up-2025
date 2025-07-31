<?php

namespace App\Filament\Admin\Resources\TopuppackageResource\Pages;

use App\Filament\Admin\Resources\TopuppackageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTopuppackages extends ListRecords
{
    protected static string $resource = TopuppackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
