import { defineConfig, loadEnv } from 'vite';
import laravel from 'laravel-vite-plugin';

export default ({mode}) => {
    process.env = { ...process.env, ...loadEnv(mode, process.cwd()) };

    return defineConfig({
        server: {
            origin: 'http://' + process.env.VITE_APP_DOMAIN + ':5137',
            host: true,
            port: 5137,
            cors: true,
        },
        plugins: [
            laravel({
                input: ['resources/js/app.js', 'resources/css/app.css'],
                refresh: true,
            })
        ],
    })
};
