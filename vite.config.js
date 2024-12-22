import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
            buildDirectory: 'build' // Tambahkan ini
        }),
    ],
    build: {
        // Tambahkan konfigurasi build
        outDir: 'public/build',
        assetsDir: '',
        manifest: true,
        rollupOptions: {
            input: ['resources/css/app.css', 'resources/js/app.js']
        }
    }
})