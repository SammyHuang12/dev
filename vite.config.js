import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
                'resources/js/app.js',
                'resources/scss/modules/resume.scss', // resume 專用
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            usePolling: true,
        },
    },
});
