<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Fasilita; // Pastikan nama model menggunakan huruf kapital

class Ekstrak // Mengubah nama kelas menjadi PascalCase
{
    protected $chart3;

    public function __construct(LarapexChart $chart3)
    {
        $this->chart3 = $chart3;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart // Mengubah tipe pengembalian menjadi BarChart
    {
        // Mengambil data fasilitas dan menghitung jumlahnya
        $fasilitas = Fasilita::select('namafas', \DB::raw('count(*) as total')) // Menggunakan count(*) untuk menghitung jumlah baris
            ->groupBy('namafas')
            ->get();

        // Menyiapkan data dan label
        $data = [];
        $labels = [];
        $colors = ['#008000'];

        foreach ($fasilitas as $item) {
            $data[] = $item->total; // Menambahkan jumlah fasilitas ke data
            $labels[] = $item->namafas; // Menambahkan nama fasilitas ke label
        }

        // Mengembalikan grafik batang
        return $this->chart3->barChart()
            ->setTitle('Jumlah Fasilitas') // Judul grafik
            ->setSubtitle('Data berdasarkan nama fasilitas.') // Subjudul grafik
            ->addData('Jumlah', $data) // Menambahkan data jumlah fasilitas dengan label 'Jumlah'
            ->setLabels($labels) // Menambahkan label nama fasilitas
            ->setColors($colors)
            ->setHeight(300) // Mengatur tinggi grafik
            ->setWidth(300); // Mengatur lebar grafik;
    }
}