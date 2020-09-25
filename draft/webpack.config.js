const path = require('path');

module.exports = {
    entry: [
        './src/index.js',
    ],
    output: {
        filename: './js/main.js'
    },
    devtool: "source-map",
    module: {
        rules: [{
            test: /\.js$/,
            include: path.resolve(__dirname, 'src/js'),
            use: {
                loader: 'babel-loader',
                options: {
                    presets: 'env'
                }
            }
        },
        ]
    },
    plugins: [
    ]
};