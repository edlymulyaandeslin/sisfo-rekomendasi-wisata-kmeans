import { Head, useForm } from '@inertiajs/react';
import { LoaderCircle, LockKeyhole, Mail, User } from 'lucide-react';
import { FormEventHandler } from 'react';

import InputError from '@/components/input-error';
import TextLink from '@/components/text-link';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';

type RegisterForm = {
    name: string;
    email: string;
    password: string;
    password_confirmation: string;
};

export default function Register() {
    const { data, setData, post, processing, errors, reset } = useForm<Required<RegisterForm>>({
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
    });

    const submit: FormEventHandler = (e) => {
        e.preventDefault();
        post(route('register'), {
            onFinish: () => reset('password', 'password_confirmation'),
        });
    };

    return (
        <>
            <Head title="Daftar Akun Baru" />
            <div className="flex min-h-screen flex-col items-center justify-center bg-gradient-to-br from-blue-50 via-white to-blue-100 px-6 py-12">
                <div className="w-full max-w-md rounded-3xl bg-white/80 p-8 shadow-lg ring-1 ring-gray-100 backdrop-blur-sm transition-all hover:shadow-xl">
                    {/* Header */}
                    <div className="mb-8 text-center">
                        <h1 className="text-3xl font-bold text-gray-900">Buat Akun Baru 🚀</h1>
                        <p className="mt-2 text-sm text-gray-600">Daftar sekarang dan dapatkan rekomendasi wisata sesuai minat Anda.</p>
                    </div>

                    {/* Register Form */}
                    <form className="flex flex-col gap-6" onSubmit={submit}>
                        {/* Name */}
                        <div className="grid gap-2">
                            <Label htmlFor="name" className="text-gray-800">
                                Nama Lengkap
                            </Label>
                            <div className="relative">
                                <User className="absolute top-3.5 left-3 h-4 w-4 text-gray-400" />
                                <Input
                                    id="name"
                                    type="text"
                                    required
                                    autoFocus
                                    autoComplete="name"
                                    className="pl-10"
                                    value={data.name}
                                    onChange={(e) => setData('name', e.target.value)}
                                    disabled={processing}
                                    placeholder="Nama lengkap Anda"
                                />
                            </div>
                            <InputError message={errors.name} />
                        </div>

                        {/* Email */}
                        <div className="grid gap-2">
                            <Label htmlFor="email" className="text-gray-800">
                                Email
                            </Label>
                            <div className="relative">
                                <Mail className="absolute top-3.5 left-3 h-4 w-4 text-gray-400" />
                                <Input
                                    id="email"
                                    type="email"
                                    required
                                    autoComplete="email"
                                    className="pl-10"
                                    value={data.email}
                                    onChange={(e) => setData('email', e.target.value)}
                                    disabled={processing}
                                    placeholder="nama@contoh.com"
                                />
                            </div>
                            <InputError message={errors.email} />
                        </div>

                        {/* Password */}
                        <div className="grid gap-2">
                            <Label htmlFor="password" className="text-gray-800">
                                Password
                            </Label>
                            <div className="relative">
                                <LockKeyhole className="absolute top-3.5 left-3 h-4 w-4 text-gray-400" />
                                <Input
                                    id="password"
                                    type="password"
                                    required
                                    autoComplete="new-password"
                                    className="pl-10"
                                    value={data.password}
                                    onChange={(e) => setData('password', e.target.value)}
                                    disabled={processing}
                                    placeholder="••••••••"
                                />
                            </div>
                            <InputError message={errors.password} />
                        </div>

                        {/* Password Confirmation */}
                        <div className="grid gap-2">
                            <Label htmlFor="password_confirmation" className="text-gray-800">
                                Konfirmasi Password
                            </Label>
                            <div className="relative">
                                <LockKeyhole className="absolute top-3.5 left-3 h-4 w-4 text-gray-400" />
                                <Input
                                    id="password_confirmation"
                                    type="password"
                                    required
                                    autoComplete="new-password"
                                    className="pl-10"
                                    value={data.password_confirmation}
                                    onChange={(e) => setData('password_confirmation', e.target.value)}
                                    disabled={processing}
                                    placeholder="Ulangi password"
                                />
                            </div>
                            <InputError message={errors.password_confirmation} />
                        </div>

                        {/* Submit Button */}
                        <Button
                            type="submit"
                            className="mt-4 w-full rounded-xl bg-blue-600 py-2.5 text-white transition-all hover:bg-blue-700"
                            disabled={processing}
                        >
                            {processing ? (
                                <>
                                    <LoaderCircle className="mr-2 h-4 w-4 animate-spin" />
                                    Memproses...
                                </>
                            ) : (
                                'Daftar Sekarang'
                            )}
                        </Button>

                        {/* Link to Login */}
                        <p className="mt-4 text-center text-sm text-gray-600">
                            Sudah punya akun?{' '}
                            <TextLink href={route('login')} className="font-medium text-blue-600 hover:underline">
                                Masuk di sini
                            </TextLink>
                        </p>
                    </form>
                </div>
            </div>
        </>
    );
}
