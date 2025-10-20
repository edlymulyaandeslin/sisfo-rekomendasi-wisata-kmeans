import { type SharedData } from '@/types';
import { Head, Link, usePage } from '@inertiajs/react';

export default function Welcome() {
    const { auth } = usePage<SharedData>().props;

    return (
        <>
            <Head title="Sistem Informasi Rekomendasi Wisata Riau">
                <link rel="preconnect" href="https://fonts.bunny.net" />
                <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
            </Head>

            <div className="flex min-h-screen flex-col bg-[#FDFDFC] text-[#1b1b18] dark:bg-[#0a0a0a] dark:text-[#EDEDEC]">
                {/* Header */}
                <header className="w-full border-b border-[#19140015] dark:border-[#3E3E3A]">
                    <nav className="mx-auto flex max-w-6xl items-center justify-between px-6 py-4">
                        <h1 className="text-lg font-semibold tracking-tight">K-Means Clustering</h1>
                        <div className="flex items-center gap-4 text-sm">
                            {auth.user ? (
                                <Link href={route('dashboard')} className="rounded-md bg-blue-600 px-4 py-2 text-white hover:bg-blue-700">
                                    Dashboard
                                </Link>
                            ) : (
                                <>
                                    <Link href={route('login')} className="rounded-md px-4 py-2 hover:text-blue-600">
                                        Masuk
                                    </Link>
                                </>
                            )}
                        </div>
                    </nav>
                </header>

                {/* Hero Section */}
                <main className="flex flex-1 items-center justify-center px-6">
                    <div className="mx-auto max-w-3xl text-center">
                        <h2 className="mb-4 text-3xl leading-tight font-bold md:text-5xl">
                            Sistem Informasi <br />
                            <span className="text-blue-600">Rekomendasi Wisata di Riau</span>
                        </h2>
                        <p className="mb-8 text-base text-gray-600 md:text-lg dark:text-gray-300">
                            Platform berbasis web yang membantu pengguna menemukan destinasi wisata terbaik di Provinsi Riau. Sistem ini menggunakan
                            algoritma <strong>K-Means Clustering</strong> untuk mengelompokkan dan merekomendasikan tempat wisata secara cerdas dan
                            terpersonalisasi.
                        </p>

                        {!auth.user && (
                            <div className="flex justify-center gap-4">
                                <Link href={route('login')} className="rounded-md bg-blue-600 px-6 py-3 text-white shadow hover:bg-blue-700">
                                    Masuk
                                </Link>
                            </div>
                        )}
                        {auth.user && (
                            <div>
                                <Link href={route('dashboard')} className="rounded-md bg-blue-600 px-6 py-3 text-white shadow hover:bg-blue-700">
                                    Pergi ke Dashboard
                                </Link>
                            </div>
                        )}
                    </div>
                </main>

                {/* Footer */}
                <footer className="border-t border-[#19140015] py-4 text-center text-xs text-gray-500 dark:border-[#3E3E3A]">
                    &copy; {new Date().getFullYear()} Sistem Informasi Rekomendasi Wisata Riau Menggunakan K-Means Clustering
                </footer>
            </div>
        </>
    );
}
