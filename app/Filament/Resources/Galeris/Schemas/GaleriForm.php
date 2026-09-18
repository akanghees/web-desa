<?php

namespace App\Filament\Resources\Galeris\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class GaleriForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->required(),
                Select::make('kategori')
                    ->options(['foto' => 'Foto', 'video' => 'Video'])
                    ->required(),
                TextInput::make('file')
                    ->required(),
                Textarea::make('keterangan')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
