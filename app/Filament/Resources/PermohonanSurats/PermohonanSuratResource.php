<?php

namespace App\Filament\Resources\PermohonanSurats;

use App\Filament\Resources\PermohonanSurats\Pages\CreatePermohonanSurat;
use App\Filament\Resources\PermohonanSurats\Pages\EditPermohonanSurat;
use App\Filament\Resources\PermohonanSurats\Pages\ListPermohonanSurats;
use App\Filament\Resources\PermohonanSurats\Schemas\PermohonanSuratForm;
use App\Filament\Resources\PermohonanSurats\Tables\PermohonanSuratsTable;
use App\Models\PermohonanSurat;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PermohonanSuratResource extends Resource
{
    protected static ?string $model = PermohonanSurat::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nama_pemohon';

    public static function form(Schema $schema): Schema
    {
        return PermohonanSuratForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PermohonanSuratsTable::configure($table);
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
            'index' => ListPermohonanSurats::route('/'),
            'create' => CreatePermohonanSurat::route('/create'),
            'edit' => EditPermohonanSurat::route('/{record}/edit'),
        ];
    }
}
