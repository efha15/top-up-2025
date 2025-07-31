<?php

namespace App\Filament\Admin\Resources\TopuppackageResource\Pages;

use App\Filament\Admin\Resources\TopuppackageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTopuppackage extends EditRecord
{
    protected static string $resource = TopuppackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
