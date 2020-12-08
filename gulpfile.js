"use strict";

const gulp = require('gulp');
const sass = require('gulp-sass');

sass.compiler = require('node-sass');

gulp.task('default', watch);

gulp.task('sass', compilaSass);

function compilaSass() {
    return gulp
        .src("styles/sass/style.scss")
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(gulp.dest("styles/css/"));
};

function watch() {
    gulp.watch("styles/sass/**/*.scss", compilaSass);
}

//Para executar o gulp basta digitar "gulp" no terminal