module.exports = function(grunt) {

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		watch: {
			sass: {
				files: ["**/*.scss"],
				tasks: ['sass']
			}
		},
		sass:{
			dist: {
				options: {
					style: 'expanded'
				},
				files: {
					'assets/css/main.css': 'scss/main.scss'
				}
			}
		},
		bowercopy: {
			scss: {
				options: {
					destPrefix: 'scss/'
				},
				files: {
					'scss/': 'grout/scss/'
				}
			},
			wphelpers: {
				options: {
					destPrefix: 'src/'
				},
				files: {
					'src/Helpers/': 'wordpress-helpers/src/WordPress/'
				}
			}
		}

	});

	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-bowercopy');

	grunt.registerTask('default', ['sass']);
};