var gulp = require('gulp');
var autoprefixer = require('gulp-autoprefixer');
var sass = require('gulp-sass');
var compass = require('gulp-compass');
var browserSync = require('browser-sync').create();
var cssmin = require('gulp-cssmin');
var rename = require('gulp-rename');
var wiredep = require('wiredep').stream;
var concat = require('gulp-concat');
var inject = require('gulp-inject');
var mainBowerFiles = require('gulp-main-bower-files');
var uglify = require('gulp-uglify');
var plumber = require('gulp-plumber');
var gcmq = require('gulp-group-css-media-queries');
var imagemin = require('gulp-imagemin');
var babel = require('gulp-babel');


// group css media queries
gulp.task('gcmq', function () {
	gulp.src('assets/css/main.css').pipe(gcmq()).pipe(gulp.dest('assets/css/'));
});

// compress images
gulp.task('imageMin', function () {
	gulp.src('assets/img/*').pipe(imagemin()).pipe(gulp.dest('assets/img/'))
});

// browsersync server up
gulp.task('browserSync', function () {
	browserSync.init({
		proxy: 'localhost'
	});
});

gulp.task('compass', function () {
	return gulp.src('./assets/css/*.scss').pipe(plumber({
		errorHandler: function (err) {
			this.emit('end');
		}
	})).pipe(compass({
		config_file: './config.rb',
		css: './assets/css',
		sass: 'assets/css' // removed the dot-slash from here
	// })).pipe(browserSync.reload({
	// 	stream: true
	}));

});

gulp.task('autoprefixer', function () {
	return gulp.src('./assets/css/main.css')
		.pipe(autoprefixer({
			browsers: ['last 2 version'],
			cascade: true
		}))
		.pipe(gulp.dest('./assets/css/'))
		.pipe(browserSync.reload({
				stream: true
		}));
});

// var wiredepOptions = {
// 	directory: 'assets/vendor',
// 	exclude: ['jquery']
// };

gulp.task('bower', function () {
	gulp.src('./**/*.php').pipe(wiredep()).pipe(gulp.dest('./'));
});

// Add defer attribute to scripts
var transform = function (filepath, file, index, length, targetFile) {
	if ( filepath.slice(-2) == 'js' ) {
		return '<script src="' + filepath + '" defer></script>';
	} else {
		return '<link rel="stylesheet" href="' + filepath + '">';
	}
};

gulp.task('concatJSFiles', function(){
	return gulp.src(['assets/js/functions.js', 'assets/js/main.js']).pipe(babel({presets: 'env'})).pipe(concat('assets/js/app.js')).pipe(gulp.dest('./'));
});

// inject files to html comments
gulp.task('wiredep', ['concatBowerJS', 'concatJSFiles', 'concatBowerCSS'], function () {
	var target = gulp.src('./**/*.php');
	var sources = gulp.src(['assets/vendor.min.js', 'assets/js/bootstrap.min.js', 'assets/js/app.js', 'assets/vendor.min.css', 'assets/css/main.css'], {
		read: false
	});
	
	return target.pipe(inject(sources, {
		ignorePath: 'dist/',
		addRootSlash: false,
		addPrefix: '..',
		transform: transform
	})).pipe(gulp.dest('./'));
});

gulp.task('concatBowerJS', function () {
	return gulp.src('./bower.json').pipe(mainBowerFiles(['**/*.js'])).pipe(concat('assets/vendor.js')).pipe(rename({
		suffix: '.min'
	})).pipe(uglify()).pipe(gulp.dest('./'));
});

gulp.task('babel', function () {
    gulp.src(['assets/js/functions.js', 'assets/js/app.js'])
        .pipe(babel({
            presets: ['env']
        }))
		.pipe(gulp.dest('assets/js/'))
	}
);

gulp.task('concatBowerCSS', function () {
	return gulp.src('./bower.json').pipe(mainBowerFiles(['**/*.css'])).pipe(concat('assets/vendor.css')).pipe(rename({
		suffix: '.min'
	})).pipe(cssmin()).pipe(gulp.dest('.'));
});

// Minify CSS
gulp.task('minify-css', function () {
	gulp.src('assets/css/main.css').pipe(cssmin()).pipe(rename({
		suffix: '.min'
	})).pipe(gulp.dest('assets/css/'));
});

// Minify JS
gulp.task('minify-js', function () {
	return gulp.src('assets/js/app.js').pipe(uglify()).pipe(rename({
		suffix: '.min'
	})).pipe(gulp.dest('assets/js/'));
});

gulp.task('default', ['browserSync', 'compass', 'wiredep'], function () {
	gulp.watch('assets/css/**/*.scss', ['compass']);
	gulp.watch('assets/css/main.css', ['autoprefixer']);
	gulp.watch("assets/js/*.js", ['concatJSFiles']).on('change', browserSync.reload);
	gulp.watch("./**/*.php").on('change', browserSync.reload);
	gulp.watch('assets/css/main.css').on('change', browserSync.reload);
});

gulp.task('final', ['imageMin', 'compass', 'gcmq', 'minify-css', 'minify-js', 'wiredep']);