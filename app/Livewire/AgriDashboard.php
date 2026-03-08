<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Plot;
use App\Models\Plant;
use App\Models\Crop;
use App\Models\Irrigation;
use App\Models\PestDetection;
use App\Models\WeatherRecord;

class AgriDashboard extends Component
{
    public $search = '';

    public function render()
    {
        $totalPlots = Plot::count();
        $activePlants = Plant::where('status', 'active')->count();
        $harvestedPlants = Plant::where('status', 'harvested')->count();
        $totalArea = Plot::sum('area');
        
        $recentPlants = Plant::with(['plot', 'crop'])
            ->orderBy('planting_date', 'desc')
            ->limit(10)
            ->get();

        $irrigations = Irrigation::with('plot')
            ->orderBy('date', 'desc')
            ->limit(5)
            ->get();

        $pestAlerts = PestDetection::with(['plant.crop', 'plant.plot', 'pest'])
            ->where('treated', false)
            ->orderBy('detection_date', 'desc')
            ->limit(5)
            ->get();

        $weather = WeatherRecord::orderBy('date', 'desc')->limit(7)->get();

        $cropsByStatus = Plant::selectRaw('status, COUNT(*) as count')
            ->groupBy('status')
            ->pluck('count', 'status')
            ->toArray();

        return view('livewire.agri-dashboard', [
            'totalPlots' => $totalPlots,
            'activePlants' => $activePlants,
            'harvestedPlants' => $harvestedPlants,
            'totalArea' => $totalArea,
            'recentPlants' => $recentPlants,
            'irrigations' => $irrigations,
            'pestAlerts' => $pestAlerts,
            'weather' => $weather,
            'cropsByStatus' => $cropsByStatus,
        ]);
    }
}
