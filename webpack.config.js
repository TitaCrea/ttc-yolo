const path = require( 'path' )
const webpack = require('webpack')

const postCSSPlugins = [
    // first, via npm we install the plugins we need,
    // then we list these pkgs here
    require('postcss-import'),
    require('postcss-mixins'),
    require('postcss-simple-vars'),
    require('postcss-nested'),
    require('autoprefixer'),
]

module.exports = {
    entry: './assets/scripts/main-script.js',
    output: {
        filename: 'bundled.js',
        path: path.resolve(__dirname, 'dist')
    },
    plugins: [
        new webpack.ProvidePlugin({
            $: 'jquery',
            jQuery: 'jquery',
        }),
    ],
    devServer: {
        before: function(app, server) {
            server._watch('./ttc-yolo/**/*.php')
          },
          contentBase: path.join(__dirname, 'ttc-yolo'),
          hot: true,
          port: 10023,
          host: '0.0.0.0'
          },
    mode: 'development',
    module: {
        rules: [
            {
                test: /\.css$/i,
                use: [
                    'style-loader', 
                    { loader: 'css-loader',
                        options: { url: false }
                    },
                    { loader: 'postcss-loader',
                        options: { postcssOptions: {
                                    plugins: postCSSPlugins // we define a variable > see top of the file 'const'
                                   }
                        }
                    }]
            }
        ]
    }
}