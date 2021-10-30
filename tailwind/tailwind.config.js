/* eslint-disable linebreak-style */
const defaultTheme = require( 'tailwindcss/defaultTheme' );
const colors = require('tailwindcss/colors');

module.exports = {
	mode: 'jit',
	future: {},
	purge: [ './theme/**/*.php', './theme/**/*.js' ],
	theme: {
		screens: {
			'xs': '375px',
			'mxl': '1400px',
			...defaultTheme.screens,
		},
		borderRadius: {
		'4xl' : '3.125rem',
		},	  
		extend: {
			fontFamily: {
				sans: [ "'Playfair Display', sans-serif", ...defaultTheme.fontFamily.sans ],
				body: ["'Montserrat', serif"],
				playfair: [ 'Playfair Display', 'sans-serif'],
				montserrat: ['Montserrat', 'serif'],
			},
			colors: {
				transparent: 'transparent',
				current: 'currentColor',
				black: colors.black,
				white: colors.white,
				gray: colors.coolGray,
				red: colors.red,
				yellow: colors.amber,
				blue: colors.blue,
				primary: {
					DEFAULT: '#847A6A',
				},
				secondary: {
					light: '#A28959',
					DEFAULT: '#A28959',
					dark: '#51452d',
				},
				accent: {
					light: '#F8F8F8',
					DEFAULT: '#E1E1E1',
					dark: '#777777',
				},
			},
			fontSize: {
				'xs': '.75rem',
				'sm': '.875rem',
				'tiny': '.875rem',
				'base': '1rem',
				'lg': '1.125rem',
				'xl': '1.25rem',
				'2xl': '1.5rem',
				'3xl': '1.875rem',
				'4xl': '2.25rem',
				'5xl': '3rem',
				'6xl': '4rem',
				'7xl': '5rem',
			},
			padding: {
				sm: '8px',
				md: '16px',
				lg: '40px',
				xl: '60px',
			},
			borderWidth: {
				DEFAULT: '1px',
				'0': '0',
				'2': '2px',
			    '3': '3px',
				'4': '4px',
				'6': '6px',
				'8': '8px',
			},
			borderRadius: {
				'none': '0',
				'sm': '0.125rem',
				DEFAULT: '0.19rem',
				DEFAULT: '3px',
				'md': '0.375rem',
				'lg': '0.5rem',
				'full': '9999px',
				'large': '12px',
			},
			minWidth: {
				'btn': '12.5rem',
				'0': '0',
				'1/4': '25%',
				'1/2': '50%',
				'3/4': '75%',
				'full': '100%',
			   }
		},		
		backgroundColor: (theme) => ({
			...theme('colors'),
		  }),
		borderColor: (theme) => ({
			...theme('colors'),
		  }),
		container: {
			center: true,
		},
	},
	variants: {},
	plugins: [
		require( '@tailwindcss/aspect-ratio' ),
		require( '@tailwindcss/forms' ),
		// require( '@tailwindcss/line-clamp' ),
		// require( '@tailwindcss/typography' ),
	],
};
