/*
 |----------------------------------------------------------------
 | Sip Options
 |----------------------------------------------------------------
 |
 | To configure sip edit this file.
 |
 */

var options = {

    // Base directory for your resource.
    assetsDir: './resources/assets/',

    // Base directory for your compiled/minified assets.
    publicDir: './public/assets/',

    // Directory for your unprocessed scss files relative to the resources directory.
    scssDir: 'scss/',

    // Directory for your styles.css relative to the public directory.
    cssDir: 'css/',

    // Directory for your javascript files relative to the resources directory.
    jsSrcDir: 'js/',

    // Directory for your concatenated app.js relative to the public directory.
    jsDir: 'js/',

    // File names for the unprocessed files.
    mainScssInput: 'styles.scss',
    mainJsInput: 'main.js',

    // File names for the processed/concatenated/minified files.
    scssOutput: 'styles.css',
    scssMinifiedOutput: 'styles.min.css',
    jsConcatOutput: 'app.js',
    jsUglifiedOutput: 'app.min.js',

    /**
     * Files to watch for changes an trigger a reload.
     * (scssOutput and jsConcatOutput are watched by default)
     */
    filesToWatch: [
        './resources/**/*.php'
    ]

};

module.exports = options;