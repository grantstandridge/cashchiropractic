'use strict';
 
// get all the dependecies
var gulp = require('gulp'),
    sass = require('gulp-sass'),
    cssmin = require('gulp-minify-css'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    autoprefixer = require('gulp-autoprefixer'),
    gutil = require('gulp-util'),
    srcpath = './library';

// css
// compile sass
// export unminified to dist
// minify, add .min to filename
// export to dist
gulp.task('sass',function(){
    gulp.src(srcpath + '/scss/style.scss')
        .pipe(sass())
            .on('error', gutil.log)
        .pipe(autoprefixer({browsers:['last 2 versions']}))
            .on('error', gutil.log)
        .pipe(gulp.dest(srcpath + '/css'))
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
            .on('error', gutil.log)
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