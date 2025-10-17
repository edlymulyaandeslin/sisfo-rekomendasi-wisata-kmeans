import DataTable from '@/components/data-table';
import Modal from '@/components/modal';
import { Button } from '@/components/ui/button';
import AppLayout from '@/layouts/app-layout';
import { PaginatedData, type BreadcrumbItem, type Wisata } from '@/types';
import { formatDateToHumanReadable } from '@/utils';
import { Head, Link, router, usePage } from '@inertiajs/react';
import { Star } from 'lucide-react';
import { useEffect, useState } from 'react';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Wisata',
        href: '/wisatas',
    },
];

export default function Index({ wisatas }: { wisatas: PaginatedData<Wisata> }) {
    const { props } = usePage<{ wisatas: PaginatedData<Wisata>; search?: string }>();
    const initialSearch = props.search || '';
    const [search, setSearch] = useState(initialSearch);
    const [selectedWisata, setSelectedWisata] = useState<Wisata | null>(null);
    const [openDetailModal, setOpenDetailModal] = useState(false);
    const [openDeleteModal, setOpenDeleteModal] = useState(false);

    // Debounce search
    useEffect(() => {
        if (search !== initialSearch) {
            const delayDebounce = setTimeout(() => {
                router.get('/wisatas', { search }, { preserveState: true, replace: true });
            }, 400);

            return () => clearTimeout(delayDebounce);
        }
    }, [search, initialSearch]);

    const handleDelete = () => {
        if (!selectedWisata) return;

        router.delete(`/wisatas/${selectedWisata.id}`, {
            onSuccess: () => {
                setOpenDeleteModal(false);
                setSelectedWisata(null);
            },
            onError: (err) => {
                console.error('Gagal hapus wisatas:', err);
                alert('Gagal menghapus wisatas. Coba lagi.');
            },
        });
    };

    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Data Wisata" />

            <div className="flex flex-col gap-6 p-4">
                <div className="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                    <h2 className="text-2xl font-bold tracking-tight">Data Wisata</h2>
                    <Link
                        href="/wisatas/create"
                        className="inline-flex h-9 items-center rounded-md bg-blue-600 px-4 text-sm font-medium text-white shadow transition-colors hover:bg-blue-700"
                    >
                        + Tambah Wisata
                    </Link>
                </div>

                <input
                    type="text"
                    placeholder="Cari wisata..."
                    value={search}
                    onChange={(e) => setSearch(e.target.value)}
                    className="w-full rounded-md border border-gray-300 px-4 py-2 text-sm shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 dark:border-zinc-700 dark:bg-zinc-800 dark:text-white"
                />

                <DataTable
                    data={wisatas.data}
                    from={wisatas.from}
                    to={wisatas.to}
                    total={wisatas.total}
                    links={wisatas.links}
                    columns={[
                        {
                            title: '#',
                            render: (_, index) => <span className="text-sm">{index}</span>,
                        },
                        {
                            title: 'Nama Wisata',
                            render: (wisata) => <span className="text-sm font-medium">{wisata.nama_wisata}</span>,
                        },
                        {
                            title: 'Rating',
                            render: (wisata) => (
                                <span className="flex items-center gap-1 text-sm font-medium">
                                    <Star className="text-yellow-400" fill="currentColor" />
                                    {Number(wisata.rating).toFixed(1)}
                                </span>
                            ),
                        },
                        {
                            title: 'Ulasan',
                            render: (wisata) => <span className="text-sm font-medium">{wisata.ulasan}</span>,
                        },
                        {
                            title: 'Jumlah Fasilitas',
                            render: (wisata) => <span className="text-sm font-medium">{wisata.jumlah_fasilitas}</span>,
                        },
                        {
                            title: 'Aksi',
                            className: 'text-right',
                            render: (wisata) => (
                                <div className="flex justify-end gap-2">
                                    <button
                                        onClick={() => {
                                            setSelectedWisata(wisata);
                                            setOpenDetailModal(true);
                                        }}
                                        className="inline-flex cursor-pointer items-center rounded-md bg-blue-100 px-3 py-1 text-xs font-medium text-blue-700 hover:bg-blue-200 dark:bg-blue-900 dark:text-blue-300 dark:hover:bg-blue-800"
                                    >
                                        Lihat
                                    </button>
                                    <Link
                                        href={`/wisatas/${wisata.id}/edit`}
                                        className="inline-flex items-center rounded-md bg-yellow-100 px-3 py-1 text-xs font-medium text-yellow-700 hover:bg-yellow-200 dark:bg-yellow-900 dark:text-yellow-300 dark:hover:bg-yellow-800"
                                    >
                                        Edit
                                    </Link>
                                    <button
                                        onClick={() => {
                                            setSelectedWisata(wisata);
                                            setOpenDeleteModal(true);
                                        }}
                                        className="inline-flex cursor-pointer items-center rounded-md bg-red-100 px-3 py-1 text-xs font-medium text-red-700 hover:bg-red-200 dark:bg-red-900 dark:text-red-300 dark:hover:bg-red-800"
                                    >
                                        Hapus
                                    </button>
                                </div>
                            ),
                        },
                    ]}
                />
            </div>

            {/* Modal Detail Wisata (baru diimplementasikan dari UserIndex) */}
            <Modal isOpen={openDetailModal} onClose={() => setOpenDetailModal(false)} title="Detail Wisata" size="lg">
                {selectedWisata && (
                    <div className="space-y-6 rounded-lg bg-white py-6 text-sm text-gray-700 dark:bg-zinc-900 dark:text-gray-200">
                        <div className="grid grid-cols-1 gap-4 md:grid-cols-2">
                            <div className="flex flex-col">
                                <span className="text-xs text-gray-500 dark:text-gray-400">Nama Wisata</span>
                                <span className="text-base font-semibold">{selectedWisata.nama_wisata}</span>
                            </div>
                            <div className="flex flex-col">
                                <span className="text-xs text-gray-500 dark:text-gray-400">Rating</span>
                                <span className="flex gap-1 text-base font-semibold">
                                    <Star className="text-yellow-400" fill="currentColor" />
                                    {Number(selectedWisata.rating).toFixed(1)}
                                </span>
                            </div>
                            <div className="flex flex-col">
                                <span className="text-xs text-gray-500 dark:text-gray-400">Ulasan</span>
                                <span className="text-base font-semibold">{selectedWisata.ulasan}</span>
                            </div>
                            <div className="flex flex-col">
                                <span className="text-xs text-gray-500 dark:text-gray-400">Jumlah Fasilitas</span>
                                <span className="text-base font-semibold">{selectedWisata.jumlah_fasilitas}</span>
                            </div>
                            <div className="flex flex-col">
                                <span className="text-xs text-gray-500 dark:text-gray-400">Dibuat Pada</span>
                                <span className="text-base">
                                    {selectedWisata.created_at ? formatDateToHumanReadable(selectedWisata.created_at) : 'N/A'}
                                </span>
                            </div>
                            <div className="flex flex-col">
                                <span className="text-xs text-gray-500 dark:text-gray-400">Diperbarui Pada</span>
                                <span className="text-base">
                                    {selectedWisata.updated_at ? formatDateToHumanReadable(selectedWisata.updated_at) : 'N/A'}
                                </span>
                            </div>
                        </div>

                        <div className="flex justify-end gap-2">
                            <Button type="button" variant={'secondary'} onClick={() => setOpenDetailModal(false)} className="cursor-pointer">
                                Tutup
                            </Button>
                        </div>
                    </div>
                )}
            </Modal>

            {/* Modal Konfirmasi Hapus */}
            <Modal
                isOpen={openDeleteModal}
                onClose={() => setOpenDeleteModal(false)}
                title="Konfirmasi Hapus"
                size="sm"
                footer={
                    <div className="flex justify-end gap-2">
                        <Button onClick={() => setOpenDeleteModal(false)} variant="secondary">
                            Batal
                        </Button>
                        <Button onClick={handleDelete} className="bg-red-700 hover:bg-red-800">
                            Hapus
                        </Button>
                    </div>
                }
            >
                Apakah Anda yakin ingin menghapus wisatas <strong className="text-red-600 dark:text-red-400">{selectedWisata?.nama_wisata}</strong>?
                Tindakan ini tidak dapat dibatalkan.
            </Modal>
        </AppLayout>
    );
}
