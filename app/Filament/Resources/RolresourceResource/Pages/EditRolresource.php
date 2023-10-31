<?php

namespace App\Filament\Resources\RolresourceResource\Pages;

use App\Filament\Resources\RolresourceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRolresource extends EditRecord
{
    protected static string $resource = RolresourceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
