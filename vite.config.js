import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['public/css/app.php', 'resources/js/app.js'],
            refresh: ['public/css/**'],
        }),
    ],
});
