<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FooterResource\Pages;
use App\Models\Footer;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class FooterResource extends Resource
{
    protected static ?string $model = Footer::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                FileUpload::make('logo')->label('Logo')->image()->directory('logo')->preserveFilenames(),
                Textarea::make('description')->label('Description')->rows(3),
                TextInput::make('working_days')->label('Working Days'),
                TextInput::make('working_hours')->label('Working Hours'),
                Repeater::make('social_links')
                    ->schema([
                        TextInput::make('name')->label('Social Platform')->required(),
                        TextInput::make('url')->label('URL')->url()->required(),
                    ])
                    ->collapsible()
                    ->columns(1),

                Repeater::make('quick_links')->schema([
                    TextInput::make('name')->label('Link Name'),
                    TextInput::make('url')->label('URL'),
                ]),
                TextInput::make('official_info.address')->label('Address'),
                TextInput::make('official_info.email')->label('Email'),
                TextInput::make('official_info.phone')->label('Phone'),
                TextInput::make('copyright_text')->label('Copyright Text'),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                ImageColumn::make('logo')->label('Logo'),
                TextColumn::make('description')->limit(50)->label('Description'),
                TextColumn::make('working_days')->label('Days'),
                TextColumn::make('working_hours')->label('Hours'),
                // TextColumn::make('social_links')->label('Social Links'),
                TextColumn::make('copyright_text')->label('Copyright'),
            ])
            ->filters([])
            ->actions([Tables\Actions\EditAction::make(), Tables\Actions\DeleteAction::make()])
            ->bulkActions([Tables\Actions\DeleteBulkAction::make()]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFooters::route('/'),
            'create' => Pages\CreateFooter::route('/create'),
            'edit' => Pages\EditFooter::route('/{record}/edit'),
        ];
    }
}
