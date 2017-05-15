module.exports = function(grunt) {

	// Project configuration
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		// Global configuration variables
		dirs: {
			src: 'src',
			dest: 'public',
			css_build_folder: '/assets/css/',
			js_build_folder: '/assets/js/',
			img_build_folder: '/assets/img/'
		}
	});

	// Load config-less tasks
	grunt.loadNpmTasks('grunt-newer');

	// Load per-task config from separate files.
	grunt.loadTasks('grunt');

	// Default task(s)
	grunt.registerTask('default', '', [
		// do nothing.
	]);

	grunt.registerTask('init', 'Install Craft.', [
		'copy:craftone',
		'copy:crafttwo',
		'copy:craftthree'
	]);

	grunt.registerTask('styles', 'Do your styles.', [
		'sass:dist',
		'autoprefixer'
	]);

	grunt.registerTask('scripts', 'Do your scripts.', [
		'concat',
		'uglify'
	]);

	grunt.registerTask('images', 'Do your images.', [
		'clean',
		'svgmin'
	]);

	grunt.registerTask('plugins', 'Install plugins.', [
		'copy:pluginanchor',
		'copy:plugincachey',
		'copy:pluginemailwrap',
		'copy:pluginrefreshstring',
		'copy:plugintypogrify',
		'copy:plugincontactform',
		'copy:pluginredirectmanager',
		'copy:pluginsproutfields',
		'copy:pluginjsontransforms',
		'copy:pluginjsonreader',
		'copy:pluginfieldmanager'
	]);

	grunt.registerTask('build', 'Rebuild everything.', [
		'plugins',
		'copy:fonts',
		'grunticon',
		'styles',
		'scripts',
		'images',
		'favicons'
	]);

};
