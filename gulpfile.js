var gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var sass = require('gulp-sass');

// the paths to the files
var config = {
	bootstrapDir: './Templates/Default/resources/bootstrap',
	customDir: './Templates/Default/resources/custom',
	jqueryDir: './Templates/Default/resources/jquery',
	publicDir: './public'
};

// copying the fonts from bootstrap into the public dir
gulp.task(
	'fonts',function(){
	gulp.src( config.bootstrapDir + '/fonts/bootstrap/*' )
		.pipe( gulp.dest( config.publicDir + '/fonts' ) );
});

// merge, complile and compress all scss files to only on css
gulp.task(
	'css',
	function (  ) {
		var success = [false,false]
		success[0] = gulp.src(config.customDir + '/scss/app.scss')
										 .pipe(
											 sass().on( 'error', sass.logError )
										 )
										 .pipe( gulp.dest( config.publicDir + '/css') );

		success[1] = gulp.src(config.customDir + '/scss/app.scss')
										 .pipe(
											 sass({outputStyle: 'compressed'}).on( 'error', sass.logError )
										 )
										 .pipe(
											 rename({suffix: ".min"})
										 )
										 .pipe( gulp.dest( config.publicDir + '/css') );

		return success[0] && success[1];
	}
);

// merge and compress much js file to only once
gulp.task(
	'js',function () {
	return gulp.src([
										config.jqueryDir + '/jquery.js',
										config.bootstrapDir + '/javascripts/bootstrap/transition.js',
										config.bootstrapDir + '/javascripts/bootstrap/alert.js',
										config.bootstrapDir + '/javascripts/bootstrap/button.js',
										config.bootstrapDir + '/javascripts/bootstrap/carousel.js',
										config.bootstrapDir + '/javascripts/bootstrap/collapse.js',
										config.bootstrapDir + '/javascripts/bootstrap/dropdown.js',
										config.bootstrapDir + '/javascripts/bootstrap/modal.js',
										config.bootstrapDir + '/javascripts/bootstrap/tab.js',
										config.bootstrapDir + '/javascripts/bootstrap/affix.js',
										config.bootstrapDir + '/javascripts/bootstrap/scrollspy.js',
										config.bootstrapDir + '/javascripts/bootstrap/tooltip.js',
										config.bootstrapDir + '/javascripts/bootstrap/popover.js',
										config.customDir + '/js/*.js'
									])
						 .pipe( concat('app.min.js') )
						 .pipe( uglify() )
						 .pipe( gulp.dest( config.publicDir + '/js' ) );
});

// starts all tasks
gulp.task('default',['js','css','fonts']);

// starts css task when a scss file is changed
gulp.task('css:watch', function (  ) {
	gulp.watch([
							 config.bootstrapDir + '/stylesheets/bootstrap/*.scss',
							 config.customDir + '/scss/*.scss'
						 ], ['css'] );
});

// starts js task when a js file is changed
gulp.task('js:watch', function (  ) {
	gulp.watch(config.customDir + '/js/*.js',['js']);
});
