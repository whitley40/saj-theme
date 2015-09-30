var gulp = require('gulp'),
sass = require('gulp-sass'),
autoprefixer = require('gulp-autoprefixer'),
minifycss = require('gulp-minify-css'),
uglify = require('gulp-uglify'),
rename = require('gulp-rename'),
concat = require('gulp-concat'),
maps = require('gulp-sourcemaps'),
mamp = require('gulp-mamp'),
browsersync = require('browser-sync').create(),
del = require('del');

/* compiling the sass (with maps) */

gulp.task('compileSass', function() {
    return gulp.src('src/scss/styles.scss')
    .pipe(maps.init())
    .pipe(sass())
    .pipe(maps.write('../maps'))
    .pipe(rename('style.css'))
    .pipe(gulp.dest('../wp-content/themes/saj-theme'));
});


/* autoprefix the css */

gulp.task('addPrefix', ['compileSass'], function() {
    return gulp.src('../wp-content/themes/saj-theme/style.css')
    .pipe(autoprefixer())
    .pipe(gulp.dest('../wp-content/themes/saj-theme'));
});

/* minify the css */

gulp.task('minifyCss', ['addPrefix'], function(){
    return gulp.src("../wp-content/themes/saj-theme/style.css")
    .pipe(minifycss())
    .pipe(gulp.dest("../wp-content/themes/saj-theme/style.css")); 
})

/* concat the javascripts */

gulp.task("concatScripts", function(){
    return gulp.src([
        'src/js/**/*.js',
        '!src/js/app.js'])
    .pipe(maps.init())
    .pipe(concat("app.js"))
    .pipe(maps.write('../maps'))
    .pipe(gulp.dest('../wp-content/themes/saj-theme/js'));
});


/* minify javascript once its been through concat */

gulp.task("minifyScripts", ["concatScripts"],  function(){
    return gulp.src("../wp-content/themes/saj-theme/js/app.js")
    .pipe(uglify())
    .pipe(rename('app.js'))
    .pipe(gulp.dest('../wp-content/themes/saj-theme/js'));
});

/* move images across */

gulp.task('moveImgs', function() {
    return gulp.src('src/imgs/**')
    .pipe(gulp.dest('../wp-content/themes/saj-theme/imgs'));
});

/* move fonts across */

gulp.task('moveFonts', function() {
    return gulp.src('src/fonts/**')
    .pipe(gulp.dest('../wp-content/themes/saj-theme/fonts'));
});

/* mamp startup for wordpress & broswersync functionality */

var options = {};

gulp.task('start', function(cb){
    mamp(options, 'start', cb);
});
 
gulp.task('stop', function(cb){
    mamp(options, 'stop', cb);
});
 
gulp.task('mamp', ['start']);

// browsersync for wp 

gulp.task('browsersync-wp', ['mamp'], function() {
    //watch files
    var files = [
        '../wp-content/themes/saj-theme/**/*.*'
    ];
 
    //initialize browsersync
    browsersync.init(files, {
    //browsersync with a php server
    proxy: 'localhost:8888'
    });

    gulp.watch(files).on('change', browsersync.reload);

});


/* setting up a clean */

gulp.task('clean', function(){
    del(['../wp-content/themes/saj-theme'], {force: true});
});

/* gulp commands */

gulp.task('serve-wp',['browsersync-wp']);

gulp.task("wordpress", ["minifyScripts","minifyCss",'moveImgs','moveFonts'], function() {
    return gulp.src(['src/*.php'])
            .pipe(gulp.dest('../wp-content/themes/saj-theme/'));
});

/* gulp default */

gulp.task("default", ["clean", "wordpress"], function(){
    gulp.start("serve-wp");
});


