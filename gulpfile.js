var gulp = require('gulp');
var sass = require('gulp-sass');

// Run
//gulp
gulp.task('sass', function() {
	return gulp.src('./assets/sass/*.scss')
		.pipe(sass())
		.pipe(gulp.dest('./assets/css'));
});

gulp.task('watch', function() {
	gulp.watch('./assets/sass/*.scss', ['sass']);
});

gulp.task('default', ['sass', 'watch']);