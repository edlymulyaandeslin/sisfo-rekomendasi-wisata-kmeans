import AppLayout from '@/layouts/app-layout';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/react';
import { Boxes, TramFront, Users } from 'lucide-react';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: '/dashboard',
    },
];

interface DashboardProps {
    totalUser: number;
    totalWisata: number;
    totalCluster: number;
}

export default function Dashboard({ totalUser, totalWisata, totalCluster }: DashboardProps) {
    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Dashboard" />

            <div className="flex flex-col gap-6 p-4">
                <h1 className="text-2xl font-bold tracking-tight">Dashboard</h1>

                {/* Cards */}
                <div className="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    <div className="flex items-center gap-4 rounded-xl border bg-white p-6 shadow-sm dark:border-zinc-700 dark:bg-zinc-900">
                        <div className="flex h-12 w-12 items-center justify-center rounded-lg bg-blue-100 text-blue-600 dark:bg-blue-900 dark:text-blue-300">
                            <Users className="h-6 w-6" />
                        </div>
                        <div>
                            <p className="text-sm text-gray-500 dark:text-gray-400">Total Users</p>
                            <p className="text-2xl font-bold text-gray-900 dark:text-gray-100">{totalUser}</p>
                        </div>
                    </div>

                    <div className="flex items-center gap-4 rounded-xl border bg-white p-6 shadow-sm dark:border-zinc-700 dark:bg-zinc-900">
                        <div className="flex h-12 w-12 items-center justify-center rounded-lg bg-green-100 text-green-600 dark:bg-green-900 dark:text-green-300">
                            <TramFront className="h-6 w-6" />
                        </div>
                        <div>
                            <p className="text-sm text-gray-500 dark:text-gray-400">Total Wisata</p>
                            <p className="text-2xl font-bold text-gray-900 dark:text-gray-100">{totalWisata}</p>
                        </div>
                    </div>

                    <div className="flex items-center gap-4 rounded-xl border bg-white p-6 shadow-sm dark:border-zinc-700 dark:bg-zinc-900">
                        <div className="flex h-12 w-12 items-center justify-center rounded-lg bg-purple-100 text-purple-600 dark:bg-purple-900 dark:text-purple-300">
                            <Boxes className="h-6 w-6" />
                        </div>
                        <div>
                            <p className="text-sm text-gray-500 dark:text-gray-400">Total Cluster</p>
                            <p className="text-2xl font-bold text-gray-900 dark:text-gray-100">{totalCluster}</p>
                        </div>
                    </div>
                </div>

                {/* Placeholder for future content (chart, table, etc.) */}
                <div className="rounded-xl border bg-white p-6 shadow-sm dark:border-zinc-700 dark:bg-zinc-900">
                    <h2 className="text-lg font-semibold text-gray-900 dark:text-gray-100">Aktivitas Terbaru</h2>
                    <p className="mt-2 text-sm text-gray-500 dark:text-gray-400">Belum ada aktivitas terbaru untuk ditampilkan.</p>
                </div>
            </div>
        </AppLayout>
    );
}
