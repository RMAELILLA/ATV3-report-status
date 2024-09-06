# Attendance Tracker V3 - Local Environment Setup Instructions:

**Ensure that Composer is installed for composer packages and Node.js for JS packages.
You can use XAMPP to run a MySQL server locally.**

1. Open your VS Code Powershell.
2. Run composer install to install all the necessary composer packages
3. Run npm install to install all the necessary json packages
4. Create a copy of .env.example and rename it to .env
5. Open your renamed .env file
6. Change the SESSION_DRIVER to file (SESSION_DRIVER=file)
7. Change the DB_CONNECTION to mysql if it is not already set to that (DB_CONNECTION=mysql)
8. Change DB_DATABASE to your database name - make sure the database already exists.
9. Run php artisan key:generate in the VS Code Powershell.
10. Run npm run build in the VS Code Powershell for initial manifest.json generation.

**Additional Notes:**
1. If you're running npm run dev, when you're serving the application via artisan serve, it will use the JS and CSS files under your resources instead of under your public/build. Use this for real time updates when making CSS changes.
2. When you run npm run build, it creates a build file under public which is then used by php artisan serve if you're not running npm run dev. This is not updated on real time and has to be re-run/recompiled for changes.
3. The @vite directive automatically handles pathing changes. It changes based on whether you're running dev (refer to #1) or not running dev (refer to #2)
