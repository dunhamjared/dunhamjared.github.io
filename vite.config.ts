import { sveltekit } from '@sveltejs/kit/vite';
import tailwindcss from '@tailwindcss/vite';
import { defineConfig } from 'vite';

export default defineConfig({
    plugins: [
        tailwindcss(),
        sveltekit()
    ],
    build: {
        rollupOptions: {
            output: {
                // there were way too many chunks, so I'm bundling everything into one
                manualChunks: () => {
                    return 'everything';
                },
            }
        }
    }
});
