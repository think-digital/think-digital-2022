module.exports = {
  content: [
    './*.{php,html,js}',
    './inc/*.{php,html,js}',
    './templates/*.{php,html,js}',
  ],
  theme: {
    extend: {
      backgroundSize: {
        '25%': '25%',
      },
      aspectRatio: {
        '4/3': '4 / 3',
      },
      colors: {
        current: 'currentColor',
        'emerald': {
          '50': '#f5fcf8',
          '100': '#eafaf1',
          '200': '#cbf2db',
          '300': '#abebc6',
          '400': '#6cdb9b',
          '500': '#2dcc70',
          '600': '#29b865',
          '700': '#229954',
          '800': '#1b7a43',
          '900': '#166437'
        },
        'midnight': {
          '50': '#f4f4f6',
          '100': '#e8e9ed',
          '200': '#c6c9d3',
          '300': '#a4a8b9',
          '400': '#5f6784',
          '500': '#1b264f',
          '600': '#182247',
          '700': '#141d3b',
          '800': '#10172f',
          '900': '#0d1327'
        },
        'twitter': '#1DA1F2',
        'linkedin': '#0077B5',
        'google': '#4285F4',
        'facebook': '#1877F2',
        'whatsapp': '#25D366',
      },
    },
  },
  plugins: [],
}
