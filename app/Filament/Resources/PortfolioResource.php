<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortfolioResource\Pages;
use App\Models\Portfolio;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;

class PortfolioResource extends Resource {
    protected static ?string $model = Portfolio::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form {
        return $form->schema([
            Forms\Components\TextInput::make('title')->required(),
            Forms\Components\TextInput::make('sub_title'),
            Forms\Components\FileUpload::make('image')->image()->directory('portfolio'),
            Forms\Components\FileUpload::make('detail_image')->image()->directory('portfolio'),
            Forms\Components\TextInput::make('designation'),

            // 🆕 Additional Fields
            Forms\Components\TextInput::make('client')->label('Client Name'),
            Forms\Components\TextInput::make('category')->label('Category'),
            Forms\Components\DatePicker::make('date')->label('Project Date'),
            Forms\Components\TextInput::make('address')->label('Address'),

            // 🆕 Rich Text Editor for Page Content
            Forms\Components\RichEditor::make('page_content')
                ->label('Page Content')
                ->nullable()
                ->columnSpan('full'), // Makes it full-width
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table {
        return $table->columns([
            Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('sub_title')->sortable()->searchable(),
            Tables\Columns\ImageColumn::make('image'),
            Tables\Columns\TextColumn::make('designation')->sortable()->searchable(),

            // 🆕 Additional Columns
            Tables\Columns\TextColumn::make('client')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('category')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('date')->label('Project Date')->sortable(),
            Tables\Columns\TextColumn::make('address')->sortable()->searchable(),

            // 🆕 Show a Preview of Page Content in Table (Truncated)
            Tables\Columns\TextColumn::make('page_content')
                ->label('Page Content')
                ->limit(50) // Show only first 50 characters
                ->sortable(),
        ])
        ->filters([])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
    }

    public static function getPages(): array {
        return [
            'index' => Pages\ListPortfolios::route('/'),
            'create' => Pages\CreatePortfolio::route('/create'),
            'edit' => Pages\EditPortfolio::route('/{record}/edit'),
        ];
    }
}
