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
                "ulasan" => 3887,
                "jumlah_fasilitas" => 4
            ],
            [
                "nama_wisata" => "RTH Putri Kaca Mayang",
                "rating" => 4.3,
                "ulasan" => 3686,
                "jumlah_fasilitas" => 5
            ],
            [
                "nama_wisata" => "Pantai Cinta, Teluk Jering Tambang",
                "rating" => 4.1,
                "ulasan" => 3110,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Masjid Agung Madani - National Islamic Centre MAMIC Rokan Hulu",
                "rating" => 4.7,
                "ulasan" => 3069,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Labersa Water Park Riau Fantasi",
                "rating" => 4.1,
                "ulasan" => 2838,
                "jumlah_fasilitas" => 5
            ],
            [
                "nama_wisata" => "Kasang Kulim Zoo",
                "rating" => 4.2,
                "ulasan" => 2622,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Ulu Kasok",
                "rating" => 4.3,
                "ulasan" => 2246,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Wisata Danau Raja Rengat",
                "rating" => 4.3,
                "ulasan" => 1859,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Jembatan Siak I",
                "rating" => 4.4,
                "ulasan" => 1782,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Sungai Hijau 7",
                "rating" => 4.2,
                "ulasan" => 1722,
                "jumlah_fasilitas" => 2
            ],
            [
                "nama_wisata" => "Boombara Waterpark Pekanbaru",
                "rating" => 4,
                "ulasan" => 1676,
                "jumlah_fasilitas" => 5
            ],
            [
                "nama_wisata" => "Candi Muara Takus",
                "rating" => 4.4,
                "ulasan" => 1248,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Bandar Bakau Dumai",
                "rating" => 4.1,
                "ulasan" => 1180,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Rumah Singgah Tuan Kadi",
                "rating" => 4.6,
                "ulasan" => 1149,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Pemandian Sungai Ujil",
                "rating" => 4.2,
                "ulasan" => 994,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Taman Budaya Provinsi Riau",
                "rating" => 4.4,
                "ulasan" => 780,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Taman Agrowisata Tenayan Raya",
                "rating" => 4.2,
                "ulasan" => 754,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Alam Mayang",
                "rating" => 4.5,
                "ulasan" => 740,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Taman Rekreasi Alam Mayang",
                "rating" => 4.3,
                "ulasan" => 677,
                "jumlah_fasilitas" => 7
            ],
            [
                "nama_wisata" => "Science Park Universitas Riau",
                "rating" => 4.4,
                "ulasan" => 662,
                "jumlah_fasilitas" => 3
            ],
            [
                "nama_wisata" => "Rumah Jamur Nando",
                "rating" => 4.9,
                "ulasan" => 647,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Wisata Alam Pertamina Lirik Riau",
                "rating" => 4.2,
                "ulasan" => 637,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Lapangan Pasir Bengkalis",
                "rating" => 4.5,
                "ulasan" => 557,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Taman Wisata Go Green",
                "rating" => 3.9,
                "ulasan" => 547,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Air Terjun Guruh Gemurai",
                "rating" => 4.3,
                "ulasan" => 500,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Stanum Bangkinang",
                "rating" => 4,
                "ulasan" => 428,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Wisata Dakwah Okura",
                "rating" => 4.3,
                "ulasan" => 411,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Hutan Kota Pekanbaru",
                "rating" => 4.3,
                "ulasan" => 395,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "TEMBULUN KINUTAN",
                "rating" => 4.1,
                "ulasan" => 385,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Kampoeng Rabbit's Kulim",
                "rating" => 4.3,
                "ulasan" => 377,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Benteng Tujuh Lapis",
                "rating" => 4.4,
                "ulasan" => 320,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Wisata Rekreasi Danau Buatan",
                "rating" => 3.7,
                "ulasan" => 312,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Puncak Kobe",
                "rating" => 4.5,
                "ulasan" => 307,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Wisata Danau Khayangan",
                "rating" => 3.8,
                "ulasan" => 282,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Air Terjun AEK MATUA",
                "rating" => 4.3,
                "ulasan" => 265,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Danau Tajwid",
                "rating" => 4,
                "ulasan" => 254,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Hutan Kota Bagansiapiapi",
                "rating" => 4.4,
                "ulasan" => 246,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Danau Bokuok",
                "rating" => 4.3,
                "ulasan" => 233,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Taman Ekowisata Mangrove kapan",
                "rating" => 4,
                "ulasan" => 225,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Danau Sipogas Rohul",
                "rating" => 4.2,
                "ulasan" => 218,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Air Terjun Gulamo (Green Canyon Kampar)",
                "rating" => 4.5,
                "ulasan" => 214,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Pulau Cinta",
                "rating" => 4.3,
                "ulasan" => 213,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Istana Sayap Pelalawan",
                "rating" => 4.4,
                "ulasan" => 210,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Embung Terpadu",
                "rating" => 4.4,
                "ulasan" => 209,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Pantai Wisata Raja Kecik",
                "rating" => 4.4,
                "ulasan" => 208,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Wisata Puncak Pukatan",
                "rating" => 4.3,
                "ulasan" => 204,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Wisata Bono",
                "rating" => 4.4,
                "ulasan" => 203,
                "jumlah_fasilitas" => 2
            ],
            [
                "nama_wisata" => "D'Fidau Park (Love Refi)",
                "rating" => 3.9,
                "ulasan" => 200,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Air terjun batu dinding",
                "rating" => 4.6,
                "ulasan" => 187,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Air Panas Suaman",
                "rating" => 4,
                "ulasan" => 185,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Taman Wisata Alam Buluh Cina",
                "rating" => 4.6,
                "ulasan" => 175,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Wisata Hutan Pinus Cadika",
                "rating" => 4.2,
                "ulasan" => 173,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Rainbow Hills (Bukit Pelangi) Pekanbaru",
                "rating" => 3.7,
                "ulasan" => 167,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Syafa Park - Danau Buatan Corner",
                "rating" => 4.4,
                "ulasan" => 162,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Air Terjun Selanca",
                "rating" => 3.9,
                "ulasan" => 158,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Waterboom Kahati Pasir Kota Baru",
                "rating" => 3.8,
                "ulasan" => 155,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Air Panas Hapanasan",
                "rating" => 3.9,
                "ulasan" => 154,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Istana Raja Rokan قصر سلطنة ركان",
                "rating" => 4.4,
                "ulasan" => 154,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "TAMAN Dataran Tinggi PEMATANG BAIH",
                "rating" => 4.3,
                "ulasan" => 144,
                "jumlah_fasilitas" => 3
            ],
            [
                "nama_wisata" => "Pantai Solop",
                "rating" => 4.2,
                "ulasan" => 143,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "ARA GARDEN",
                "rating" => 4.3,
                "ulasan" => 121,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Air Terjun Batu Tilam",
                "rating" => 4.6,
                "ulasan" => 111,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Tugu Khatulistiwa Pangkalan Lesung",
                "rating" => 4.1,
                "ulasan" => 108,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Puncak Kabur",
                "rating" => 4.4,
                "ulasan" => 105,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Desa Wisata Dayun",
                "rating" => 4.8,
                "ulasan" => 105,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "WISATA ALAM SIDOMULYO STABLE (WISS)",
                "rating" => 4.3,
                "ulasan" => 104,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Agro Wisata Bukit Naang",
                "rating" => 3.9,
                "ulasan" => 102,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Pemandian Sungai Mayor",
                "rating" => 4.1,
                "ulasan" => 96,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Gerbang Hutan Kota Pasir Pengaraian",
                "rating" => 4.5,
                "ulasan" => 93,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Air Terjun Pulo Simo",
                "rating" => 4.3,
                "ulasan" => 88,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Wisata Pulau Semut",
                "rating" => 4.4,
                "ulasan" => 84,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Wisata Toluk Jangkang",
                "rating" => 4,
                "ulasan" => 82,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Wisata Sawah Koto",
                "rating" => 4.6,
                "ulasan" => 79,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Eko Wisata Hutan Adat Imbo Putui",
                "rating" => 4.7,
                "ulasan" => 72,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "BETING ACEH",
                "rating" => 4.8,
                "ulasan" => 70,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Air Terjun Tujuh Tingkat",
                "rating" => 4.3,
                "ulasan" => 66,
                "jumlah_fasilitas" => 2
            ],
            [
                "nama_wisata" => "Tugu Ratik Togak",
                "rating" => 4.6,
                "ulasan" => 56,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Pemandian Pulau Sopantiang",
                "rating" => 4.2,
                "ulasan" => 53,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Objek Wisata Rumah Lontiok",
                "rating" => 4.4,
                "ulasan" => 52,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Air Terjun Panisan",
                "rating" => 4.8,
                "ulasan" => 48,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Batu gajah",
                "rating" => 4.5,
                "ulasan" => 47,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Air terjun TEMBULUN BERASAP",
                "rating" => 4,
                "ulasan" => 44,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Air Terjun Batang Kapas",
                "rating" => 4.4,
                "ulasan" => 43,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Air Terjun Sungai Osang",
                "rating" => 4.2,
                "ulasan" => 42,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Batu Sasak dekat Air Terjun Batang Kapas",
                "rating" => 4.5,
                "ulasan" => 40,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Puncak Anabawa Sipogas",
                "rating" => 4.3,
                "ulasan" => 38,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Suligi Hill 812 Mdpl Aliantan",
                "rating" => 4.3,
                "ulasan" => 35,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "TOBEK PABOUN",
                "rating" => 4.5,
                "ulasan" => 33,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Wisata Alam Sungai Sesirih",
                "rating" => 4.5,
                "ulasan" => 33,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Wisata Alam Ulukasok",
                "rating" => 4.5,
                "ulasan" => 31,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "MENARA 99 ISLAMIC CENTRE ROKAN HULU",
                "rating" => 4.8,
                "ulasan" => 30,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Kawah Biru Pekanbaru",
                "rating" => 3.5,
                "ulasan" => 28,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Rumah Batu Serombou",
                "rating" => 4,
                "ulasan" => 28,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Wisata Lubuk Ulek",
                "rating" => 4.4,
                "ulasan" => 28,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Bendungan Menaming",
                "rating" => 4.4,
                "ulasan" => 27,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Taman Wisata Rawasari",
                "rating" => 3.9,
                "ulasan" => 26,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Taman wisata Okura",
                "rating" => 3.8,
                "ulasan" => 24,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Air Terjun Bala Bala",
                "rating" => 4.3,
                "ulasan" => 23,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Air Terjun Lembah Sipogas",
                "rating" => 4,
                "ulasan" => 21,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Mentari Wisata",
                "rating" => 4.3,
                "ulasan" => 19,
                "jumlah_fasilitas" => 1
            ],
            [
                "nama_wisata" => "Pantai Duto",
                "rating" => 4.3,
                "ulasan" => 12,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "PANORAMA BUKIT KERAMAT",
                "rating" => 3.8,
                "ulasan" => 11,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Air Terjun Kubupauh",
                "rating" => 3.8,
                "ulasan" => 10,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Air Terjun Kulon Sardepe",
                "rating" => 4.9,
                "ulasan" => 7,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Warung Ongku Efrizal",
                "rating" => 5,
                "ulasan" => 6,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Wisata Lebah Riau",
                "rating" => 4.8,
                "ulasan" => 5,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Objek Wisata dan Taman Pancing Danau Sulosu",
                "rating" => 5,
                "ulasan" => 5,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Lembah Harapan",
                "rating" => 5,
                "ulasan" => 4,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Air terjun batang samo",
                "rating" => 4,
                "ulasan" => 4,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Bukit Sunset",
                "rating" => 3.7,
                "ulasan" => 3,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "WISATA MUMBAK",
                "rating" => 3.7,
                "ulasan" => 3,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Wisata Alam Pulo hotang",
                "rating" => 4.7,
                "ulasan" => 3,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Wisata air geringging",
                "rating" => 4.3,
                "ulasan" => 3,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Padang Sabana",
                "rating" => 4.5,
                "ulasan" => 2,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Bukit cinta",
                "rating" => 5,
                "ulasan" => 2,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Danau Cik Dam",
                "rating" => 5,
                "ulasan" => 1,
                "jumlah_fasilitas" => 0
            ],
            [
                "nama_wisata" => "Objek Wisata Sei Gemigi",
                "rating" => 1,
                "ulasan" => 1,
                "jumlah_fasilitas" => 0
            ]
        ];

        foreach ($list_wisata as $wisata) {
            Wisata::create($wisata);
        }
    }
}
