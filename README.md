# Laravel Admin Panel

A modern Laravel application featuring a comprehensive admin panel with user management, role-based permissions, and a responsive UI built with Tailwind CSS.

## Features

### Core Technologies
- **Laravel 12** - PHP web framework
- **Laravel Breeze** - Simple authentication scaffolding
- **Tailwind CSS** - Utility-first CSS framework
- **Vite** - Fast build tool for assets
- **Pest** - PHP testing framework
- **Spatie Laravel Permission** - Role and permission management

### Admin Panel Features
- **Dashboard** - Overview with statistics cards
- **User Management** - List, edit, and delete users
- **Role Management** - Assign roles to users
- **Responsive Design** - Mobile-friendly interface
- **Dark Mode Support** - Automatic dark/light theme switching

### Authentication & Security
- User registration and login
- Password confirmation
- Email verification
- Role-based access control
- Admin middleware protection

## Installation

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd laravel_basic
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Database setup**
   ```bash
   # Configure your database in .env
   php artisan migrate
   php artisan db:seed
   ```

6. **Build assets**
   ```bash
   npm run build
   # or for development
   npm run dev
   ```

7. **Start the application**
   ```bash
   php artisan serve
   ```

## Usage

### Admin Access
- Register a new user
- Assign admin role manually in the database or through another admin user
- Access `/admin/dashboard` for admin features

### Available Routes
- `/` - Welcome page
- `/dashboard` - User dashboard
- `/admin/dashboard` - Admin dashboard
- `/admin/users` - User management
- `/admin/users/{id}/edit` - Edit user roles

## Project Structure

```
├── app/
│   ├── Http/Controllers/
│   │   ├── Admin/
│   │   │   ├── DashboardController.php
│   │   │   └── UserController.php
│   │   └── ProfileController.php
│   └── Models/
│       └── User.php
├── resources/views/
│   ├── admin/
│   │   ├── dashboard.blade.php
│   │   ├── users/
│   │   │   ├── index.blade.php
│   │   │   └── edit.blade.php
│   ├── layouts/
│   │   ├── app.blade.php
│   │   └── navigation.blade.php
│   └── auth/
├── routes/
│   └── web.php
├── database/
│   ├── migrations/
│   └── seeders/
└── tests/
    └── Feature/
```

## Testing

Run the test suite using Pest:

```bash
./vendor/bin/pest
```

## Development

### Asset Compilation
```bash
# Development mode (with hot reload)
npm run dev

# Production build
npm run build
```

### Code Quality
```bash
# Run PHP CS Fixer
./vendor/bin/pint

# Run static analysis (if configured)
# composer run phpstan
```

## Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Add tests if applicable
5. Submit a pull request

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
