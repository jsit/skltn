/*global module:false*/
module.exports = function(grunt) {

	const sass = require('node-sass');

	// Project configuration.
	grunt.initConfig({
		// Metadata.
		meta: {
			version: '0.1.0'
		},
		watch: {
			gruntfile: {
				files: [
					'stylesheets/scss/**/*.scss',
					'!**/vendor/**/*.scss'
				],
				tasks: 'sass'
			},
			templates: {
				files: [
					'**/*.php',
					'**/*.html',
					'!**/vendor/**/*.php',
					'!**/vendor/**/*.html'
				],
				options: {
					livereload: true
				}
			},
			css: {
				files: [
					'**/*.css',
					'**/vendor/**/*.css'
				],
				options: {
					livereload: true
				}
			},
		},
		sass: {
			expanded: {
				options: {
					implementation: sass,
					style: 'expanded',
					sourcemap: true,
					includePaths: [
						'bower_components/bourbon/app/assets/stylesheets',
						'bower_components/neat/app/assets/stylesheets',
					],
				},
				files: {
					'stylesheets/css/style.css': 'stylesheets/scss/style.scss',
					'stylesheets/css/style-editor.css': 'stylesheets/scss/style-editor.scss',
				}
			},
			compressed: {
				options: {
					implementation: sass,
					style: 'compressed',
					sourcemap: true,
					includePaths: [
						'bower_components/bourbon/app/assets/stylesheets',
						'bower_components/neat/app/assets/stylesheets',
					],
				},
				files: {
					'stylesheets/css/style.min.css': 'stylesheets/scss/style.scss',
					'stylesheets/css/style-editor.min.css': 'stylesheets/scss/style-editor.scss',
				}
			},
		},
	});

	// These plugins provide necessary tasks.
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-sass');

	// Default task.
	grunt.registerTask('default', ['sass', 'watch']);

};
