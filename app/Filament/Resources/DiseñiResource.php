<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DiseñiResource\Pages;
use App\Filament\Resources\DiseñiResource\RelationManagers;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Design;
use App\Models\Diseñi;
use App\Models\Type;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;
use Laravel\SerializableClosure\Serializers\Native;

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
                TextInput::make('name')->required()->unique(),

                TextInput::make('price')->numeric()->required()->suffix('€'),
                TextInput::make('stock')->numeric()->required(),

                Select::make('collection_id')
                    ->relationship('collection', 'name')
                    ->options(Collection::all()->pluck('name', 'id')->toArray())
                    ->preload()
                    ->native(false),

                Hidden::make('user_id')->default(Auth::id()),
                Select::make('type_id')
                    ->relationship('type', 'name')
                    ->options(Type::all()->pluck('name', 'id')->toArray())
                    ->preload()
                    ->native(false)
                    ->required(),

                Select::make('category_id')
                    ->relationship('categories', 'name')
                    ->options(Category::all()->pluck('name', 'id')->toArray())
                    ->preload()
                    ->native(false)
                    ->required()
                    ->multiple(),

                FileUpload::make('file_path')->label('Image')->required()->imageEditor()->columnSpanFull(),
                DatePicker::make('expiration')->label('Expiration')->displayFormat('d-m-Y')->native(false)->default(null),



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
