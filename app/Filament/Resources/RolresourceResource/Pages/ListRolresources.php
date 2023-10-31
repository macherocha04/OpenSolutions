<?php

namespace App\Filament\Resources\RolresourceResource\Pages;

use App\Filament\Resources\RolresourceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRolresources extends ListRecords
{
    protected static string $resource = RolresourceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
