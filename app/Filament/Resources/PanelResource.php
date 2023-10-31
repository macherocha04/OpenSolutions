<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PanelResource\Pages;
use App\Filament\Resources\PanelResource\RelationManagers;
use App\Models\Panel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use App\Models\User;
use App\Models\Solicitud;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class PanelResource extends Resource
{
    protected static ?string $model = Panel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        $roles = Rol::pluck('ID_', 'ID_rol');
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPanels::route('/'),
            'create' => Pages\CreatePanel::route('/create'),
            'edit' => Pages\EditPanel::route('/{record}/edit'),
        ];
    }    
}
