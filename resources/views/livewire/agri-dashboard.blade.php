@extends('layouts.app')

@section('title', 'AgriSmart - Dashboard Agrícola')

@section('content')
<div class="row mb-4">
    <div class="col-md-12">
        <h2><i class="fas fa-chart-line"></i> Dashboard de Gestión Agrícola</h2>
    </div>
</div>

<div class="row mb-4">
    <div class="col-md-3">
        <div class="stat-card stat-active">
            <h3><i class="fas fa-seedling"></i> {{ $activePlants }}</h3>
            <p>Plantas Activas</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card stat-harvested">
            <h3><i class="fas fa-harvest"></i> {{ $harvestedPlants }}</h3>
            <p>Cosechadas</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card stat-plots">
            <h3><i class="fas fa-map"></i> {{ $totalPlots }}</h3>
            <p>Parcelas</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card stat-area">
            <h3><i class="fas fa-ruler-combined"></i> {{ $totalArea }}</h3>
            <p>Área Total (ha)</p>
        </div>
    </div>
</div>

@if(count($pestAlerts) > 0)
<div class="row mb-4">
    <div class="col-md-12">
        <div class="alert alert-danger">
            <h5><i class="fas fa-exclamation-triangle"></i> Alertas de Plagas</h5>
            <div class="table-responsive mt-3">
                <table class="table table-sm table-danger">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Parcela</th>
                            <th>Cultivo</th>
                            <th>Plaga</th>
                            <th>Severidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pestAlerts as $alert)
                        <tr>
                            <td>{{ $alert->detection_date }}</td>
                            <td>{{ $alert->plant->plot->name }}</td>
                            <td>{{ $alert->plant->crop->name }}</td>
                            <td>{{ $alert->pest->name }}</td>
                            <td>
                                <span class="badge bg-{{ $alert->pest->severity == 'high' ? 'danger' : 'warning' }}">
                                    {{ $alert->pest->severity }}
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endif

<div class="row mb-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-leaf"></i> Plantas Recientes</h5>
            </div>
            <div class="card-body">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>Parcela</th>
                            <th>Cultivo</th>
                            <th>Fecha Siembra</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recentPlants as $plant)
                        <tr>
                            <td>{{ $plant->plot->name }}</td>
                            <td>{{ $plant->crop->name }}</td>
                            <td>{{ $plant->planting_date }}</td>
                            <td>
                                <span class="badge bg-{{ 
                                    $plant->status == 'active' ? 'success' : 
                                    ($plant->status == 'harvested' ? 'warning' : 'danger')
                                }}">
                                    {{ $plant->status }}
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-tint"></i> Riegos Recientes</h5>
            </div>
            <div class="card-body">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Parcela</th>
                            <th>Agua (L)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($irrigations as $irrigation)
                        <tr>
                            <td>{{ $irrigation->date }}</td>
                            <td>{{ $irrigation->plot->name }}</td>
                            <td>{{ $irrigation->water_amount }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-cloud"></i> Registro Climático</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Temperatura (°C)</th>
                                <th>Humedad (%)</th>
                                <th>Lluvia (mm)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($weather as $record)
                            <tr>
                                <td>{{ $record->date }}</td>
                                <td>{{ $record->temperature }}°C</td>
                                <td>{{ $record->humidity }}%</td>
                                <td>{{ $record->rainfall }} mm</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
