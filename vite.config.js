import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
               
                'resources/views/themes/spacestore/assets/css/main.css',
                'resources/views/themes/spacestore/assets/plugins/jqueryui/jquery-ui.css',

                'resources/views/themes/spacestore/assets/js/main.js',
                'resources/views/themes/spacestore/assets/plugins/jqueryui/jquery-ui.min.js',
            ],
            refresh: true,
        }),
    ],
});
