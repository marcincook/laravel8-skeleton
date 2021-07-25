const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */
// mix.webpackConfig(
//     {
//         test: /\.(scss)$/,
//         use: [{
//             // inject CSS to page
//             loader: 'style-loader'
//         }, {
//             // translates CSS into CommonJS modules
//             loader: 'css-loader'
//         }, {
//             // Run postcss actions
//             loader: 'postcss-loader',
//             options: {
//                 // `postcssOptions` is needed for postcss 8.x;
//                 // if you use postcss 7.x skip the key
//                 postcssOptions: {
//                     // postcss plugins, can be exported to postcss.config.js
//                     plugins: function () {
//                         return [
//                             require('autoprefixer')
//                         ];
//                     }
//                 }
//             }
//         }, {
//             // compiles Sass to CSS
//             loader: 'sass-loader'
//         }]
//     }
// );

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/scss/app.scss', 'public/css')
    .sourceMaps();
    // .postCss('resources/css/app.css', 'public/css', [
    //     //
    // ]);
