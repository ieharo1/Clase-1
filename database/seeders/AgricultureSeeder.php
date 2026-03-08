<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plot;
use App\Models\Crop;
use App\Models\Plant;
use App\Models\Irrigation;
use App\Models\Fertilizer;
use App\Models\Pest;
use App\Models\WeatherRecord;

class AgricultureSeeder extends Seeder
{
    public function run(): void
    {
        $plots = [
            ['name' => 'Parcela Norte', 'area' => 5.5, 'location' => 'Zona A', 'description' => 'Parcela principal'],
            ['name' => 'Parcela Sur', 'area' => 3.2, 'location' => 'Zona B', 'description' => 'Parcela secundaria'],
            ['name' => 'Invernadero 1', 'area' => 1.0, 'location' => 'Zona C', 'description' => 'Invernadero'],
        ];

        foreach ($plots as $plot) {
            Plot::create($plot);
        }

        $crops = [
            ['name' => 'Tomate', 'species' => 'Solanum lycopersicum', 'growth_days' => 90, 'notes' => 'Cultivo de ciclo corto'],
            ['name' => 'Maíz', 'species' => 'Zea mays', 'growth_days' => 120, 'notes' => 'Cultivo de ciclo medio'],
            ['name' => 'Lechuga', 'species' => 'Lactuca sativa', 'growth_days' => 45, 'notes' => 'Cultivo de hoja'],
            ['name' => 'Papa', 'species' => 'Solanum tuberosum', 'growth_days' => 100, 'notes' => 'Cultivo de raíz'],
        ];

        foreach ($crops as $crop) {
            Crop::create($crop);
        }

        $plants = [
            ['plot_id' => 1, 'crop_id' => 1, 'planting_date' => '2024-01-15', 'expected_harvest_date' => '2024-04-15', 'status' => 'active', 'health' => 'good'],
            ['plot_id' => 1, 'crop_id' => 2, 'planting_date' => '2024-02-01', 'expected_harvest_date' => '2024-06-01', 'status' => 'active', 'health' => 'excellent'],
            ['plot_id' => 2, 'crop_id' => 3, 'planting_date' => '2024-03-01', 'expected_harvest_date' => '2024-04-15', 'status' => 'active', 'health' => 'fair'],
            ['plot_id' => 3, 'crop_id' => 4, 'planting_date' => '2024-01-20', 'expected_harvest_date' => '2024-04-30', 'status' => 'harvested', 'health' => 'good'],
        ];

        foreach ($plants as $plant) {
            Plant::create($plant);
        }

        $irrigations = [
            ['plot_id' => 1, 'date' => '2024-03-01', 'water_amount' => 500, 'notes' => 'Riego por goteo'],
            ['plot_id' => 1, 'date' => '2024-03-02', 'water_amount' => 450, 'notes' => 'Riego por goteo'],
            ['plot_id' => 2, 'date' => '2024-03-01', 'water_amount' => 300, 'notes' => 'Riego por aspersión'],
        ];

        foreach ($irrigations as $irr) {
            Irrigation::create($irr);
        }

        $fertilizers = [
            ['name' => 'Urea', 'type' => 'Nitrogenado', 'description' => 'Fertilizante nitrogenado'],
            ['name' => 'Fosfato', 'type' => 'Fosfatado', 'description' => 'Fertilizante fosfatado'],
        ];

        foreach ($fertilizers as $fert) {
            Fertilizer::create($fert);
        }

        $pests = [
            ['name' => 'Pulgón', 'severity' => 'medium', 'treatment' => 'Insecticida sistémico'],
            ['name' => 'Mosca blanca', 'severity' => 'high', 'treatment' => 'Trampas amarillas'],
        ];

        foreach ($pests as $pest) {
            Pest::create($pest);
        }

        $weather = [
            ['date' => '2024-03-01', 'temperature' => 22.5, 'humidity' => 65, 'rainfall' => 0],
            ['date' => '2024-03-02', 'temperature' => 23.0, 'humidity' => 60, 'rainfall' => 5],
            ['date' => '2024-03-03', 'temperature' => 21.5, 'humidity' => 70, 'rainfall' => 10],
            ['date' => '2024-03-04', 'temperature' => 24.0, 'humidity' => 55, 'rainfall' => 0],
            ['date' => '2024-03-05', 'temperature' => 22.0, 'humidity' => 68, 'rainfall' => 2],
        ];

        foreach ($weather as $w) {
            WeatherRecord::create($w);
        }
    }
}
