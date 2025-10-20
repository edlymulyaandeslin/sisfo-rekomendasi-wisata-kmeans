export const formatPrice = (price: number): string => {
    return price.toLocaleString('en-US');
};

export const formatDateToHumanReadable = (date: string): string => {
    return new Date(date).toLocaleDateString('id-ID', {
        year: 'numeric',
        month: 'long',
        day: 'numeric',
        hour: '2-digit',
        minute: '2-digit',
    });
};

export const roles = [
    { value: 'admin', label: 'Admin' },
    // { value: 'user', label: 'User' },
];
