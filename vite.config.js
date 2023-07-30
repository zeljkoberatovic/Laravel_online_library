import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    build: {
        assetsInlineLimit: 0,
    },
    plugins: [
        laravel({
            input: [
                // 'resources/sass/app.css',
                'resources/app.js',
               
            ],
            refresh: true,
        }),
    
        // Automatsko osvjezavanje stranice nakon izvrsenih izmjena
        {
            name: 'blade',
            handleHotUpdate({ file, server }) {
                if(file.endsWith('.blade.php')) {
                    server.ws.send({
                        type: 'full-reload',
                        path: '*',
                    });
                }
            }
        }
    ],
});
