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
// Tita added it
new webpack.ProvidePlugin({
    $: 'jquery',
    jQuery: 'jquery',
})

module.exports = {
    entry: './scripts/main-script.js',
    output: {
        filename: 'bundled.js',
        path: path.resolve(__dirname, 'app')
    },
    devServer: {
        before: function(app, server) {
            server._watch('./app/**/*.html')
          },
          contentBase: path.join(__dirname, 'app'),
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