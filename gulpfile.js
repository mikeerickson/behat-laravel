/* Gulpfile
 * Mike Erickson
 */

var gulp   = require('gulp'),
  notify   = require('gulp-notify'),
  behat    = require('gulp-behat'),
  filelog  = require("gulp-filelog");

gulp.task('behat', function() {
	var options = {debug: false};
	gulp.src('behat.yml')
		.pipe(behat('', options))
		.on('error', notify.onError({
			title: "Testing Failed",
			message: "Error(s) occurred during testing..."
		}));
});


// set watch task to look for changes in test files
gulp.task('watch', function () {
	gulp.watch('./app/tests/**/*.php', ['behat']);
});

// The default task (called when you run `gulp` from cli)
gulp.task('default', ['behatphpunit', 'watch']);
