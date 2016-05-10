module.exports = function(grunt) {

	grunt.initConfig({
	pkg: grunt.file.readJSON('package.json'),
	
	concat: {
		dist: {
			src: [
				'library/js/libs/*.js',
				'library/js/scripts.js'
			],
			dest: 'library/js/production.js',
		}
	},
	uglify: {
		build: {
			src: 'library/js/production.js',
			dest: 'library/js/production.min.js'
		}
	},
	compass: {
		dist: {
			options: {
				sassDir: 'library/scss',
				cssDir: 'library/css'
			}
		}
	},
	autoprefixer: {
		dist: {
			files: {
				'library/css/production-style.css': 'library/css/style.css'
			}
		}
	},
	svgstore: {
		options: {
			prefix : 'shape-',
			cleanup: false,
			svg: {
				style: "display: none;"
			}
		},
		default : {
			files: {
				'library/svg-defs.svg' : ['library/svg/*.svg'],
			}
		}
	},
	cssmin: {
		target: {
			files: {
				'library/css/production-style.min.css': 'library/css/production-style.css'
			}
		}
	},
	watch: {
		options: {
			livereload:false,
		},
		scripts: {
			files: ['library/js/*.js'],
			tasks: ['concat', 'uglify', 'notify:scripts'],
			options: {
				spawn: false,
			},
		},
		css: {
			files: '**/*.scss',
			tasks: ['compass', 'autoprefixer', 'cssmin']
		},
	},
	notify: {
		css: {
			options: {
				title: 'Task Complete',
				message: 'Compass/Autoprefixer finished compiling!'
			}
		},
		scripts: {
			options: {
				title: 'Task Complete',
				message: 'Scripts finished compiling!'
			}
		}
	}
	});

	require('load-grunt-tasks')(grunt);
	grunt.loadNpmTasks('grunt-notify');

	grunt.registerTask('default', ['watch']);

};