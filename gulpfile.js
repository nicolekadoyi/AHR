const gulp = require('gulp');
// const sass = require('gulp-sass');
const sass = require('gulp-sass')(require('sass'));
const concat= require('gulp-concat');
const terser= require('gulp-terser');
const browserSync = require('browser-sync').create();
var rename = require('gulp-rename');
const {src, dest, parallel, series}   = require('gulp');
var localhost_link= "http://localhost/galenahall/pilates/";

//.....................................   == compile scss into css style and style.min == ..........................
function style() { 
    var config= {};
    config.outputStyle= 'compressed';
	return gulp.src('./assets/stylesheets/main.scss') 
    .pipe(sass()) 
    .pipe(sass(config))
    .pipe(gulp.dest('./dist/css/'))
    .pipe(browserSync.stream());   
} 

//.....................................   == js file  == ..........................
function script() {
    return gulp.src([
        './node_modules/bootstrap/dist/js/bootstrap.js',
        './node_modules/slick-carousel/slick/slick.min.js',
        './assets/javascript/*.js'
    ])
    .pipe(concat('main.js'))
    .pipe(terser())
    .pipe(gulp.dest('./dist/js'))
    .pipe(browserSync.stream());   
    
}

// .....................................   == Live Server == ..........................
function watch() {
    browserSync.init({ 
        sever: {
            baseDir: './'
        }
    },{
        proxy: localhost_link
    });
    gulp.watch('./assets/stylesheets/**/*.scss', style);
    gulp.watch('./**/*.php').on('change', browserSync.reload);
    gulp.watch('./assets/javascript/**/*.js', script); 
}

exports.style = style; 
exports.script = script;
exports.watch = watch;   
exports.default = watch;   


/*
==================
    SETUP GULP:
=================

    ->  npm install --global gulp-cli	

    ->  npm init -y

    ->  npm i --save-dev gulp sass gulp-sass gulp-rename gulp-concat gulp-terser browser-sync

    ->  npm install bootstrap@5.1.3 --save

    ->  npm install slick-carousel

    ->  gulp
*/



