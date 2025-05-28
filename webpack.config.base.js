const path = require('path');

module.exports = {
  // メインとなるJavaScriptファイル（エントリーポイント）
  entry: "./src/scripts/index.js",
  // ファイルの出力設定
  output: {
    clean: true,
    // 出力ファイルのディレクトリ名
    path: path.join(__dirname, '/dist/assets/js/'),
    // 出力ファイル名
    filename: "index.bundle.js",
  },
  module: {
    rules: [
      {
        // .js または .jsx ファイルを処理する
        test: /\.(js|jsx)$/, // 拡張子が .js または .jsx のファイルを対象にする
        exclude: /node_modules/,
        use: [
          {
            loader: "babel-loader",
            options: {
              presets: [
                // プリセットを指定することで、ES2020 を ES5 に変換
                "@babel/preset-env",
                "@babel/preset-react" 
              ],
            },
          },
        ],
      },
      {
        test: /\.css$/,
        use: [
          "style-loader",
          {
            loader: "css-loader",
            options: {
              url: false
            }
          }
        ]
      }
    ],
  },
  resolve: {
    extensions: ['.js', '.jsx'], // .js と .jsx を解決できるように設定
  },
  plugins: [
    // 必要に応じて追加
  ],
  // ES5(IE11等)向けの指定
  target: ["web", "es5"],
};