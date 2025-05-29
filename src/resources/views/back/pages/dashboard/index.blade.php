@extends('back.layouts.master')

@section('title')
    - Əsas səhifə
@endsection

@section('css')

@endsection

@section('content')
    <div class="container">
        <h1>Ziyarətçi statistikası</h1>

        <div class="row">
            <div class="col-md-4">
                <div class="card bg-info text-white mb-3">
                    <div class="card-header">Ümumi ziyarətçilər</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $totalVisitors }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-success text-white mb-3">
                    <div class="card-header">Unikal ziyarətçilər</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $uniqueVisitors }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-warning text-dark mb-3">
                    <div class="card-header">Son 30 gündəki ziyarətçilər</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $visitorsLast30Days }}</h5>
                    </div>
                </div>
            </div>
        </div>

        <h2>Gündəlik ziyarətçilərin statistikası</h2>
        <canvas id="dailyVisitorsChart"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('dailyVisitorsChart').getContext('2d');
        const dailyVisitorsData = {
            labels: @json($dailyVisitors->pluck('date')),
            datasets: [{
                label: 'Günlük ziyarətçilər',
                data: @json($dailyVisitors->pluck('count')),
                backgroundColor: 'rgba(54, 162, 235, 0.6)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        };

        const dailyVisitorsChart = new Chart(ctx, {
            type: 'bar',
            data: dailyVisitorsData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
