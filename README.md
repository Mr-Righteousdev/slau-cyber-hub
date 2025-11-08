# 🛡️ Cybersecurity & Innovations Club Website

Welcome to the official website repository for St. Lawrence University's Cybersecurity & Innovations Club! 🎉

**Recent Achievements:**
- 🥉 3rd Place - UCC CyberStars Competition
- 🚩 3+ Years of picoCTF Experience

---

## 📚 Table of Contents
- [About This Project](#about-this-project)
- [Getting Started](#getting-started)
- [Project Structure](#project-structure)
- [Making Your First Contribution](#making-your-first-contribution)
- [Common Tasks](#common-tasks)
- [Troubleshooting](#troubleshooting)
- [Need Help?](#need-help)

---

## 🎯 About This Project

This website serves as the digital hub for our cybersecurity club, showcasing our achievements, hosting CTF resources, and recruiting new members. Built with Laravel (a PHP framework), even if you're new to web development, this guide will help you get started!

**Tech Stack:**
- **Backend:** Laravel 11 (PHP Framework)
- **Frontend:** Blade Templates (Laravel's templating engine)
- **Database:** MySQL/PostgreSQL
- **Version Control:** Git & GitHub

---

## 🚀 Getting Started

### Prerequisites
Before you begin, make sure you have these installed on your computer:

1. **PHP** (version 8.2 or higher)
   - Windows: Download from [windows.php.net](https://windows.php.net/download/)
   - Mac: `brew install php`
   - Linux: `sudo apt install php php-cli php-mbstring php-xml php-mysql`

2. **Composer** (PHP package manager)
   - Download from [getcomposer.org](https://getcomposer.org/download/)

3. **Node.js & NPM** (for frontend assets)
   - Download from [nodejs.org](https://nodejs.org/)

4. **Git**
   - Download from [git-scm.com](https://git-scm.com/)

5. **Database** (choose one)
   - MySQL: [dev.mysql.com/downloads](https://dev.mysql.com/downloads/)
   - PostgreSQL: [postgresql.org/download](https://www.postgresql.org/download/)
   - SQLite (easier for beginners, no installation needed)

### Installation Steps

#### 1️⃣ Clone the Repository
```bash
# Navigate to where you want to store the project
cd ~/projects  # or any folder you prefer

# Clone the repository
git clone https://github.com/YOUR-USERNAME/cyberclub-website.git

# Enter the project directory
cd cyberclub-website
```

#### 2️⃣ Install PHP Dependencies
```bash
# This installs all Laravel packages
composer install
```

#### 3️⃣ Install Frontend Dependencies
```bash
# This installs JavaScript packages
npm install
```

#### 4️⃣ Set Up Environment File
```bash
# Copy the example environment file
cp .env.example .env

# Generate an application key
php artisan key:generate
```

#### 5️⃣ Configure Database
Open the `.env` file in your text editor and update these lines:

**For MySQL:**
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cyberclub_db
DB_USERNAME=your_mysql_username
DB_PASSWORD=your_mysql_password
```

**For SQLite (easier for beginners):**
```env
DB_CONNECTION=sqlite
# Comment out or remove the other DB_ lines
```

If using SQLite, create the database file:
```bash
touch database/database.sqlite
```

#### 6️⃣ Run Database Migrations
```bash
# This creates all necessary database tables
php artisan migrate
```

#### 7️⃣ Build Frontend Assets
```bash
# Compile CSS and JavaScript
npm run dev
```

#### 8️⃣ Start the Development Server
```bash
# Start Laravel's built-in server
php artisan serve
```

🎉 **Success!** Your website should now be running at: `http://localhost:8000`

---

## 📁 Project Structure

Here's how our project is organized:

```
cyberclub-website/
├── app/                    # Backend logic
│   ├── Http/
│   │   └── Controllers/    # Handle page requests
│   └── Models/            # Database models
├── resources/
│   └── views/
│       └── frontend/      # 🎨 ALL FRONTEND VIEWS GO HERE!
│           ├── home.blade.php
│           ├── about.blade.php
│           ├── projects.blade.php
│           └── ...
├── routes/
│   └── web.php            # Define website URLs
├── public/                # Publicly accessible files
│   ├── css/
│   ├── js/
│   └── images/
├── database/
│   └── migrations/        # Database structure
└── .env                   # Configuration (never commit this!)
```

### 🎨 Frontend Development

All frontend views are located in `resources/views/frontend/`. These files use **Blade**, Laravel's templating engine.

**Basic Blade Syntax:**
```blade
{{-- This is a comment --}}

{{-- Display a variable --}}
<h1>{{ $title }}</h1>

{{-- If statement --}}
@if($isLoggedIn)
    <p>Welcome back!</p>
@endif

{{-- Loop --}}
@foreach($achievements as $achievement)
    <li>{{ $achievement->name }}</li>
@endforeach

{{-- Include another view --}}
@include('frontend.partials.header')
```

---

## 🔧 Making Your First Contribution

### Step 1: Create a New Branch
```bash
# Always create a new branch for your work
git checkout -b feature/your-feature-name

# Example:
git checkout -b feature/add-about-page
```

### Step 2: Make Your Changes
- Edit files in `resources/views/frontend/` for frontend work
- Add images to `public/images/`
- Add styles to `public/css/` or use Tailwind classes

### Step 3: Test Your Changes
```bash
# Make sure the dev server is running
php artisan serve

# Visit http://localhost:8000 in your browser
```

### Step 4: Commit Your Changes
```bash
# Check what files you changed
git status

# Stage your changes
git add .

# Commit with a descriptive message
git commit -m "Add team section to about page"
```

### Step 5: Push to GitHub
```bash
# Push your branch to GitHub
git push origin feature/your-feature-name
```

### Step 6: Create a Pull Request
1. Go to the GitHub repository
2. Click "Pull Requests" → "New Pull Request"
3. Select your branch
4. Add a description of what you changed
5. Request review from a team member

---

## 🛠️ Common Tasks

### Creating a New Page

**1. Create the view file:**
```bash
# Create a new file in resources/views/frontend/
touch resources/views/frontend/newpage.blade.php
```

**2. Add content to the view:**
```blade
@extends('layouts.app')

@section('content')
    <h1>My New Page</h1>
    <p>Page content goes here!</p>
@endsection
```

**3. Create a route in `routes/web.php`:**
```php
Route::get('/newpage', function () {
    return view('frontend.newpage');
});
```

**4. Test it:** Visit `http://localhost:8000/newpage`

### Adding a New CSS File

**1. Create the file in `public/css/`:**
```bash
touch public/css/custom.css
```

**2. Link it in your layout:**
```blade
<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
```

### Pulling Latest Changes

```bash
# Make sure you're on the main branch
git checkout main

# Pull latest changes
git pull origin main

# Update dependencies if needed
composer install
npm install
```

---

## 🐛 Troubleshooting

### "composer: command not found"
**Solution:** Install Composer from [getcomposer.org](https://getcomposer.org/)

### "php artisan: command not found"
**Solution:** Make sure you're in the project directory and PHP is installed

### Database Connection Error
**Solution:** 
1. Check your `.env` file has correct database credentials
2. Make sure your database server is running
3. Try SQLite if MySQL is giving issues

### "npm: command not found"
**Solution:** Install Node.js from [nodejs.org](https://nodejs.org/)

### Changes Not Showing Up
**Solution:**
```bash
# Clear Laravel's cache
php artisan cache:clear
php artisan view:clear
php artisan config:clear

# Rebuild frontend assets
npm run dev
```

### Port 8000 Already in Use
**Solution:**
```bash
# Use a different port
php artisan serve --port=8001
```

---

## 📖 Learning Resources

### New to Laravel?
- [Laravel Documentation](https://laravel.com/docs) - Official docs
- [Laracasts](https://laracasts.com/) - Video tutorials (free & paid)
- [Laravel Bootcamp](https://bootcamp.laravel.com/) - Official beginner guide

### New to Git?
- [Git Handbook](https://guides.github.com/introduction/git-handbook/)
- [Git Cheat Sheet](https://education.github.com/git-cheat-sheet-education.pdf)

### New to Web Development?
- [MDN Web Docs](https://developer.mozilla.org/) - HTML, CSS, JavaScript
- [W3Schools](https://www.w3schools.com/) - Quick references

---

## 💬 Need Help?

**Don't struggle alone!** We're here to help:

1. **Check existing issues:** Look at [GitHub Issues](../../issues) to see if someone had the same problem
2. **Ask in our Discord/Slack:** [Add your club's chat link]
3. **Contact the lead developer:** [Your contact info]
4. **Create an issue:** If you found a bug, create a new GitHub issue

---

## 🎯 Development Guidelines

### Code Style
- Use meaningful variable names
- Add comments for complex logic
- Keep functions small and focused
- Follow Laravel conventions

### Git Commit Messages
- Use present tense: "Add feature" not "Added feature"
- Be descriptive: "Add team member cards to about page"
- Reference issues: "Fix navigation bug (#12)"

### Before Submitting a PR
- [ ] Test your changes locally
- [ ] Make sure the code follows our style guide
- [ ] Update documentation if needed
- [ ] No debug code or `dd()` statements left behind

---

## 🏆 Website Features Roadmap

- [x] Initial Laravel setup
- [ ] Homepage design
- [ ] About page with team members
- [ ] Achievements showcase
- [ ] Projects portfolio
- [ ] CTF resources section
- [ ] Blog/News system
- [ ] Member portal with authentication
- [ ] Contact form
- [ ] Responsive mobile design

---

## 📄 License

[Add your license here]

---

## 🙌 Contributors

Thanks to all our club members who are building this together!

<!-- Add contributor images/names here -->

---

**Built with ❤️ by the St. Lawrence University Cybersecurity & Innovations Club**

*Questions? Reach out to [lead developer name/email]*
