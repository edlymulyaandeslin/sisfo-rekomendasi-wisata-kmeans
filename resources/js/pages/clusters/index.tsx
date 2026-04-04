import DataTable from '@/components/data-table';
import Modal from '@/components/modal';
import { Button } from '@/components/ui/button';
import AppLayout from '@/layouts/app-layout';
import { PaginatedData, type BreadcrumbItem, type Cluster } from '@/types';
import { formatDateToHumanReadable } from '@/utils';
import { Head, router, usePage } from '@inertiajs/react';
import { useEffect, useState } from 'react';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Cluster',
        href: '/clusters',
    },
];

export default function Index({ clusters }: { clusters: PaginatedData<Cluster> }) {
    const { props } = usePage<{ clusters: PaginatedData<Cluster>; search?: string }>();
    const initialSearch = props.search || '';
    const [search, setSearch] = useState(initialSearch);
    const [selectedCluster, setSelectedCluster] = useState<Cluster | null>(null);
    const [openDetailModal, setOpenDetailModal] = useState(false);
    const [openDeleteModal, setOpenDeleteModal] = useState(false);

    // Debounce search
    useEffect(() => {
        if (search !== initialSearch) {
            const delayDebounce = setTimeout(() => {
                router.get('/clusters', { search }, { preserveState: true, replace: true });
            }, 400);

            return () => clearTimeout(delayDebounce);
        }
    }, [search, initialSearch]);

    const handleDelete = () => {
        if (!selectedCluster) return;

        router.delete(`/clusters/${selectedCluster.id}`, {
            onSuccess: () => {
                setOpenDeleteModal(false);
                setSelectedCluster(null);
            },
            onError: (err) => {
                console.error('Gagal hapus clusters:', err);
                alert('Gagal menghapus clusters. Coba lagi.');
            },
        });
    };

    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Data Cluster" />

            <div className="flex flex-col gap-6 p-4">
                <div className="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                    <h2 className="text-2xl font-bold tracking-tight">Data Cluster</h2>
                    {/* <Link
                        href="/clusters/create"
                        className="inline-flex h-9 items-center rounded-md bg-blue-600 px-4 text-sm font-medium text-white shadow transition-colors hover:bg-blue-700"
                    >
                        + Tambah Cluster
                    </Link> */}
                </div>

                <input
                    type="text"
                    placeholder="Cari cluster..."
                    value={search}
                    onChange={(e) => setSearch(e.target.value)}
                    className="w-full rounded-md border border-gray-300 px-4 py-2 text-sm shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 dark:border-zinc-700 dark:bg-zinc-800 dark:text-white"
                />

                <DataTable
                    data={clusters.data}
                    from={clusters.from}
                    to={clusters.to}
                    total={clusters.total}
                    links={clusters.links}
                    columns={[
                        {
                            title: '#',
                            render: (_, index) => <span className="text-sm">{index}</span>,
                        },
                        {
                            title: 'Nama Cluster',
                            render: (cluster) => <span className="text-sm font-medium">{cluster.name}</span>,
                        },
                        {
                            title: 'Aksi',
                            className: 'text-right',
                            render: (cluster) => (
                                <div className="flex justify-end gap-2">
                                    <button
                                        onClick={() => {
                                            setSelectedCluster(cluster);
                                            setOpenDetailModal(true);
                                        }}
                                        className="inline-flex cursor-pointer items-center rounded-md bg-blue-100 px-3 py-1 text-xs font-medium text-blue-700 hover:bg-blue-200 dark:bg-blue-900 dark:text-blue-300 dark:hover:bg-blue-800"
                                    >
                                        Lihat
                                    </button>
                                    {/* <Link
                                        href={`/clusters/${cluster.id}/edit`}
                                        className="inline-flex items-center rounded-md bg-yellow-100 px-3 py-1 text-xs font-medium text-yellow-700 hover:bg-yellow-200 dark:bg-yellow-900 dark:text-yellow-300 dark:hover:bg-yellow-800"
                                    >
                                        Edit
                                    </Link> */}
                                    {/* <button
                                        onClick={() => {
                                            setSelectedCluster(cluster);
                                            setOpenDeleteModal(true);
                                        }}
                                        className="inline-flex cursor-pointer items-center rounded-md bg-red-100 px-3 py-1 text-xs font-medium text-red-700 hover:bg-red-200 dark:bg-red-900 dark:text-red-300 dark:hover:bg-red-800"
                                    >
                                        Hapus
                                    </button> */}
                                </div>
                            ),
                        },
                    ]}
                />
            </div>

            {/* Modal Detail Cluster (baru diimplementasikan dari UserIndex) */}
            <Modal isOpen={openDetailModal} onClose={() => setOpenDetailModal(false)} title="Detail Cluster" size="lg">
                {selectedCluster && (
                    <div className="space-y-6 rounded-lg bg-white py-6 text-sm text-gray-700 dark:bg-zinc-900 dark:text-gray-200">
                        <div className="grid grid-cols-1 gap-4 md:grid-cols-2">
                            <div className="flex flex-col">
                                <span className="text-xs text-gray-500 dark:text-gray-400">Nama Cluster</span>
                                <span className="text-base font-semibold">{selectedCluster.name}</span>
                            </div>

                            <div className="flex flex-col">
                                <span className="text-xs text-gray-500 dark:text-gray-400">Dibuat Pada</span>
                                <span className="text-base">
                                    {selectedCluster.created_at ? formatDateToHumanReadable(selectedCluster.created_at) : 'N/A'}
                                </span>
                            </div>
                            <div className="flex flex-col">
                                <span className="text-xs text-gray-500 dark:text-gray-400">Diperbarui Pada</span>
                                <span className="text-base">
                                    {selectedCluster.updated_at ? formatDateToHumanReadable(selectedCluster.updated_at) : 'N/A'}
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
                Apakah Anda yakin ingin menghapus clusters <strong className="text-red-600 dark:text-red-400">{selectedCluster?.name}</strong>?
                Tindakan ini tidak dapat dibatalkan.
            </Modal>
        </AppLayout>
    );
}
