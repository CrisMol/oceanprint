<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Categorías padre
        $parents = [
            'Papelería',
            'Personalizados',
            'Publicidad y Displays (POP)',
            'Corporativos',
            'Gran Formato / Exterior',
        ];

        $parentIds = [];

        foreach ($parents as $name) {
            $parentIds[$name] = DB::table('categories')->insertGetId([
                'name' => $name,
                'slug' => Str::slug($name),
                'image' => null,
                'parent_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Subcategorías
        $subcategories = [
            'Papelería' => [
                'Tarjetas de presentación',
                'Volantes / Flyers',
                'Carpetas personalizadas',
                'Hojas membretadas',
                'Sobres corporativos',
                'Notas adhesivas',
                'Etiquetas adhesivas',
                'Calendarios',
                'Papelería corporativa general',
            ],
            'Personalizados' => [
                'Esferos personalizados',
                'Libretas y cuadernos',
                'Agendas',
                'Tomatodos / Botellas',
                'Fundas personalizadas',
                'Detalles para eventos',
                'Sublimación de productos',
                'Etiquetas para ropa',
            ],
            'Publicidad y Displays (POP)' => [
                'Displays publicitarios',
                'Habladores acrílicos',
                'Porta menús / Porta folletos',
                'Totems',
                'Banners enrollables',
                'Señalética',
                'Material promocional de punto de venta',
                'Acrílicos, MDF, Sintra, PVC',
            ],
            'Corporativos' => [
                'Credenciales',
                'Porta credenciales',
                'Carpetas institucionales',
                'Papelería institucional',
                'Papelería para eventos',
                'Uniformes marcados',
            ],
            'Gran Formato / Exterior' => [
                'Brandeo de vehículos',
                'Rotulación en vinil',
                'Gigantografías',
                'Impresión en lona o mesh',
                'Viniles decorativos',
                'Cajas de luz',
                'Letras corpóreas',
            ],
        ];

        foreach ($subcategories as $parent => $children) {
            foreach ($children as $child) {
                DB::table('categories')->insert([
                    'name' => $child,
                    'slug' => Str::slug($child),
                    'image' => null,
                    'parent_id' => $parentIds[$parent],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
