import { Button } from '@/components/ui/button';
import AppLayout from '@/layouts/app-layout';
import type { BreadcrumbItem, Cluster, IterasiCluster } from '@/types';
import { Head, router, useForm } from '@inertiajs/react';
import { Aperture, Star } from 'lucide-react';
import { useEffect, useState } from 'react';

const breadcrumbs: BreadcrumbItem[] = [{ title: 'K-means', href: '/kmeans' }];

export default function Index({ clusters, clustering_data }: { clusters: Cluster[]; clustering_data: IterasiCluster[] }) {
    const { post, processing } = useForm({});
    const [lastIterasi, setLastIterasi] = useState(1);
    const [wisataPopuler, setWisataPopuler] = useState<IterasiCluster[]>([]);
    const [wisataPotensial, setWisataPotensial] = useState<IterasiCluster[]>([]);
    const [wisataKurangDiminati, setWisataKurangDiminati] = useState<IterasiCluster[]>([]);
    const isClustered = clustering_data.length > 0;

    const handleSubmit = (e: React.FormEvent) => {
        e.preventDefault();
        post('/kmeans');
    };
    const handleReset = (e: React.FormEvent) => {
        e.preventDefault();
        router.delete(route('kmeans.destroy'));
    };

    useEffect(() => {
        if (clustering_data.length > 0) {
            const lastIterasi = clustering_data[0]?.jumlah_iterasi;
            const wisataPopuler = clustering_data.filter((data) => data.cluster_id == 1);
            const wisataPotensial = clustering_data.filter((data) => data.cluster_id == 2);
            const wisataKurangDiminati = clustering_data.filter((data) => data.cluster_id == 3);

            setLastIterasi(lastIterasi);
            setWisataPopuler(wisataPopuler);
            setWisataPotensial(wisataPotensial);
            setWisataKurangDiminati(wisataKurangDiminati);
        }
    }, [clustering_data]);

    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="K-Means Clustering" />

            <section className="min-h-screen w-full bg-gradient-to-b from-gray-50 to-white px-6 py-12 transition-colors duration-300 md:px-12 lg:px-20 dark:from-gray-900 dark:to-gray-950">
                {/* Header Section */}
                <header className="mb-12 border-b border-gray-200 pb-6 dark:border-gray-800">
                    <h1 className="text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                        📊 Pengelompokan Wisata Berdasarkan Clustering
                    </h1>
                    <p className="mt-2 text-lg text-gray-600 dark:text-gray-400">
                        Analisis hasil K-Means Clustering untuk mengelompokkan wisata berdasarkan tingkat popularitas dan fasilitas.
                    </p>

                    <ul className="mt-4 list-disc px-6 text-base text-gray-700 dark:text-gray-300">
                        {clusters.map((cluster, index) => (
                            <li key={index} className="leading-relaxed">
                                {cluster.name}
                            </li>
                        ))}
                    </ul>
                </header>

                {/* Action Form */}
                <div className="flex flex-col items-start justify-between gap-6 rounded-2xl bg-white/80 p-6 shadow-md ring-1 ring-gray-200 backdrop-blur-sm transition-all hover:shadow-lg md:flex-row md:items-center dark:bg-gray-900/70 dark:ring-gray-800">
                    <div>
                        <h2 className="text-xl font-semibold text-gray-900 dark:text-white">Aksi Clustering</h2>
                        <p className="text-sm text-gray-600 dark:text-gray-400">Lakukan pengelompokan baru atau reset hasil sebelumnya.</p>
                    </div>

                    <form onSubmit={isClustered ? handleReset : handleSubmit} className="w-full md:w-auto">
                        <Button
                            type="submit"
                            disabled={processing}
                            className={`flex items-center gap-2 px-6 py-2 text-base font-medium transition-colors duration-200 ${
                                isClustered
                                    ? 'bg-red-600 hover:bg-red-700 dark:bg-red-700 dark:hover:bg-red-600'
                                    : 'bg-blue-600 hover:bg-blue-700 dark:bg-blue-700 dark:hover:bg-blue-600'
                            }`}
                        >
                            {processing ? (
                                isClustered ? (
                                    'Mereset...'
                                ) : (
                                    'Mengelompokkan...'
                                )
                            ) : (
                                <>
                                    {isClustered ? 'Reset Clustering' : 'Lakukan Pengelompokan'}
                                    <Aperture className="h-4 w-4" />
                                </>
                            )}
                        </Button>
                    </form>
                </div>

                {/* Hasil Clustering */}
                {clustering_data.length > 0 && (
                    <div className="mt-16">
                        <div className="mb-10">
                            <h2 className="text-3xl font-bold text-gray-900 dark:text-white">📈 Hasil Pengelompokan</h2>
                            <p className="mt-2 text-gray-700 dark:text-gray-400">
                                Proses iterasi terakhir: <b className="text-gray-900 dark:text-gray-100">{lastIterasi}</b>
                            </p>
                        </div>

                        <div className="grid gap-10">
                            {[
                                {
                                    title: '🏝️ Wisata Ramai & Populer',
                                    data: wisataPopuler,
                                    border: 'border-green-500 dark:border-green-600',
                                    bg: 'bg-green-50 dark:bg-green-900/20',
                                },
                                {
                                    title: '🌄 Wisata Potensial',
                                    data: wisataPotensial,
                                    border: 'border-yellow-500 dark:border-yellow-600',
                                    bg: 'bg-yellow-50 dark:bg-yellow-900/20',
                                },
                                {
                                    title: '🌧️ Wisata Kurang Diminati',
                                    data: wisataKurangDiminati,
                                    border: 'border-red-500 dark:border-red-600',
                                    bg: 'bg-red-50 dark:bg-red-900/20',
                                },
                            ].map((cluster, i) => (
                                <div
                                    key={i}
                                    className={`overflow-x-auto rounded-2xl  border-2 ${cluster.border} ${cluster.bg} shadow-sm transition-all duration-300 hover:shadow-xl`}
                                >
                                    <div className="border-b border-gray-200 bg-white/70 px-6 py-4 backdrop-blur dark:border-gray-800 dark:bg-gray-900/50">
                                        <h3 className="text-xl font-semibold text-gray-900 dark:text-white">{cluster.title}</h3>
                                    </div>

                                    <div className="h-80 overflow-y-auto">
                                        <table className="min-w-full text-left text-sm">
                                            <thead className="bg-gray-100 text-xs font-semibold text-gray-700 uppercase dark:bg-gray-800 dark:text-gray-300">
                                                <tr>
                                                    <th className="px-6 py-3">No</th>
                                                    <th className="px-6 py-3">Lokasi</th>
                                                    <th className="px-6 py-3">Nama Wisata</th>
                                                    <th className="px-6 py-3">Rating</th>
                                                    <th className="px-6 py-3">Jumlah Pengunjung</th>
                                                    <th className="px-6 py-3">Jumlah Fasilitas</th>
                                                    <th className="px-6 py-3 text-center">Cluster ID</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {cluster.data.length > 0 ? (
                                                    cluster.data.map((data, index) => (
                                                        <tr
                                                            key={index}
                                                            className="border-b border-gray-200 transition-colors hover:bg-white/70 dark:border-gray-800 dark:hover:bg-gray-800/70"
                                                        >
                                                            <td className="px-6 py-3">{index + 1}</td>
                                                            <td className="px-6 py-3 font-medium text-gray-900 dark:text-gray-100 capitalize">
                                                                {data.wisata.location}
                                                            </td>
                                                            <td className="px-6 py-3 font-medium text-gray-900 dark:text-gray-100">
                                                                {data.wisata.nama_wisata}
                                                            </td>
                                                            <td className="px-6 py-3">
                                                                <span className="flex gap-1">
                                                                    <Star className="text-yellow-400" fill="currentColor" size={20} />
                                                                    {Number(data.wisata.rating).toFixed(1)}
                                                                </span>
                                                            </td>
                                                            <td className="px-6 py-3">{data.wisata.jumlah_pengunjung}</td>
                                                            <td className="px-6 py-3">{data.wisata.jumlah_fasilitas}</td>
                                                            <td className="px-6 py-3 text-center font-semibold">{data.cluster_id}</td>
                                                        </tr>
                                                    ))
                                                ) : (
                                                    <tr>
                                                        <td colSpan={6} className="py-4 text-center text-gray-500 italic dark:text-gray-400">
                                                            Tidak ada data dalam cluster ini
                                                        </td>
                                                    </tr>
                                                )}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            ))}
                        </div>
                    </div>
                )}
            </section>
        </AppLayout>
    );
}
