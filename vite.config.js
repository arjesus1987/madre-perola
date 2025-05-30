import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/produto.js', 'resources/css/produto.css', 'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/login.css',
                'resources/css/admHome.css',
                'resources/css/hf.css',
                'resources/asset/images/*.svg'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
