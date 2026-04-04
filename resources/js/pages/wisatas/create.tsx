import AppLayout from '@/layouts/app-layout';
import type { BreadcrumbItem } from '@/types';
import { Head, useForm } from '@inertiajs/react';

import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';

const breadcrumbs: BreadcrumbItem[] = [
    { title: 'Wisata', href: '/wisatas' },
    { title: 'Create', href: '/wisatas/create' },
];

export default function Create() {
    const { data, setData, post, processing, errors } = useForm({
        nama_wisata: '',
        location: '',
        rating: '',
        jumlah_pengunjung: '',
        jumlah_fasilitas: '',
    });

    const handleSubmit = (e: React.FormEvent) => {
        e.preventDefault();
        post('/wisatas');
    };

    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Tambah Wisata" />

            <section className="w-full px-6 py-10 md:px-12 lg:px-20">
                <div className="mb-10">
                    <h1 className="text-4xl font-bold">Tambah Wisata</h1>
                    <p className="mt-2 text-base text-muted-foreground">Masukkan informasi wisatas baru pada form berikut.</p>
                </div>

                <form onSubmit={handleSubmit} className="grid grid-cols-1 gap-8 md:grid-cols-2">
                    {/* nama_wisata */}
                    <div>
                        <Label htmlFor="nama_wisata">Nama Wisata</Label>
                        <Input
                            id="nama_wisata"
                            value={data.nama_wisata}
                            onChange={(e) => setData('nama_wisata', e.target.value)}
                            placeholder="Nama Wisata"
                        />
                        {errors.nama_wisata && <p className="mt-1 text-sm text-red-500">{errors.nama_wisata}</p>}
                    </div>

                    {/* location */}
                    <div>
                        <Label htmlFor="location">Lokasi <small className='text-gray-500 italic'>(Provinsi)</small></Label>
                        <Input
                            id="location"
                            value={data.location}
                            onChange={(e) => setData('location', e.target.value)}
                            placeholder="Lokasi Wisata"
                        />
                        {errors.location && <p className="mt-1 text-sm text-red-500">{errors.location}</p>}
                    </div>

                    {/* rating */}
                    <div>
                        <Label htmlFor="rating">Rating</Label>
                        <Input
                            id="rating"
                            type="number"
                            value={data.rating}
                            onChange={(e) => setData('rating', e.target.value)}
                            placeholder="Ex: 4,2"
                            max={5}
                        />
                        {errors.rating && <p className="mt-1 text-sm text-red-500">{errors.rating}</p>}
                    </div>
                    {/* jumlah_pengunjung */}
                    <div>
                        <Label htmlFor="jumlah_pengunjung">Jumlah Pengunjung</Label>
                        <Input
                            id="jumlah_pengunjung"
                            type="number"
                            value={data.jumlah_pengunjung}
                            onChange={(e) => setData('jumlah_pengunjung', e.target.value)}
                            placeholder="Ex: 1020"
                        />
                        {errors.jumlah_pengunjung && <p className="mt-1 text-sm text-red-500">{errors.jumlah_pengunjung}</p>}
                    </div>
                    {/* jumlah_fasilitas */}
                    <div>
                        <Label htmlFor="jumlah_fasilitas">Jumlah Fasilitas</Label>
                        <Input
                            id="jumlah_fasilitas"
                            type="number"
                            value={data.jumlah_fasilitas}
                            onChange={(e) => setData('jumlah_fasilitas', e.target.value)}
                            placeholder="Ex: 4"
                        />
                        {errors.jumlah_fasilitas && <p className="mt-1 text-sm text-red-500">{errors.jumlah_fasilitas}</p>}
                    </div>

                    {/* Tombol Submit */}
                    <div className="mt-4 flex justify-end md:col-span-2">
                        <Button type="submit" disabled={processing}>
                            {processing ? 'Menyimpan...' : 'Simpan'}
                        </Button>
                    </div>
                </form>
            </section>
        </AppLayout>
    );
}
