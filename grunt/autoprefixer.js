module.exports = function(grunt) {

	grunt.config('autoprefixer', {
		options: {
			browsers: ['last 4 version']
		},
		multiple_files: {
			expand: true,
			flatten: true,
			src: '<%= dirs.dest %><%= dirs.css_build_folder %>*.css',
			dest: '<%= dirs.dest %><%= dirs.css_build_folder %>'
		}
	});

	grunt.loadNpmTasks('grunt-autoprefixer');

};
