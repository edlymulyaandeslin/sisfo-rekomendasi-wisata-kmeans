import { Head, useForm } from '@inertiajs/react';
import { LoaderCircle, LockKeyhole, Mail } from 'lucide-react';
import { FormEventHandler } from 'react';

import InputError from '@/components/input-error';
import TextLink from '@/components/text-link';
import { Button } from '@/components/ui/button';
import { Checkbox } from '@/components/ui/checkbox';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';

type LoginForm = {
    email: string;
    password: string;
    remember: boolean;
};

interface LoginProps {
    status?: string;
    canResetPassword: boolean;
}

export default function Login({ status, canResetPassword }: LoginProps) {
    const { data, setData, post, processing, errors, reset } = useForm<Required<LoginForm>>({
        email: '',
        password: '',
        remember: false,
    });

    const submit: FormEventHandler = (e) => {
        e.preventDefault();
        post(route('login'), {
            onFinish: () => reset('password'),
        });
    };

    return (
        <>
            <Head title="Masuk ke Akun" />
            <div className="flex min-h-screen flex-col items-center justify-center bg-gradient-to-br from-blue-50 via-white to-blue-100 px-6 py-12">
                <div className="w-full max-w-md rounded-3xl bg-white/80 p-8 shadow-lg ring-1 ring-gray-100 backdrop-blur-sm transition-all hover:shadow-xl">
                    {/* Header */}
                    <div className="mb-8 text-center">
                        <h1 className="text-3xl font-bold text-gray-900">Selamat Datang 👋</h1>
                        <p className="mt-2 text-sm text-gray-600">Masuk ke akun Anda untuk mengelola data dan analisis wisata.</p>
                    </div>

                    {/* Status message */}
                    {status && <div className="mb-4 rounded-lg bg-green-50 py-2 text-center text-sm font-medium text-green-700">{status}</div>}

                    {/* Login Form */}
                    <form className="flex flex-col gap-6" onSubmit={submit}>
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
                                    autoFocus
                                    autoComplete="email"
                                    className="pl-10"
                                    value={data.email}
                                    onChange={(e) => setData('email', e.target.value)}
                                    placeholder="nama@contoh.com"
                                />
                            </div>
                            <InputError message={errors.email} />
                        </div>

                        {/* Password */}
                        <div className="grid gap-2">
                            <div className="flex items-center justify-between">
                                <Label htmlFor="password" className="text-gray-800">
                                    Password
                                </Label>
                                {canResetPassword && (
                                    <TextLink href={route('password.request')} className="text-sm text-blue-600 hover:underline">
                                        Lupa password?
                                    </TextLink>
                                )}
                            </div>
                            <div className="relative">
                                <LockKeyhole className="absolute top-3.5 left-3 h-4 w-4 text-gray-400" />
                                <Input
                                    id="password"
                                    type="password"
                                    required
                                    autoComplete="current-password"
                                    className="pl-10"
                                    value={data.password}
                                    onChange={(e) => setData('password', e.target.value)}
                                    placeholder="••••••••"
                                />
                            </div>
                            <InputError message={errors.password} />
                        </div>

                        {/* Remember Me */}
                        <div className="flex items-center space-x-3">
                            <Checkbox id="remember" name="remember" checked={data.remember} onClick={() => setData('remember', !data.remember)} />
                            <Label htmlFor="remember" className="text-gray-700">
                                Ingat saya
                            </Label>
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
                                'Masuk Sekarang'
                            )}
                        </Button>
                    </form>
                </div>
            </div>
        </>
    );
}
