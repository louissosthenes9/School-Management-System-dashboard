`public/images/banner.jpg`.

---

# School Management Dashboard

Welcome to the School Management Dashboard! This project is built using Laravel and Filament PHP to provide an easy-to-use interface for managing students, teachers, and subjects.

![Dashboard Banner](public/images/banner.jpg)

## Features

- **Student Management:** Add, edit, and view student details.
- **Teacher Management:** Add, edit, and view teacher details.
- **Subject Management:** Add, edit, and view subject details.
- **Dashboard:** View statistics and insights about the school.

## Installation

### Prerequisites

- PHP >= 8.1
- Composer
- Laravel >= 10.0

### Steps

1. **Clone the repository:**

   ```sh
   git clone git@github.com:louissosthenes9/school-management-dashboard.git
   cd school-management-dashboard
   ```

2. **Install dependencies:**

   ```sh
   composer install
   ```

3. **Set up the environment:**

   Copy the example environment file and update the configuration:

   ```sh
   cp .env.example .env
   php artisan key:generate
   ```

   Update your `.env` file with your database and other necessary configurations.

4. **Run migrations and seed the database (optional):**

   ```sh
   php artisan migrate
   php artisan db:seed
   ```

5. **Serve the application:**

   ```sh
   php artisan serve
   ```

   The application will be available at `http://localhost:8000`.

## Usage

To access the Filament admin panel, navigate to `/admin` in your browser. You can manage students, teachers, and subjects through the admin panel and view the statistics on the custom dashboard page.

## Contributing

Contributions are welcome! Please open an issue or submit a pull request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Contact

For any inquiries or issues, please contact [louissosthenes9@gmail.com](mailto:louissosthenes9@gmail.com).

---
