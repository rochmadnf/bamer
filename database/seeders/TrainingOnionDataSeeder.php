<?php

namespace Database\Seeders;

use App\Models\NaiveBayesTrain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainingOnionDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = collect([
            // waturalele
            //1
            [
                "kesamaan_sifat" => "seragam",
                "ketuaan" => 0,
                "kekerasan" => 1,
                "kekeringan" => "simpan kering",
                "kotoran" => 0,
                "kebusukan" => 0,
                "kerusakan" => 0,
                "kadar_air" => 77.451,
                "diameter" => 2.3265,
                "mutu_class" => 2,
            ],
            //2
            [
                "kesamaan_sifat" => "seragam",
                "ketuaan" => 0,
                "kekerasan" => 1,
                "kekeringan" => "simpan kering",
                "kotoran" => 0,
                "kebusukan" => 0,
                "kerusakan" => 0,
                "kadar_air" => 77.951,
                "diameter" => 2.221,
                "mutu_class" => 2,
            ],
            //3
            [
                "kesamaan_sifat" => "seragam",
                "ketuaan" => 0,
                "kekerasan" => 1,
                "kekeringan" => "simpan kering",
                "kotoran" => 0,
                "kebusukan" => 0,
                "kerusakan" => 0,
                "kadar_air" => 78.83,
                "diameter" => 1.825,
                "mutu_class" => 2,
            ],
            //4
            [
                "kesamaan_sifat" => "seragam",
                "ketuaan" => 0,
                "kekerasan" => 1,
                "kekeringan" => "simpan kering",
                "kotoran" => 0,
                "kebusukan" => 0,
                "kerusakan" => 0,
                "kadar_air" => 77.708,
                "diameter" => 2.604,
                "mutu_class" => 2,
            ],
            //5
            [
                "kesamaan_sifat" => "seragam",
                "ketuaan" => 0,
                "kekerasan" => 1,
                "kekeringan" => "simpan kering",
                "kotoran" => 0,
                "kebusukan" => 0,
                "kerusakan" => 0,
                "kadar_air" => 76.42,
                "diameter" => 2.44,
                "mutu_class" => 2,
            ],
            //6
            [
                "kesamaan_sifat" => "seragam",
                "ketuaan" => 0,
                "kekerasan" => 0,
                "kekeringan" => "simpan kering",
                "kotoran" => 0,
                "kebusukan" => 0,
                "kerusakan" => 1,
                "kadar_air" => 80.552,
                "diameter" => 2.437,
                "mutu_class" => 1,
            ],

            // maku
            //1
            [
                "kesamaan_sifat" => "seragam",
                "ketuaan" => 0,
                "kekerasan" => 1,
                "kekeringan" => "simpan kering",
                "kotoran" => 0,
                "kebusukan" => 0,
                "kerusakan" => 0,
                "kadar_air" => 78.177,                
                "diameter" => 2.2135,
                "mutu_class" => 2,
            ],
            //2
            [
                "kesamaan_sifat" => "seragam",
                "ketuaan" => 0,
                "kekerasan" => 1,
                "kekeringan" => "simpan kering",
                "kotoran" => 0,
                "kebusukan" => 0,
                "kerusakan" => 0,
                "kadar_air" => 79.328,
                "diameter" => 1.504,
                "mutu_class" => 2,
            ],
            //3
            [
                "kesamaan_sifat" => "seragam",
                "ketuaan" => 0,
                "kekerasan" => 1,
                "kekeringan" => "simpan kering",
                "kotoran" => 0,
                "kebusukan" => 1,
                "kerusakan" => 0,
                "kadar_air" => 80.47,
                "diameter" => 0.828,
                "mutu_class" => 2,
            ],
            //4
            [
                "kesamaan_sifat" => "seragam",
                "ketuaan" => 0,
                "kekerasan" => 1,
                "kekeringan" => "simpan kering",
                "kotoran" => 0,
                "kebusukan" => 1,
                "kerusakan" => 0,
                "kadar_air" => 80.961,
                "diameter" => 1.5005,
                "mutu_class" => 2,
            ],
            //5
            [
                "kesamaan_sifat" => "seragam",
                "ketuaan" => 0,
                "kekerasan" => 1,
                "kekeringan" => "simpan kering",
                "kotoran" => 0,
                "kebusukan" => 0,
                "kerusakan" => 0,
                "kadar_air" => 80.699,
                "diameter" => 1.4345,
                "mutu_class" => 2,
            ],
            //6
            [
                "kesamaan_sifat" => "seragam",
                "ketuaan" => 0,
                "kekerasan" => 0,
                "kekeringan" => "simpan kering",
                "kotoran" => 0,
                "kebusukan" => 0,
                "kerusakan" => 0,
                "kadar_air" => 78.128,
                "diameter" => 2.5445,
                "mutu_class" => 2,
            ],

            // maranatha
            //1
            [
                "kesamaan_sifat" => "seragam",
                "ketuaan" => 1,
                "kekerasan" => 0,
                "kekeringan" => "simpan kering",
                "kotoran" => 0,
                "kebusukan" => 0,
                "kerusakan" => 0,
                "kadar_air" => 79.041,
                "diameter" => 2.6025,
                "mutu_class" => 1,
            ],
            //2
            [
                "kesamaan_sifat" => "seragam",
                "ketuaan" => 1,
                "kekerasan" => 0,
                "kekeringan" => "simpan kering",
                "kotoran" => 0,
                "kebusukan" => 0,
                "kerusakan" => 0,
                "kadar_air" => 82.206,
                "diameter" => 2.048,
                "mutu_class" => 1,
            ],
            //3
            [
                "kesamaan_sifat" => "seragam",
                "ketuaan" => 1,
                "kekerasan" => 0,
                "kekeringan" => "simpan kering",
                "kotoran" => 0,
                "kebusukan" => 0,
                "kerusakan" => 0,
                "kadar_air" => 81.659,
                "diameter" => 2.327,
                "mutu_class" => 1,
            ],
            //4
            [
                "kesamaan_sifat" => "seragam",
                "ketuaan" => 1,
                "kekerasan" => 1,
                "kekeringan" => "simpan kering",
                "kotoran" => 0,
                "kebusukan" => 0,
                "kerusakan" => 0,
                "kadar_air" => 77.142,
                "diameter" => 1.604,
                "mutu_class" => 1,
            ],
            //5
            [
                "kesamaan_sifat" => "seragam",
                "ketuaan" => 1,
                "kekerasan" => 1,
                "kekeringan" => "simpan kering",
                "kotoran" => 0,
                "kebusukan" => 0,
                "kerusakan" => 0,
                "kadar_air" => 74.577,
                "diameter" => 1.838,
                "mutu_class" => 1,
            ],
            //6
            [
                "kesamaan_sifat" => "seragam",
                "ketuaan" => 1,
                "kekerasan" => 1,
                "kekeringan" => "simpan kering",
                "kotoran" => 0,
                "kebusukan" => 0,
                "kerusakan" => 0,
                "kadar_air" => 76.741,
                "diameter" => 2.103,
                "mutu_class" => 1,
            ],
            
            // sidondo
            //1
            [
                "kesamaan_sifat" => "seragam",
                "ketuaan" => 0,
                "kekerasan" => 1,
                "kekeringan" => "simpan kering",
                "kotoran" => 0,
                "kebusukan" => 0,
                "kerusakan" => 0,
                "kadar_air" => 79.161,
                "diameter" => 1.4385,
                "mutu_class" => 2,
            ],
            //2
            [
                "kesamaan_sifat" => "seragam",
                "ketuaan" => 0,
                "kekerasan" => 1,
                "kekeringan" => "simpan kering",
                "kotoran" => 0,
                "kebusukan" => 0,
                "kerusakan" => 0,
                "kadar_air" => 76.496,
                "diameter" => 1.6055,
                "mutu_class" => 2,
            ],
            //3
            [
                "kesamaan_sifat" => "seragam",
                "ketuaan" => 0,
                "kekerasan" => 1,
                "kekeringan" => "simpan kering",
                "kotoran" => 0,
                "kebusukan" => 1,
                "kerusakan" => 0,
                "kadar_air" => 77.009,
                "diameter" => 1.1075,
                "mutu_class" => 2,
            ],
            //4
            [
                "kesamaan_sifat" => "seragam",
                "ketuaan" => 0,
                "kekerasan" => 1,
                "kekeringan" => "simpan kering",
                "kotoran" => 0,
                "kebusukan" => 0,
                "kerusakan" => 0,
                "kadar_air" => 78.334,
                "diameter" => 1.3255,
                "mutu_class" => 2,
            ],
            //5
            [
                "kesamaan_sifat" => "seragam",
                "ketuaan" => 0,
                "kekerasan" => 1,
                "kekeringan" => "simpan kering",
                "kotoran" => 0,
                "kebusukan" => 0,
                "kerusakan" => 0,
                "kadar_air" => 77.512,
                "diameter" => 1.3265,
                "mutu_class" => 2,
            ],
            //6
            [
                "kesamaan_sifat" => "seragam",
                "ketuaan" => 0,
                "kekerasan" => 1,
                "kekeringan" => "simpan kering",
                "kotoran" => 0,
                "kebusukan" => 0,
                "kerusakan" => 0,
                "kadar_air" => 78.197,
                "diameter" => 1.7185,
                "mutu_class" => 2,
            ],

            //Sidera
            //1
            [
                "kesamaan_sifat" => "seragam",
                "ketuaan" => 1,
                "kekerasan" => 1,
                "kekeringan" => "simpan kering",
                "kotoran" => 0,
                "kebusukan" => 0,
                "kerusakan" => 0,
                "kadar_air" => 77,034,
                "diameter" => 1,543,
                "mutu_class" => 1,
            ],
        ]);

        $data->each(fn ($item) => NaiveBayesTrain::create($item));
    }
}
