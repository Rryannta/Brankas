import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        host: '0.0.0.0',
        port: 5173,       // opsional, default port Vite
        strictPort: true, // agar error jika port sudah dipakai
    },
    plugins: [
        laravel({
            input: ['resources/sass/app.scss'],
            refresh: true,
        }),
    ],
});
