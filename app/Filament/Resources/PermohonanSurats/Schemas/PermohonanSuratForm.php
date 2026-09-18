<?php

namespace App\Filament\Resources\PermohonanSurats\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PermohonanSuratForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('layanan_id')
                    ->required()
                    ->numeric(),
                TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                TextInput::make('nama_pemohon')
                    ->required(),
                TextInput::make('nik')
                    ->default(null),
                Textarea::make('alamat')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('keperluan')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('file_persyaratan')
                    ->default(null),
                Select::make('status')
                    ->options([
            'menunggu' => 'Menunggu',
            'diproses' => 'Diproses',
            'selesai' => 'Selesai',
            'ditolak' => 'Ditolak',
        ])
                    ->default('menunggu')
                    ->required(),
                Textarea::make('catatan')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
