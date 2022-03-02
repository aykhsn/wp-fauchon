const gulp = require('gulp');
const autoprefixer = require("gulp-autoprefixer");
const sass = require('gulp-sass')(require('sass'));

gulp.task('sass',  () => {
    return gulp.src( 'sass/*.scss' )
        .pipe( sass().on( 'error', sass.logError ) )
        .pipe( autoprefixer( {}))
        .pipe( gulp.dest( '../' ));
});

gulp.task( 'default', () => {
    gulp.watch( 'sass/*.scss', gulp.series( 'sass' ) );
});