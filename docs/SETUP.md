# Project Setup Guide

## Quick Start

1. **Clone the repository**:

    ```bash
    git clone <repository-url>
    cd portfolio
    ```

2. **Open locally**:
    - Simply open `index.html` in your browser, or
    - Use a local server (recommended):
    ```bash
    npm run dev    # Opens on http://localhost:3000
    npm run start  # Runs on http://localhost:8000
    ```

## File Structure

```
portfolio/
├── index.html              # Main portfolio page
├── assets/
│   ├── css/
│   │   └── style.css       # Enhanced styling
│   ├── js/
│   │   └── script.js       # Interactive functionality
│   └── images/             # All project images
├── docs/                   # Documentation
├── .gitignore             # Git ignore file
├── package.json           # Project configuration
└── README.md             # Project documentation
```

## Key Features

### ✅ Clean Architecture

-   Professional folder structure
-   Semantic HTML5 markup
-   Modular CSS with custom properties
-   Modern JavaScript (ES6+)

### ✅ Performance Optimized

-   Lazy loading for all images
-   Intersection Observer API
-   Throttled scroll events
-   Optimized animations

### ✅ Responsive Design

-   Mobile-first approach
-   Flexible grid layouts
-   Adaptive navigation
-   Touch-friendly interactions

### ✅ Professional Features

-   Smooth scrolling navigation
-   Active section indicators
-   Loading states and transitions
-   Form validation
-   Social media integration

## Browser Support

-   Chrome 60+
-   Firefox 55+
-   Safari 12+
-   Edge 79+

## Development

For development and testing:

```bash
# Install dependencies
npm install

# Start development server
npm run dev

# Start production server
npm run start
```

## Deployment

### GitHub Pages

1. Push to GitHub repository
2. Enable GitHub Pages in repository settings
3. Select source as main branch

### Netlify

1. Connect your GitHub repository
2. Build command: (none needed)
3. Publish directory: `/`

### Vercel

1. Import from GitHub
2. Deploy with default settings

## Customization

### Personal Information

Update the following in `index.html`:

-   Name and title in hero section
-   About section details
-   Contact information
-   Social media links

### Styling

Modify `assets/css/style.css`:

-   Update CSS custom properties for colors
-   Adjust spacing and typography
-   Customize animations

### Images

Replace images in `assets/images/`:

-   `logo2.png` - Navigation logo
-   `me4.jpg` - Hero section image
-   `bob-modified.png` - About section photo
-   Project images (`1.jpg` - `7.jpg`)
-   `game.png` - Featured project image

## Support

For questions or issues, contact:

-   Email: dxngrg2058@gmail.com
-   GitHub: @dikshan
