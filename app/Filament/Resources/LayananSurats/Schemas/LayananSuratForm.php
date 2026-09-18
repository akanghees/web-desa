<?php

namespace App\Filament\Resources\LayananSurats\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class LayananSuratForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_layanan')
                    ->required(),
                Textarea::make('deskripsi')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('persyaratan')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('format_file')
                    ->default(null),
            ]);
    }
}
