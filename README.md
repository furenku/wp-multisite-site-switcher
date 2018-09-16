# wp-multisite-site-switcher

simple php/html site switcher for wp multisites

designed as a Wordpress Child Theme.

- site-navigation.php performs the automatic redirect

## Installation


#### Add shortcode to existing theme:

1. Copy the content of **functions.php** to your theme's **functions.php**
1. Copy **site-navigation.php** to your current theme's root folder
1. Insert the shortcode "[site-switcher]" in one of your pages


#### As a child theme:

1. clone repository inside your wp's wp-content/themes directory
2. edit style.css to point to your parent theme

```css
/*
Theme Name: MultiSite child theme
Template: your-parent-theme
/
```

3. Insert the shortcode "[site-switcher]" in one of your pages
