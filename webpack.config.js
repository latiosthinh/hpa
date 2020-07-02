const path = require('path');

module.exports = {
    mode: 'production',
    entry: [
        // path.resolve(__dirname, 'assets/js/elementor/blogposts.js'),
        path.resolve(__dirname, 'js/star.js'),
    ],
    output: {
        filename: 'script.min.js',
        path: path.resolve(__dirname, 'js'),
    },
};
