<?php

namespace App\Charts;

use Carbon\Carbon;
use App\Models\prestasi;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class PrestasiChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $tahun = date('Y');
        $bulan = date('m'); // 'n' returns the numeric representation of a month without leading zeros

        $dataBulan = [];
        $dataTotalPrestasi = [];
        $totalSiswaPrestasi = 0; // Inisialisasi variabel untuk menyimpan total siswa prestasi

        for ($i = 1; $i <= $bulan; $i++) { 
            $totalPrestasi = Prestasi::whereYear('created_at', $tahun)
                                    ->whereMonth('created_at', $i)
                                    ->count('namasiswa');

            $dataBulan[] = Carbon::create()->month($i)->format('F');
            $dataTotalPrestasi[] = $totalPrestasi;

            // Menambahkan total prestasi ke total siswa prestasi
            $totalSiswaPrestasi += $totalPrestasi;
        }
        //dd($dataTotalPrestasi);
        return $this->chart->lineChart()
            ->setTitle('Total Prestasi')
            ->addData('Total Prestasi', $dataTotalPrestasi)
            ->setHeight(500)
            ->setWidth(800)
            ->setXAxis($dataBulan);
    }
}