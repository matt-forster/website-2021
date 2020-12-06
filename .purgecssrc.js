module.exports = {
  content: ['./src/*.html', './src/js/*.js'],
  css: ['./src/css/*.css'],
  extractors: [
      {
          extensions: ['html', 'svg', 'js'],
          extractor: class TailwindExtractor {
              static extract(content) {
                  return content.match(/[A-Za-z0-9-_:/]+/g) || [];
              }
          },
      },
  ],
};
