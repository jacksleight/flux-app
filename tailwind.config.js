import { variantExtract } from './vendor/jacksleight/blade-tailor/tailwind.helpers.js';

export default {
    content: {
        files: [
            "./resources/**/*.blade.php",
            "./resources/**/*.js",
            "./resources/**/*.vue",
            "./resources/tailor.php",
            "./vendor/livewire/flux-pro/stubs/**/*.blade.php",
            "./vendor/livewire/flux/stubs/**/*.blade.php",
        ],
        extract: {
            php: variantExtract,
        },
    },
    theme: {
        fontFamily: {
            'sans': 'Comfortaa',
        },
        extend: {
            boxShadow: {
                glow: '0 0 10px 0 theme("colors.cyan.400/0.8"), inset 0 0 10px 0 theme("colors.cyan.400/0.8")',
                drop: 'inset 0 0 5px 0 theme("colors.black/0.1")',
            },
        },
    },
    plugins: [],
}

