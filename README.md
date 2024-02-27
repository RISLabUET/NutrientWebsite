# NutriTransform: Uncovering the Science of Cooking

Welcome to NutriTransform, the premier destination for food enthusiasts, home cooks, and nutritionists seeking to delve into the fascinating world of food science. Our website is dedicated to exploring how cooking methods alter the nutritional profile of foods, offering insights and guidance to help you maximize the health benefits of your meals.

## Discover How Cooking Alters Nutrients

At NutriTransform, we believe in the power of knowledge to transform everyday cooking into a nutrient-boosting culinary experience. Our resources are designed to enlighten you on:

- **Raw vs. Cooked:** Uncover the nutritional differences between raw and cooked foods and how to choose the best preparation method for each ingredient.
- **The Impact of Heat:** Learn how various cooking temperatures affect vitamins, minerals, and proteins in different foods (future).
- **Cooking Methods Explored:** From steaming and boiling to grilling and frying, discover which techniques preserve nutrients and which may diminish their value (future).

## Features

- **Nutrient Database:** Search our comprehensive database for detailed nutrient profiles of common and exotic foods, both raw and cooked.
- **Interactive Tools:** Utilize our interactive tools to compare the nutritional changes foods undergo during the cooking process (future).
- **Expert Advice:** Read articles, watch videos, and engage with content created by nutritionists and culinary experts to enhance your cooking and eating habits (future).
- **Community Engagement:** Join our community to share recipes, cooking tips, and nutritional insights with fellow food enthusiasts (future).

# NutriTransform Website: Technical Overview

Welcome to the technical documentation for NutriTransform, a cutting-edge platform dedicated to exploring the science behind cooking and its effects on food nutrients. This document is designed for developers interested in understanding the architecture of NutriTransform, built using the robust and elegant Laravel framework, and provides a step-by-step guide for setting up and running the project locally.

## Built With Laravel

NutriTransform leverages Laravel, a PHP framework known for its expressive syntax, to deliver a seamless and interactive user experience. Laravel's MVC architecture, advanced ORM, and comprehensive routing capabilities enable us to efficiently handle complex data relationships and user interactions.

## Features

- **Responsive Design:** Utilizing Bootstrap for a mobile-friendly, responsive layout.
- **Dynamic Content:** AJAX for asynchronous data fetching, enhancing the user's browsing experience.
- **Secure Authentication:** Built-in Laravel authentication for a secure sign-in process.
- **Interactive Database:** Eloquent ORM for seamless data retrieval and manipulation.

## Getting Started

### Prerequisites

Ensure you have the following installed:
- PHP (^7.3|^8.0)
- Composer
- Node.js and NPM
- A web server like Apache or Nginx
- MySQL or another Laravel-supported database system

### Clone the Repository

1. Open your terminal.
2. Navigate to the directory where you want to clone the NutriTransform repository.
3. Run: `git clone https://github.com/hungha1512/NutriTransform.git`
4. Navigate into the cloned directory: `cd NutriTransform`

### Set Up Environment

1. Copy the `.env.example` file to a new `.env` file: `cp .env.example .env`
2. Open `.env` and configure your database and other environment-specific settings (such as database name, hostname, etc...).

### Install Dependencies

1. Run `composer install` to install PHP dependencies.
2. Run `npm install` to install Node.js dependencies.
3. Run `npm run dev` to compile assets.

### Database Setup

1. Create a database that Laravel will use to store data.
2. Run `php artisan migrate` to set up your database schema.
3. Run `php artisan db:seed` to populate your database with initial data.
4. If the `php artisna db:seed` don't run correctly, adding the `--class=FoodNameSeeder`, `--class=RawFoodNutrientSeeder`, `--class=CookedFoodNutrientSeeder` (1 per time).

### Running the Application

1. Generate an application key: `php artisan key:generate`
2. Serve the application: `php artisan serve`
3. Open your web browser and navigate to the displayed URL, usually `http://localhost:8000`.

### Additional Configuration (Optional)

- **Mail Configuration:** For features like email verification, configure your mail settings in the `.env` file.
- **Queue Configuration:** For background job processing, set up your queue settings in the `.env` file.

## Contributing

We welcome contributions! If you'd like to improve the NutriTransform website, please fork the repository, make your changes, and submit a pull request.

## Support

For support, please open an issue in the GitHub repository or contact the project maintainers directly.

NutriTransform is committed to providing a comprehensive platform for understanding the nutritional science of cooking. By following these setup instructions, developers can contribute to a project that empowers individuals to make informed dietary choices.

