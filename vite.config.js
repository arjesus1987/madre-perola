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
                'resources/asset/images/*.svg', 
                    'resources/css/homesite.css',  'resources/asset/imgs/*.jpg', 'resources/asset/imgs/*.jpeg', 'resources/asset/imgs/*.png',
                    'resources/asset/video/*.mov',],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
