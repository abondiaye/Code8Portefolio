module.exports = {
    mode: 'development',  // Ou 'production' ou 'none'
    // Reste de la configuration...
    module: {
      rules: [
        {
          test: /\.js$/,
          exclude: /node_modules/,
          use: {
            loader: 'babel-loader',
            options: {
              presets: ['@babel/preset-env']
            }
          }
        },
        {
          test: /\.css$/,
          use: ['style-loader', 'css-loader']
        }
      ],
    },
    // autres configurations...
  };
  