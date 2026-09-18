<?php

namespace App\Filament\Resources\Agendas\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class AgendaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->required(),
                Textarea::make('deskripsi')
                    ->default(null)
                    ->columnSpanFull(),
                DatePicker::make('tanggal_mulai')
                    ->required(),
                DatePicker::make('tanggal_selesai'),
                TextInput::make('lokasi')
                    ->default(null),
                Select::make('status')
                    ->options(['terlaksana' => 'Terlaksana', 'akan' => 'Akan'])
                    ->default('akan')
                    ->required(),
                TextInput::make('gambar')
                    ->default(null),
            ]);
    }
}
