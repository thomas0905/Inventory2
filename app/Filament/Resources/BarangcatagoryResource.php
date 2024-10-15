<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BarangcatagoryResource\Pages;
use App\Filament\Resources\BarangcatagoryResource\RelationManagers;
use App\Models\Barangcatagory;
use Filament\Forms;

use Filament\Forms\Components\Card;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Filters\Filter;


class BarangcatagoryResource extends Resource
{
    protected static ?string $model = Barangcatagory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Barang Catagory';

    public static function getTitle(): string{
        Return "Barang Catagory";
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->label('Category Name')
                    ->maxLength(255)
                    ->unique(ignorable: fn($record)=> $record),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->label('Description'), 
                ])
                ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable()
                    ->label('Category Name')->searchable(),
                Tables\Columns\TextColumn::make('description')->sortable()
                    ->label('Description')->searchable(),
            ])
            ->filters([
            //   Tables\Filters\TextFilter::make('name'),

            Filter::make('name')
            ->label('Filter by Name')
            ->form([
                Forms\Components\TextInput::make('name')
                    ->placeholder('Enter name'),
            ])
            ->query(function ($query, array $data) {
                return $query->when(
                    $data['name'],
                    fn($query, $name) => $query->where('name', 'like', '%' . $name . '%')
                );
            }),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ForceDeleteAction::make(),
                Tables\Actions\RestoreAction::make(),                
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListBarangcatagories::route('/'),
            'create' => Pages\CreateBarangcatagory::route('/create'),
            'edit' => Pages\EditBarangcatagory::route('/{record}/edit'),
        ];
    }
}
