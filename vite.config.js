import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
<<<<<<< HEAD
            input: ['resources/css/app.css', 'resources/js/app.js','resources/css/login.css', 'resources/css/admHome.css', 'resources/asset/images/*.svg'],
=======


            input: ['resources/css/app.css', 'resources/js/app.js','resources/css/login.css', 'resources/asset/images/*.svg'],

>>>>>>> 07258610e01751259a182562d062d5797f08896c
            refresh: true,
        }),
        tailwindcss(),
    ],
});
 