<?php

namespace App\Filament\Admin\Resources\TopuprequestResource\Pages;

use App\Filament\Admin\Resources\TopuprequestResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTopuprequest extends EditRecord
{
    protected static string $resource = TopuprequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
