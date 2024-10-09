let project_folder = "soft-finance-theme";
let source_folder = "#src";
let fs = require('fs');

let path = {
	build: {
		themecss: project_folder + "/../../soft-finance-theme/", 
		css: project_folder + "/../../soft-finance-theme/",		
		js: project_folder + "/../../soft-finance-theme/js/",
		img: project_folder + "/../../soft-finance-theme/img/",
		svg: project_folder + "/../../soft-finance-theme/icons/",
		php: project_folder + "/../../soft-finance-theme/",
		fonts: project_folder + "/../../soft-finance-theme/fonts/",
	},
	src: { 
		themecss: source_folder + "/*.css",
		css: source_folder + "/sass/**/*.scss", 
		js: source_folder + "/js/*.js",
		img: source_folder + "/img/**/*.{jpg,png,svg,gif,ico}",
		svg: source_folder + "/svg-white/*.svg",
		fonts: source_folder + "/fonts/*.ttf",
		php: source_folder + "/**/*.php",
	},
	watch: {
		html: source_folder + "/**/*.html",
		css: source_folder + "/sass/**/*.scss",
		themecss: source_folder + "/*.css",
		js: source_folder + "/js/**/*.js",
		php: source_folder + "/**/*.php",
		svg: source_folder + "/svg-white/*.svg",
		img: source_folder + "/img/**/*.{jpg,png,svg,gif,ico}"
	},
	clean: "./" + project_folder + "/"
}

let { src, dest } = require('gulp'),
	sourcemaps = require('gulp-sourcemaps'),
	gulp = require('gulp'),
	browsersync = require("browser-sync").create(),
	fileinclude = require("gulp-file-include"),
	del = require("del"),
	scss = require("gulp-sass"),
	autoprefixer = require("gulp-autoprefixer"),
	group_media = require("gulp-group-css-media-queries"),
	clean_css = require("gulp-clean-css"),
	rename = require("gulp-rename"),
	uglify = require("gulp-uglify-es").default, 
	svgSprite = require('gulp-svg-sprite'),
	ttf2woff = require('gulp-ttf2woff'),
	ttf2woff2 = require('gulp-ttf2woff2'),
	fonter = require('gulp-fonter'),
	newer = require('gulp-newer');


function browserSync(params) {
	browsersync.init({
		//server: {
		//	baseDir: "./" + project_folder + "/"
		//},
		proxy: {
			target: "http://it-softfinans.ru",
		},
		//port: 3000,
		notify: false
	})
}
 

function css() {
	return src(path.src.css)
		.pipe(
			scss({
				outputStyle: "expanded"
			})
		)
		.pipe(
			group_media()
		) 
        .pipe(autoprefixer([
            "Android 2.3",
            "Android >= 4",
            "Chrome >= 20",
            "Firefox >= 24",
            "Explorer >= 8",
            "iOS >= 6",
            "Opera >= 12",
            "Safari >= 6"
        ])) 
		.pipe(dest(path.build.css))
		.pipe(clean_css())
		.pipe(
			rename({
				extname: ".min.css"
			})
		)
		.pipe(dest(path.build.css))
		.pipe(browsersync.stream())
}
function php() {
	return src(path.src.php) 
		.pipe(dest(path.build.php))
		.pipe(browsersync.stream())
}
function js() {
	return src(path.src.js)
		.pipe(fileinclude())
		.pipe(sourcemaps.init())
		.pipe(dest(path.build.js))
		.pipe(
			uglify()
		)
		.pipe(
			rename({
				extname: ".min.js"
			})
		) 
		.pipe(sourcemaps.write())
		.pipe(dest(path.build.js))
		.pipe(browsersync.stream())
}
function images() {
	return src(path.src.img)
		.pipe(newer(path.build.img)) 
		.pipe(dest(path.build.img))
		.pipe(src(path.src.img))
		.pipe(newer(path.build.img)) 
		.pipe(dest(path.build.img))
}
function fonts() {
	src(path.src.fonts)
		.pipe(ttf2woff())
		.pipe(dest(path.build.fonts));
	return src(path.src.fonts)
		.pipe(ttf2woff2())
		.pipe(dest(path.build.fonts));
};
gulp.task('otf2ttf', function () {
	return src([source_folder + '/fonts/*.otf'])
		.pipe(fonter({
			formats: ['ttf']
		}))
		.pipe(dest(source_folder + '/fonts/'));
})
gulp.task('svgSprite', function () {
	return gulp.src([source_folder + '/iconsprite/*.svg']) 
	.pipe(svgSprite({
		mode: {
			symbol: {
				sprite: '../icons/icons.svg',
				example: true
			}
		},
		shape: {
			id: {
				separator: '',
				generator: 'svg-'
			},
			transform: [
				{
					svgo: {
						plugins: [
							{ removeXMLNS: true },
							{ convertPathData: false },
							{ removeViewBox: false },
						]
					}
				}
			]
		},
		svg: {
			rootAttributes: {
				style: 'display: none;',
				'aria-hidden': true
			},
			xmlDeclaration: false
		}
	}))
	.pipe(dest(path.build.img))
})
function fontsStyle(params) {
	let file_content = fs.readFileSync(source_folder + '/sass/base/typography/_typography.scss');
	if (file_content == '') {
		fs.writeFile(source_folder + '/sass/base/typography/_typography.scss', '', cb);
		return fs.readdir(path.build.fonts, function (err, items) {
			if (items) {
				let c_fontname;
				for (var i = 0; i < items.length; i++) {
					let fontname = items[i].split('.');
					fontname = fontname[0];
					if (c_fontname != fontname) {
						fs.appendFile(source_folder + '/sass/base/typography/_typography.scss', '@include font("' + fontname + '", "' + fontname + '", "400", "normal");\r\n', cb);
					}
					c_fontname = fontname;
				}
			}
		})
	}
}
function cb() { }
function watchFiles(params) { 
	gulp.watch([path.watch.css], css);
	gulp.watch([path.watch.js], js);
	gulp.watch([path.watch.img], images);
	gulp.watch([path.watch.php], php);
}
function clean(params) {
	return del(path.clean);
}
let build = gulp.series(clean, gulp.parallel(js, php, css, images, fonts), fontsStyle);
let watch = gulp.parallel(build, watchFiles, browserSync);

exports.fontsStyle = fontsStyle;
exports.fonts = fonts;
exports.images = images;
exports.js = js;
exports.php = php;
exports.css = css; 
exports.build = build;
exports.watch = watch;
exports.default = watch;