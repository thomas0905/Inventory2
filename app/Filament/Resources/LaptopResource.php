<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LaptopResource\Pages;
use Filament\Forms\Components\Hidden;
use App\Filament\Resources\LaptopResource\RelationManagers;
use App\Models\Laptop;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Card;

class LaptopResource extends Resource
{
    protected static ?string $model = Laptop::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    
    public static function getTitle(): string{
        Return "Laptop";
    }

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Card::make()
            ->extraAttributes(['class' => 'custom-card'])
            ->schema([
           
            Forms\Components\TextInput::make('idinventaris')
                ->required()
                ->label('Id Inventaris')
                ->maxLength(255)
                ->unique(ignorable: fn($record)=> $record),
            Forms\Components\TextInput::make('nameLaptop')
                ->required()
                ->label('Computer ID')
                ->maxLength(255)
                ->unique(ignorable: fn($record)=> $record),

            Forms\Components\TextInput::make('brand')
                ->required()
                ->label('Brand')
                ->maxLength(255),
                
            Forms\Components\TextInput::make('specifications')
                ->required()
                ->label('Spesification')
                ->maxLength(255),
                
            Forms\Components\DatePicker::make('purchase_date')
                ->required()
                ->displayFormat('d-m-Y'), // Format tampilan (yyyy-mm-dd)
                
            Forms\Components\TextInput::make('price')
                ->numeric() // Hanya menerima input angka
                ->minValue(0) // Nilai minimum
                ->label('Price')
                ->prefix('Rp'), // Tanda mata uang di depan angka
            Forms\Components\TextInput::make('status')
                ->required()
                ->label('status')
                ->maxLength(255),
                
         
            ])
            ->columns(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('idinventaris')->sortable()
                ->label('ID Inventaris')->searchable(),
                Tables\Columns\TextColumn::make('nameLaptop')->sortable()
                ->label('Computer ID')->searchable(),
                Tables\Columns\TextColumn::make('specifications')->sortable()
                ->label('Spesification'),
                Tables\Columns\TextColumn::make('purchase_date')->sortable()
                ->label('Purchase Date')->searchable(),
                Tables\Columns\TextColumn::make('price')->sortable()
                ->label('Price')->searchable()->formatStateUsing(fn($state) => '$' . number_format($state, 2, '.', ',')),
                Tables\Columns\TextColumn::make('status')->sortable()
                ->label('Status')->searchable(),
            ])
            ->filters([
                //
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
            'index' => Pages\ListLaptops::route('/'),
            'create' => Pages\CreateLaptop::route('/create'),
            'edit' => Pages\EditLaptop::route('/{record}/edit'),
        ];
    }
}
