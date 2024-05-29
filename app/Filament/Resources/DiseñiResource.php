<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DiseñiResource\Pages;
use App\Filament\Resources\DiseñiResource\RelationManagers;
use App\Models\Design;
use App\Models\Diseñi;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DiseñiResource extends Resource
{
    protected static ?string $model = Design::class;

    protected static ?string $navigationIcon = 'heroicon-s-paint-brush';
    protected static ?string $navigationLabel = 'Designs';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('nombre'),

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
            'index' => Pages\ListDiseñis::route('/'),
            'create' => Pages\CreateDiseñi::route('/create'),
            'edit' => Pages\EditDiseñi::route('/{record}/edit'),
        ];
    }
}
