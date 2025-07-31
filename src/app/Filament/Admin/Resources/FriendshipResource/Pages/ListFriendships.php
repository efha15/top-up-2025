<?php

namespace App\Filament\Admin\Resources\FriendshipResource\Pages;

use App\Filament\Admin\Resources\FriendshipResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFriendships extends ListRecords
{
    protected static string $resource = FriendshipResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
