<?php

namespace Database\Seeders;

use App\Models\Wisata;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list_wisata = [
            [
                "nama_wisata" => "ASIA HERITAGE",
                "rating" => 4.3,
                "jumlah_pengunjung" => 3887,
                "jumlah_fasilitas" => 4
            ],
            [
                "nama_wisata" => "RTH Putri Kaca Mayang",
                "rating" => 4.3,
                "jumlah_pengunjung" => 3686,
                "jumlah_fasilitas" => 5
            ],
            [
                "nama_wisata" => "Pantai Cinta, Teluk Jering Tambang",
                "rating" => 4.1,
                "jumlah_pengunjung" => 3110,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Masjid Agung Madani - National Islamic Centre MAMIC Rokan Hulu",
                "rating" => 4.7,
                "jumlah_pengunjung" => 3069,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Labersa Water Park Riau Fantasi",
                "rating" => 4.1,
                "jumlah_pengunjung" => 2838,
                "jumlah_fasilitas" => 5
            ],
            [
                "nama_wisata" => "Kasang Kulim Zoo",
                "rating" => 4.2,
                "jumlah_pengunjung" => 2622,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Ulu Kasok",
                "rating" => 4.3,
                "jumlah_pengunjung" => 2246,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Wisata Danau Raja Rengat",
                "rating" => 4.3,
                "jumlah_pengunjung" => 1859,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Jembatan Siak I",
                "rating" => 4.4,
                "jumlah_pengunjung" => 1782,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Sungai Hijau 7",
                "rating" => 4.2,
                "jumlah_pengunjung" => 1722,
                "jumlah_fasilitas" => 2
            ],
            [
                "nama_wisata" => "Boombara Waterpark Pekanbaru",
                "rating" => 4,
                "jumlah_pengunjung" => 1676,
                "jumlah_fasilitas" => 5
            ],
            [
                "nama_wisata" => "Candi Muara Takus",
                "rating" => 4.4,
                "jumlah_pengunjung" => 1248,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Bandar Bakau Dumai",
                "rating" => 4.1,
                "jumlah_pengunjung" => 1180,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Rumah Singgah Tuan Kadi",
                "rating" => 4.6,
                "jumlah_pengunjung" => 1149,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Pemandian Sungai Ujil",
                "rating" => 4.2,
                "jumlah_pengunjung" => 994,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Taman Budaya Provinsi Riau",
                "rating" => 4.4,
                "jumlah_pengunjung" => 780,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Taman Agrowisata Tenayan Raya",
                "rating" => 4.2,
                "jumlah_pengunjung" => 754,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Alam Mayang",
                "rating" => 4.5,
                "jumlah_pengunjung" => 740,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Taman Rekreasi Alam Mayang",
                "rating" => 4.3,
                "jumlah_pengunjung" => 677,
                "jumlah_fasilitas" => 7
            ],
            [
                "nama_wisata" => "Science Park Universitas Riau",
                "rating" => 4.4,
                "jumlah_pengunjung" => 662,
                "jumlah_fasilitas" => 3
            ],
            [
                "nama_wisata" => "Rumah Jamur Nando",
                "rating" => 4.9,
                "jumlah_pengunjung" => 647,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Wisata Alam Pertamina Lirik Riau",
                "rating" => 4.2,
                "jumlah_pengunjung" => 637,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Lapangan Pasir Bengkalis",
                "rating" => 4.5,
                "jumlah_pengunjung" => 557,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Taman Wisata Go Green",
                "rating" => 3.9,
                "jumlah_pengunjung" => 547,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Air Terjun Guruh Gemurai",
                "rating" => 4.3,
                "jumlah_pengunjung" => 500,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Stanum Bangkinang",
                "rating" => 4,
                "jumlah_pengunjung" => 428,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Wisata Dakwah Okura",
                "rating" => 4.3,
                "jumlah_pengunjung" => 411,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Hutan Kota Pekanbaru",
                "rating" => 4.3,
                "jumlah_pengunjung" => 395,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "TEMBULUN KINUTAN",
                "rating" => 4.1,
                "jumlah_pengunjung" => 385,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Kampoeng Rabbit's Kulim",
                "rating" => 4.3,
                "jumlah_pengunjung" => 377,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Benteng Tujuh Lapis",
                "rating" => 4.4,
                "jumlah_pengunjung" => 320,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Wisata Rekreasi Danau Buatan",
                "rating" => 3.7,
                "jumlah_pengunjung" => 312,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Puncak Kobe",
                "rating" => 4.5,
                "jumlah_pengunjung" => 307,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Wisata Danau Khayangan",
                "rating" => 3.8,
                "jumlah_pengunjung" => 282,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Air Terjun AEK MATUA",
                "rating" => 4.3,
                "jumlah_pengunjung" => 265,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Danau Tajwid",
                "rating" => 4,
                "jumlah_pengunjung" => 254,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Hutan Kota Bagansiapiapi",
                "rating" => 4.4,
                "jumlah_pengunjung" => 246,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Danau Bokuok",
                "rating" => 4.3,
                "jumlah_pengunjung" => 233,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Taman Ekowisata Mangrove kapan",
                "rating" => 4,
                "jumlah_pengunjung" => 225,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Danau Sipogas Rohul",
                "rating" => 4.2,
                "jumlah_pengunjung" => 218,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Air Terjun Gulamo (Green Canyon Kampar)",
                "rating" => 4.5,
                "jumlah_pengunjung" => 214,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Pulau Cinta",
                "rating" => 4.3,
                "jumlah_pengunjung" => 213,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Istana Sayap Pelalawan",
                "rating" => 4.4,
                "jumlah_pengunjung" => 210,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Embung Terpadu",
                "rating" => 4.4,
                "jumlah_pengunjung" => 209,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Pantai Wisata Raja Kecik",
                "rating" => 4.4,
                "jumlah_pengunjung" => 208,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Wisata Puncak Pukatan",
                "rating" => 4.3,
                "jumlah_pengunjung" => 204,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Wisata Bono",
                "rating" => 4.4,
                "jumlah_pengunjung" => 203,
                "jumlah_fasilitas" => 2
            ],
            [
                "nama_wisata" => "D'Fidau Park (Love Refi)",
                "rating" => 3.9,
                "jumlah_pengunjung" => 200,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Air terjun batu dinding",
                "rating" => 4.6,
                "jumlah_pengunjung" => 187,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Air Panas Suaman",
                "rating" => 4,
                "jumlah_pengunjung" => 185,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Taman Wisata Alam Buluh Cina",
                "rating" => 4.6,
                "jumlah_pengunjung" => 175,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Wisata Hutan Pinus Cadika",
                "rating" => 4.2,
                "jumlah_pengunjung" => 173,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Rainbow Hills (Bukit Pelangi) Pekanbaru",
                "rating" => 3.7,
                "jumlah_pengunjung" => 167,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Syafa Park - Danau Buatan Corner",
                "rating" => 4.4,
                "jumlah_pengunjung" => 162,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Air Terjun Selanca",
                "rating" => 3.9,
                "jumlah_pengunjung" => 158,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Waterboom Kahati Pasir Kota Baru",
                "rating" => 3.8,
                "jumlah_pengunjung" => 155,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Air Panas Hapanasan",
                "rating" => 3.9,
                "jumlah_pengunjung" => 154,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Istana Raja Rokan قصر سلطنة ركان",
                "rating" => 4.4,
                "jumlah_pengunjung" => 154,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "TAMAN Dataran Tinggi PEMATANG BAIH",
                "rating" => 4.3,
                "jumlah_pengunjung" => 144,
                "jumlah_fasilitas" => 3
            ],
            [
                "nama_wisata" => "Pantai Solop",
                "rating" => 4.2,
                "jumlah_pengunjung" => 143,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "ARA GARDEN",
                "rating" => 4.3,
                "jumlah_pengunjung" => 121,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Air Terjun Batu Tilam",
                "rating" => 4.6,
                "jumlah_pengunjung" => 111,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Tugu Khatulistiwa Pangkalan Lesung",
                "rating" => 4.1,
                "jumlah_pengunjung" => 108,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Puncak Kabur",
                "rating" => 4.4,
                "jumlah_pengunjung" => 105,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Desa Wisata Dayun",
                "rating" => 4.8,
                "jumlah_pengunjung" => 105,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "WISATA ALAM SIDOMULYO STABLE (WISS)",
                "rating" => 4.3,
                "jumlah_pengunjung" => 104,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Agro Wisata Bukit Naang",
                "rating" => 3.9,
                "jumlah_pengunjung" => 102,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Pemandian Sungai Mayor",
                "rating" => 4.1,
                "jumlah_pengunjung" => 96,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Gerbang Hutan Kota Pasir Pengaraian",
                "rating" => 4.5,
                "jumlah_pengunjung" => 93,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Air Terjun Pulo Simo",
                "rating" => 4.3,
                "jumlah_pengunjung" => 88,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Wisata Pulau Semut",
                "rating" => 4.4,
                "jumlah_pengunjung" => 84,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Wisata Toluk Jangkang",
                "rating" => 4,
                "jumlah_pengunjung" => 82,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Wisata Sawah Koto",
                "rating" => 4.6,
                "jumlah_pengunjung" => 79,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Eko Wisata Hutan Adat Imbo Putui",
                "rating" => 4.7,
                "jumlah_pengunjung" => 72,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "BETING ACEH",
                "rating" => 4.8,
                "jumlah_pengunjung" => 70,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Air Terjun Tujuh Tingkat",
                "rating" => 4.3,
                "jumlah_pengunjung" => 66,
                "jumlah_fasilitas" => 2
            ],
            [
                "nama_wisata" => "Tugu Ratik Togak",
                "rating" => 4.6,
                "jumlah_pengunjung" => 56,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Pemandian Pulau Sopantiang",
                "rating" => 4.2,
                "jumlah_pengunjung" => 53,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Objek Wisata Rumah Lontiok",
                "rating" => 4.4,
                "jumlah_pengunjung" => 52,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Air Terjun Panisan",
                "rating" => 4.8,
                "jumlah_pengunjung" => 48,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Batu gajah",
                "rating" => 4.5,
                "jumlah_pengunjung" => 47,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Air terjun TEMBULUN BERASAP",
                "rating" => 4,
                "jumlah_pengunjung" => 44,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Air Terjun Batang Kapas",
                "rating" => 4.4,
                "jumlah_pengunjung" => 43,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Air Terjun Sungai Osang",
                "rating" => 4.2,
                "jumlah_pengunjung" => 42,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Batu Sasak dekat Air Terjun Batang Kapas",
                "rating" => 4.5,
                "jumlah_pengunjung" => 40,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Puncak Anabawa Sipogas",
                "rating" => 4.3,
                "jumlah_pengunjung" => 38,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Suligi Hill 812 Mdpl Aliantan",
                "rating" => 4.3,
                "jumlah_pengunjung" => 35,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "TOBEK PABOUN",
                "rating" => 4.5,
                "jumlah_pengunjung" => 33,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Wisata Alam Sungai Sesirih",
                "rating" => 4.5,
                "jumlah_pengunjung" => 33,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Wisata Alam Ulukasok",
                "rating" => 4.5,
                "jumlah_pengunjung" => 31,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "MENARA 99 ISLAMIC CENTRE ROKAN HULU",
                "rating" => 4.8,
                "jumlah_pengunjung" => 30,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Kawah Biru Pekanbaru",
                "rating" => 3.5,
                "jumlah_pengunjung" => 28,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Rumah Batu Serombou",
                "rating" => 4,
                "jumlah_pengunjung" => 28,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Wisata Lubuk Ulek",
                "rating" => 4.4,
                "jumlah_pengunjung" => 28,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Bendungan Menaming",
                "rating" => 4.4,
                "jumlah_pengunjung" => 27,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Taman Wisata Rawasari",
                "rating" => 3.9,
                "jumlah_pengunjung" => 26,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Taman wisata Okura",
                "rating" => 3.8,
                "jumlah_pengunjung" => 24,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Air Terjun Bala Bala",
                "rating" => 4.3,
                "jumlah_pengunjung" => 23,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Air Terjun Lembah Sipogas",
                "rating" => 4,
                "jumlah_pengunjung" => 21,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Mentari Wisata",
                "rating" => 4.3,
                "jumlah_pengunjung" => 19,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Pantai Duto",
                "rating" => 4.3,
                "jumlah_pengunjung" => 12,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "PANORAMA BUKIT KERAMAT",
                "rating" => 3.8,
                "jumlah_pengunjung" => 11,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Air Terjun Kubupauh",
                "rating" => 3.8,
                "jumlah_pengunjung" => 10,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Air Terjun Kulon Sardepe",
                "rating" => 4.9,
                "jumlah_pengunjung" => 7,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Warung Ongku Efrizal",
                "rating" => 5,
                "jumlah_pengunjung" => 6,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Wisata Lebah Riau",
                "rating" => 4.8,
                "jumlah_pengunjung" => 5,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Objek Wisata dan Taman Pancing Danau Sulosu",
                "rating" => 5,
                "jumlah_pengunjung" => 5,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Lembah Harapan",
                "rating" => 5,
                "jumlah_pengunjung" => 4,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Air terjun batang samo",
                "rating" => 4,
                "jumlah_pengunjung" => 4,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Bukit Sunset",
                "rating" => 3.7,
                "jumlah_pengunjung" => 3,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "WISATA MUMBAK",
                "rating" => 3.7,
                "jumlah_pengunjung" => 3,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Wisata Alam Pulo hotang",
                "rating" => 4.7,
                "jumlah_pengunjung" => 3,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Wisata air geringging",
                "rating" => 4.3,
                "jumlah_pengunjung" => 3,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Padang Sabana",
                "rating" => 4.5,
                "jumlah_pengunjung" => 2,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Bukit cinta",
                "rating" => 5,
                "jumlah_pengunjung" => 2,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Danau Cik Dam",
                "rating" => 5,
                "jumlah_pengunjung" => 1,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Objek Wisata Sei Gemigi",
                "rating" => 1,
                "jumlah_pengunjung" => 1,
                "jumlah_fasilitas" => 0
            ]
        ];

        foreach ($list_wisata as $wisata) {
            Wisata::create($wisata);
        }
    }
}
