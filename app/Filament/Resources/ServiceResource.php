<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Category;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Textarea::make('description')
                    ->rows(4),

                Forms\Components\FileUpload::make('image')
                    ->directory('services')
                    ->image()->preserveFilenames(),
                Forms\Components\FileUpload::make('icon_image')
                    ->directory('services')
                    ->image()->preserveFilenames(),
                Forms\Components\Select::make('categories')
                    ->multiple()
                    ->relationship('categories', 'name')
                    ->searchable(),
                Forms\Components\Repeater::make('features')
                    ->schema([
                        Forms\Components\TextInput::make('feature')
                            ->required(),
                    ])
                    ->collapsible()
                    ->columns(1),

                Forms\Components\RichEditor::make('page_content')
                    ->label('Page Content')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'underline',
                        'strike',
                        'h2',
                        'h3',
                        'bulletList',
                        'orderedList',
                        'link',
                        'blockquote',
                        'codeBlock',
                        'table'
                    ])
                    ->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->sortable(),
                Tables\Columns\TextColumn::make('description')->limit(50),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('features')->formatStateUsing(fn($state) => is_array($state) ? implode(', ', $state) : $state),
                Tables\Columns\TextColumn::make('page_content')->label('Page Content')->html()->limit(50),
                Tables\Columns\TextColumn::make('categories.name')->label('Categories')->badge(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
