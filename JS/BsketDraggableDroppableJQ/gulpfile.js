let gulp = require('gulp'),
    terser = require('gulp-terser-js'),
    csso = require('gulp-csso'),
    htmlMin = require('gulp-htmlmin'),
    rename = require('gulp-rename'),
    BS = import('browser-sync');







function optJs(done){
    gulp.src('js/*.js')
        .pipe(gulp.dest('./dist/js'))
        .pipe(terser())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('./dist/js'));

    done();
}

function optHtml(done){
    gulp.src('index.html')
        .pipe(htmlMin({collapseWhitespace: true}))
        .pipe(gulp.dest('dist'));

    done();
}

function end (done){
    console.log (`completed`);
    done();
}



gulp.task('default',  optJs, optHtml);


