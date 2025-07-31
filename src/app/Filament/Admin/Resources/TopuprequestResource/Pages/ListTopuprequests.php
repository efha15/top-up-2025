<?php

namespace App\Filament\Admin\Resources\TopuprequestResource\Pages;

use App\Filament\Admin\Resources\TopuprequestResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTopuprequests extends ListRecords
{
    protected static string $resource = TopuprequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
