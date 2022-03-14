const { src, dest } = require('gulp');
const concat = require('gulp-concat');

const cssBundle = ()=>
	src([
		'public/css/app.css',
		'public/guest/app.css',
	])
	.pipe(concat('mycss.css'))
	.pipe(dest('public/css'));

exports.cssBundle = cssBundle;