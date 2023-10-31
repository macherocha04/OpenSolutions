<?php

namespace App\Filament\Resources\UsersresourceResource\Pages;

use App\Filament\Resources\UsersresourceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUsersresource extends EditRecord
{
    protected static string $resource = UsersresourceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
