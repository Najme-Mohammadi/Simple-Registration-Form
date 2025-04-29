# 📋 Laravel Webinar Registration API

This is a simple Laravel API project for registering users to a webinar. The API accepts a name and phone number, validates the input, ensures phone numbers are unique, and stores the data in a MySQL database.

---

## ⚙️ Requirements

- PHP >= 8.1
- Composer
- Laravel >= 10
- MySQL or compatible database
- Postman, HTTPie, or any API client for testing

---

## 🚀 Setup Instructions

1. **Clone the Repository**

   ```bash
   git clone https://github.com/your-username/webinar-registration-api.git
   cd webinar-registration-api
Install Dependencies

bash
Copy
Edit
composer install
Set Environment Variables

Copy .env.example to .env and update database details:

bash
Copy
Edit
cp .env.example .env
Edit the .env file:

ini
Copy
Edit
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=webinar_form
DB_USERNAME=root
DB_PASSWORD=your_password
Generate App Key

bash
Copy
Edit
php artisan key:generate
Run Migrations

bash
Copy
Edit
php artisan migrate
Serve the Application

bash
Copy
Edit
php artisan serve
The API will be accessible at:
http://localhost:8000

📬 API Endpoints

Method	Endpoint	Description
POST	/api/enroll	Register for webinar
Example Request (POST /api/enroll)
json
Copy
Edit
{
  "name": "Jane Doe",
  "phone": "1234567890"
}
Success Response
json
Copy
Edit
{
  "message": "Registration successful!",
  "data": {
    "id": 1,
    "name": "Jane Doe",
    "phone": "1234567890",
    "created_at": "...",
    "updated_at": "..."
  }
}
✅ Validation Rules
name: required, string, max 255 characters

phone: required, string, unique in registrations table

🛡️ Security Notes
No authentication is required (public API).

CSRF protection is disabled for /api/* routes.

Unique phone validation prevents duplicates.

🤝 Contribution
Feel free to fork the repo, create a branch, and submit a pull request!

📄 License
This project is open-source and available under the MIT License.

vbnet
Copy
Edit







