import AppLayout from '@/layouts/app-layout';
import type { BreadcrumbItem, Wisata } from '@/types';
import { Head, useForm } from '@inertiajs/react';

import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';

const breadcrumbs: BreadcrumbItem[] = [
    { title: 'Wisata', href: '/wisatas' },
    { title: 'Edit', href: '/wisatas/edit' },
];

export default function Edit({ wisata }: { wisata: Wisata }) {
    const { data, setData, processing, put, errors } = useForm({
        nama_wisata: wisata.nama_wisata || '',
        rating: wisata.rating || '',
        ulasan: wisata.ulasan || '',
        jumlah_fasilitas: wisata.jumlah_fasilitas || '',
    });

    const handleSubmit = (e: React.FormEvent) => {
        e.preventDefault();

        put(route('wisatas.update', wisata.id));
    };

    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Edit Wisata" />

            <section className="w-full px-6 py-10 md:px-12 lg:px-20">
                <div className="mb-10">
                    <h1 className="text-4xl font-bold">Edit Wisata</h1>
                    <p className="mt-2 text-base text-muted-foreground">Ubah informasi wisatas pada form berikut.</p>
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

                    {/* ulasan */}
                    <div>
                        <Label htmlFor="ulasan">Ulasan</Label>
                        <Input
                            id="ulasan"
                            type="number"
                            value={data.ulasan}
                            onChange={(e) => setData('ulasan', e.target.value)}
                            placeholder="Ex: 1020"
                        />
                        {errors.ulasan && <p className="mt-1 text-sm text-red-500">{errors.ulasan}</p>}
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
