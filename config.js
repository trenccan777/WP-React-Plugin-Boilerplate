const config = {
  //wordpress project dev url
  proxyUrl: 'http://127.0.0.1',
  sourcePaths: {
    front: ['./src/front.js'],
    admin: ['./src/admin.js'],

    // react: ["@babel/polyfill", "./src/react.tsx"],
  },
};

module.exports = config;
