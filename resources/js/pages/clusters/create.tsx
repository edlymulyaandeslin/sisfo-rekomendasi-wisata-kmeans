import AppLayout from '@/layouts/app-layout';
import type { BreadcrumbItem } from '@/types';
import { Head, useForm } from '@inertiajs/react';

import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';

const breadcrumbs: BreadcrumbItem[] = [
    { title: 'Cluster', href: '/clusters' },
    { title: 'Create', href: '/clusters/create' },
];

export default function Create() {
    const { data, setData, post, processing, errors } = useForm({
        name: '',
    });

    const handleSubmit = (e: React.FormEvent) => {
        e.preventDefault();
        post('/clusters');
    };

    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Tambah Cluster" />

            <section className="w-full px-6 py-10 md:px-12 lg:px-20">
                <div className="mb-10">
                    <h1 className="text-4xl font-bold">Tambah Cluster</h1>
                    <p className="mt-2 text-base text-muted-foreground">Masukkan informasi clusters baru pada form berikut.</p>
                </div>

                <form onSubmit={handleSubmit} className="grid grid-cols-1 gap-8 md:grid-cols-2">
                    {/* name */}
                    <div>
                        <Label htmlFor="name">Nama Cluster</Label>
                        <Input id="name" value={data.name} onChange={(e) => setData('name', e.target.value)} placeholder="Nama Cluster" />
                        {errors.name && <p className="mt-1 text-sm text-red-500">{errors.name}</p>}
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
