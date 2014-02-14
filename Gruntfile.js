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
			                // Keys are destinations (prefixed with `options.destPrefix`)
			                // Values are sources (prefixed with `options.srcPrefix`); One source per destination
			                // e.g. 'bower_components/chai/lib/chai.js' will be copied to 'test/js/libs/chai.js'
			                'scss/': 'grout/scss/'
			            }
			        }
		}

	});

	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-bowercopy');

	grunt.registerTask('default', ['sass']);
};