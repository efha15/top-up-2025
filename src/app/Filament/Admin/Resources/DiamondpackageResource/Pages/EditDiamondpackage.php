<?php

namespace App\Filament\Admin\Resources\DiamondpackageResource\Pages;

use App\Filament\Admin\Resources\DiamondpackageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDiamondpackage extends EditRecord
{
    protected static string $resource = DiamondpackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
