Apex Certification Company Website
A professional, responsive website for Apex Certification Company Limited built with Laravel, featuring ISO certification services, training programs, and competency management solutions.

🚀 Features
Professional Design: Modern, responsive layout with gradient themes and animations

Multi-page Structure: Home, About, Services, and Contact pages

ISO Certification Services: Comprehensive certification services for various standards

Training Programs: Professional development and auditor training

Contact Management: Functional contact form with validation

SEO Optimized: Meta tags, Open Graph, and structured data

Mobile Responsive: Fully responsive design for all devices

📋 Pages
Home: Hero section with video background, services overview, accreditations, testimonials

About: Company overview, mission, vision, business approach, organizational structure

Services: ISO certification services, training programs, service areas by industry

Contact: Contact form, office information, business hours, location map

🛠️ Technology Stack
Backend: Laravel 10.x

Frontend: Bootstrap 5.3, Font Awesome 6.0

Styling: Custom CSS with CSS variables

Fonts: Google Fonts (Montserrat, Playfair Display, Inter, Source Sans Pro)

Icons: Font Awesome

JavaScript: Vanilla JS with Bootstrap components

📦 Installation
Prerequisites
PHP 8.1 or higher

Composer

Node.js and NPM

MySQL/PostgreSQL/SQLite

Setup Instructions
Clone the repository

bash
git clone https://github.com/isaiah-david/apex-certification-website.git
cd apex-certification-website
Install PHP dependencies

bash
composer install
Install frontend dependencies

bash
npm install
Environment setup

bash
cp .env.example .env
php artisan key:generate
Configure environment variables
Edit .env file with your database configuration:

env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=apex_certification
DB_USERNAME=your_username
DB_PASSWORD=your_password
Run migrations

bash
php artisan migrate
Build frontend assets

bash
npm run build
Create storage link

bash
php artisan storage:link
Serve the application

bash
php artisan serve
Visit http://localhost:8000 to view the website.

🎨 Customization
Colors and Themes
The project uses CSS custom properties for easy theming. Modify the color scheme in resources/views/layouts/app.blade.php:

css
:root {
    --primary-color: #1a365d;
    --secondary-color: #2b6cb0;
    --gold-color: #d4af37;
    /* Add your custom colors */
}
Adding New Pages
Create a new controller: php artisan make:controller NewPageController

Add route in routes/web.php

Create blade template in resources/views/

Update navigation in layout file

Content Updates
Text Content: Edit respective blade files in resources/views/

Images: Add to public/images/ or storage/app/public/images/

Icons: Use Font Awesome classes or add custom SVG icons

📁 Project Structure
text
apex-certification-website/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── HomeController.php
│   │       ├── AboutController.php
│   │       ├── ServicesController.php
│   │       └── ContactController.php
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       ├── home.blade.php
│       ├── about.blade.php
│       ├── services.blade.php
│       └── contact.blade.php
├── routes/
│   └── web.php
├── public/
│   ├── css/
│   ├── js/
│   └── images/
└── storage/
    └── app/
        └── public/
            ├── icons/
            └── images/
🌐 Deployment
For Production
Environment Configuration

bash
APP_ENV=production
APP_DEBUG=false
Optimize Application

bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
Set up web server (Apache/Nginx) to point to the public directory

Deployment Platforms
Shared Hosting: Upload files via FTP, set document root to public

VPS/Cloud: Use Laravel Forge, Ploi, or manual setup

PaaS: Heroku, Laravel Vapor, Railway

📞 Contact Information
Apex Certification Company Limited

Address:

Phone: 

Email: davidoghenefejiroisaiah@gmail.com

Business Hours: Monday-Friday 8:00 AM - 5:00 PM, Saturday 9:00 AM - 1:00 PM

🐛 Troubleshooting
Common Issues
Icons not displaying

Check Font Awesome CDN link

Verify icon classes are correct

Contact form not working

Check mail configuration in .env

Verify form validation rules

Images not loading

Run php artisan storage:link

Check file paths in blade templates

CSS/JS not updating

Run npm run build or npm run dev

Clear cache: php artisan cache:clear

🤝 Contributing
Fork the project

Create a feature branch: git checkout -b feature/amazing-feature

Commit changes: git commit -m 'Add amazing feature'

Push to branch: git push origin feature/amazing-feature

Open a Pull Request

📄 License
This project is licensed under the MIT License - see the LICENSE file for details.

🙏 Acknowledgments
Laravel Framework

Bootstrap

Font Awesome

Google Fonts

Mixkit for video assets

Built with ❤️ for Apex Certification Company Limited

For support or queries, contact davidoghenefejiroisaiah@gmail.com