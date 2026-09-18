<?php

namespace App\Filament\Resources\Pengumumen\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PengumumanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->required(),
                Textarea::make('isi')
                    ->default(null)
                    ->columnSpanFull(),
                DatePicker::make('tanggal_mulai'),
                DatePicker::make('tanggal_selesai'),
                Select::make('status')
                    ->options(['aktif' => 'Aktif', 'nonaktif' => 'Nonaktif'])
                    ->default('aktif')
                    ->required(),
                TextInput::make('gambar')
                    ->default(null),
            ]);
    }
}
