# Tiviser WordPress Theme

A custom WordPress theme converted from the Tiviser IPTV static HTML website.

## Installation

1. Copy the `tiviser-theme` folder to your WordPress `/wp-content/themes/` directory
2. Copy all assets (CSS, JS, images, fonts) from the original site to the `assets` folder
3. Activate the theme in WordPress Admin > Appearance > Themes

## Required Assets Migration

You need to copy the following folders from the original site to the theme's `assets` folder:

```
Original Location → Theme Location
css/ → assets/css/
js/ → assets/js/
img/ → assets/img/
dist/ → assets/css/ and assets/js/
libs/ → assets/libs/
cf-fonts/ → assets/fonts/
npm/bootstrap@5.3.3/dist/ → assets/css/ and assets/js/
```

## Theme Features

- Responsive Bootstrap 5 design
- Custom navigation walker for Bootstrap menus
- Facebook Pixel integration
- Shopify cart integration
- Custom post type for channels
- Page templates for different content types
- Countdown timer functionality
- Modal integration for pricing

## Page Templates

- `index.php` - Homepage template
- `page.php` - Default page template
- `page-channels.php` - Channels listing page
- `page-contact.php` - Contact page template

## Setup Instructions

### 1. Create WordPress Pages

Create the following pages in WordPress Admin:

- **Homepage**: Set as static front page
- **Channels**: Use "Channels Page" template
- **Contact**: Use "Contact Page" template

### 2. Configure Menus

1. Go to Appearance > Menus
2. Create a new menu called "Primary Menu"
3. Add pages: Accueil (Homepage), Chaines (Channels), and a custom link for "Réduction de 75%" (leave URL empty)
4. Assign to "Primary Menu" location

### 3. Upload Logo

1. Go to Appearance > Customize > Site Identity
2. Upload your logo or ensure `assets/img/logo-w.png` exists

### 4. Configure Custom Fields (Optional)

If you want to make content editable through WordPress admin, consider using Advanced Custom Fields plugin for:
- Pricing information
- Channel logos
- Testimonials
- Feature lists

## File Structure

```
tiviser-theme/
├── assets/
│   ├── css/
│   ├── js/
│   ├── img/
│   ├── fonts/
│   └── libs/
├── inc/
│   └── nav-walker.php
├── functions.php
├── style.css
├── index.php
├── header.php
├── footer.php
├── page.php
├── page-channels.php
├── page-contact.php
└── README.md
```

## Customization

### Colors and Styling
- Main brand color: #ef0e2a (red)
- Secondary color: #ee273c
- Modify `assets/css/style.home-page.css` for styling changes

### JavaScript Functionality
- Timer: `assets/js/timer-offre.js`
- Modal: `assets/js/modalShopify.js`
- Shopify integration URLs are in the modal JavaScript

### Payment Integration
The theme maintains the original Shopify integration. Cart URLs redirect to:
- Base URL: `https://tiviser.online/cart/`
- Product IDs are configured in `modalShopify.js`

## Browser Support

- Modern browsers (Chrome, Firefox, Safari, Edge)
- Mobile responsive design
- Bootstrap 5 compatibility

## Dependencies

- WordPress 5.0+
- PHP 7.4+
- Bootstrap 5.3.3
- jQuery 3.3.1+

## Notes

- Facebook Pixel tracking is included in the theme
- All original functionality has been preserved
- The theme is ready for further customization and WordPress features
- Consider adding caching plugins for better performance
