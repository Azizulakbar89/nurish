<?php

namespace App\Charts;
use App\Models\guru;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class totalguru
{
    protected $chart1;

    public function __construct(LarapexChart $chart1)
    {
        $this->chart1 = $chart1;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
{
    // Mengambil data guru dan mengelompokkan berdasarkan posisi
    $guru = Guru::select('posisi', \DB::raw('count(*) as total'))
                ->groupBy('posisi')
                ->get();

    // Menyiapkan data dan label
    $data = [];
    $labels = [];

    foreach ($guru as $item) {
        $data[] = $item->total; // Menambahkan jumlah guru ke data
        $labels[] = $item->posisi; // Menambahkan posisi ke label
    }

    return $this->chart1->pieChart()
        ->setTitle('Jumlah Guru Berdasarkan Posisi')
        ->addData($data) // Menambahkan data jumlah guru
        ->setLabels($labels); // Menambahkan label posisi
}
}