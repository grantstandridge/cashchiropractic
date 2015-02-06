'use strict';
 
// get all the dependecies
var gulp = require('gulp'),
    sass = require('gulp-sass'),
    cssmin = require('gulp-minify-css'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    NotificationCenter = require('node-notifier'),
    srcpath = './library';

// css
// compile sass
// minify, add .min to filename
// export to dist
gulp.task('sass',function(){
    gulp.src(srcpath + '/scss/style.scss')
        .pipe(sass())
            .on('error', errorHandler)
        .pipe(cssmin())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest(srcpath + '/css'));
});

// js
// combine all scripts into one file
// add min to filename
// export to dist
gulp.task('concat', function(){
    gulp.src([srcpath + '/js/lib/*.js', srcpath + '/js/main.js'])
        .pipe(concat('script.js'))
        .pipe(uglify())
            .on('error', errorHandler)
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest(srcpath + '/js'))
});

// watch changes for scss and js
// run tasks if files change
gulp.task('watch',function(){
    gulp.watch(srcpath + '/scss/**/*.scss', ['sass']);
    gulp.watch(srcpath + '/js/**/*.js', ['concat']);
});

gulp.task('default', ['watch', 'concat', 'sass']);

function errorHandler(err){
    var notifier = new NotificationCenter.Notification();
    notifier.notify({
        title: 'wordpress.dev', /* Change this to whatever the name of the site is you're working in */
        message: 'Error: ' + err.message
    });
};