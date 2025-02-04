# Beep Pakistan

This project is a Laravel-based web application that integrates the Gemini Pro machine learning model to generate AI-powered responses.

## Features

- AI-generated responses using Gemini Pro.
- RESTful API integration.
- Structured and maintainable codebase.
- Scalability and security considerations.

## Installation

### Prerequisites

- PHP 8.x
- Composer
- Laravel 11
- MySQL / PostgreSQL (or any preferred database)
- API key for Gemini Pro ML model

### Steps

1. **Clone the Repository**

   ```sh
   git clone https://github.com/Arcotic-Solutions-Ltd/beeppakistan.git
   cd beeppakistan
   ```

2. **Install Dependencies**

   ```sh
   composer install
   npm install (if using frontend assets)
   ```

3. **Setup Environment**

   ```sh
   cp .env.example .env
   ```

   Update `.env` with your database credentials and Gemini Pro API key:

   ```env
   GEMINI_API_KEY=your_api_key_here
   ```

4. **Generate Application Key**

   ```sh
   php artisan key:generate
   ```

5. **Run Migrations**

   ```sh
   php artisan migrate --seed
   ```

6. **Run the Application**

   ```sh
   php artisan serve
   ```

   Open `http://127.0.0.1:8000` in your browser.

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## License

This project is licensed under the MIT License.

## Dedicated to the Memory of Rohingya Genocide Martyrs

This project is dedicated to the memory of the martyrs of the [Rohingya genocide](https://en.wikipedia.org/wiki/Rohingya_genocide). May their struggles never be forgotten. #ProtectTheRohingya #StopRohingyaGenocide

