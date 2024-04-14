import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/style.css',
                'public/assets/js/accion.js',
                'public/assets/js/best_rated.js',
                'public/assets/js/comedia.js',
                'public/assets/js/indivual.js',
                'public/assets/js/proximamente.js',
                'public/assets/js/proximamente_only.js',
                'public/assets/js/romance.js',
                'public/assets/js/script.js',
                'public/assets/js/terror.js',
                'public/assets/js/top_100.js',
                'public/assets/css/style.css',
                'public/assets/images/hero-bg.jpg'

            ],
            refresh: true,
        }),
    ],
});
