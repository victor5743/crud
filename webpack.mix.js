const mix = require("laravel-mix");
const tailwindcss = require("tailwindcss");
require("laravel-mix-purgecss");

//Javascript
mix.js("resources/js/app.js", "public/js");
//CSS
mix.sass("resources/sass/app.scss", "public/css")
    .options({
        processCssUrls: false,
        postCss: [tailwindcss("./tailwind.config.js")]
    })
    .purgeCss({
        enabled: mix.inProduction(),
        folders: ["src", "templates"],
        extensions: ["html", "js", "php", "vue"]
    });
