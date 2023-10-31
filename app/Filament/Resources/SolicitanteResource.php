<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SolicitanteResource\Pages;
use App\Filament\Resources\SolicitanteResource\RelationManagers;
use App\Models\Solicitante;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use App\Models\Contrato;
use App\Models\Ocupacion;
use Filament\Forms\Components\Select;


class SolicitanteResource extends Resource
{
    protected static ?string $model = Solicitante::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        $contrato = contrato::pluck('Tipo_contrato', 'ID_contrato');
        
        $ocupaciones = Ocupacion::pluck('Nombre', 'ID_ocupacion');
       

        return $form
            ->schema([
                TextInput::make('Nombre'),
                TextInput::make('Cedula'),
                TextInput::make('Telefono')->nullable(),
                TextInput::make('Correo'),
                TextInput::make('Direccion'),
                
                Select::make('Contrato_id')
                ->label('Contrato')
                ->options($contrato)->nullable()
                ->searchable(),
                
                Select::make('ID_ocupacion')
                ->label('ocupacion')
                ->options($ocupaciones)
                ->searchable(),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('ID_solicitante'),
                TextColumn::make('Nombre'),
                TextColumn::make('Cedula'),
                TextColumn::make('Telefono'),
                TextColumn::make('Correo'),
                TextColumn::make('contrato.Tipo_contrato','contrato'),
                TextColumn::make('ocupacion.Nombre','')
//error al llamar la columna ocupaciones

              
                
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
            'index' => Pages\ListSolicitantes::route('/'),
            'create' => Pages\CreateSolicitante::route('/create'),
            'edit' => Pages\EditSolicitante::route('/{record}/edit'),
        ];
    }    
}
