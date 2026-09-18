<?php

namespace App\Filament\Resources\DataPenduduks;

use App\Filament\Resources\DataPenduduks\Pages\CreateDataPenduduk;
use App\Filament\Resources\DataPenduduks\Pages\EditDataPenduduk;
use App\Filament\Resources\DataPenduduks\Pages\ListDataPenduduks;
use App\Filament\Resources\DataPenduduks\Schemas\DataPendudukForm;
use App\Filament\Resources\DataPenduduks\Tables\DataPenduduksTable;
use App\Models\DataPenduduk;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DataPendudukResource extends Resource
{
    protected static ?string $model = DataPenduduk::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nama';

    public static function form(Schema $schema): Schema
    {
        return DataPendudukForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DataPenduduksTable::configure($table);
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
            'index' => ListDataPenduduks::route('/'),
            'create' => CreateDataPenduduk::route('/create'),
            'edit' => EditDataPenduduk::route('/{record}/edit'),
        ];
    }
}
