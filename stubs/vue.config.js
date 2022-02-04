const is_dev = process.env.NODE_ENV === 'development';

const path = require('path');
function resolve(dir) {
    return path.join(__dirname, dir)
}

module.exports = {
    outputDir: 'public',
    pages: {
        index: {
            // page 的入口
            entry: 'resources/js/app.js',
            // 图标来源
            favicon: 'resources/template/favicon.ico',
            // 模板来源
            template: is_dev ? 'resources/template/index.html' : 'resources/template/app.blade.php',
            // 模板在 public/index.html 的输出
            filename: is_dev ? 'index.html' : resolve('resources/views/app.blade.php'),
            // template 中的 title 标签需要是 <title><%= htmlWebpackPlugin.options.title %></title>
            title: process.env.APP_NAME,
        },
    },
    chainWebpack: config => {
        config.resolve.alias.set('@', resolve('resources/js'));
    },
    // 使用插件
    configureWebpack: {
        plugins: [],
    }
}
