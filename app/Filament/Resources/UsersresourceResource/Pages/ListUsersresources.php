<?php

namespace App\Filament\Resources\UsersresourceResource\Pages;

use App\Filament\Resources\UsersresourceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUsersresources extends ListRecords
{
    protected static string $resource = UsersresourceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
