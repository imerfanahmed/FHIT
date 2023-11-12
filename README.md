# Financial Health Indicator Tool Documentation
[![wakatime](https://wakatime.com/badge/github/imerfanahmed/FHIT.svg)](https://wakatime.com/badge/github/imerfanahmed/FHIT)
### Live Demo: http://fhit.2rgmd3tj7e-ez94degjq3mr.p.temp-site.link/

## Table of Contents

1. [Introduction](#introduction)
2. [Features](#features)
3. [Tech Stack](#tech-stack)
4. [Installation](#installation)
5. [Usage](#usage)
6. [Architecture](#architecture)
7. [Security](#security)
8. [Data Visualization](#data-visualization)
9. [Database Integration](#database-integration)
10. [Testing](#testing)
11. [User-Centric Focus](#user-centric-focus)
12. [Documentation](#documentation)
13. [Deployment](#deployment)
14. [Contributing](#contributing)
15. [License](#license)

## Introduction

The Financial Health Indicator Tool, following an MVC (Model-View-Controller) and Service-Driven Architecture, is designed to assist small businesses in understanding and improving their financial health. This tool provides a comprehensive Financial Health Score by analyzing monthly income, expenses, debts, and assets. This documentation serves as a guide on setting up, using, and understanding the different aspects of the tool.

## Features

1. **Financial Health Score Calculator:** Allows businesses to input monthly income, expenses, debts, and assets, and provides a clear Financial Health Score.

2. **Engaging and Intuitive Interface:** Developed with Livewire and Laravel for a smooth and engaging user experience.

3. **Robust Back-End System:** Utilizes Laravel's MVC architecture and a service-driven approach for flexibility and a robust back-end.

4. **Responsive Data Visualization:** Integrates Apex Charts for visual representation of the Financial Health Score and key metrics.

5. **Database Integration:** Efficiently handles data using Laravel's Eloquent ORM with MySQL/PostgreSQL for secure storage.

6. **Security Measures:** Encrypts all sensitive financial information before saving it into the database.

7. **Testing for Reliability:** Conducts tests using Pest to ensure the tool's functionality and reliability.

## Tech Stack

- Back-End: Laravel (MVC, Service-Driven)
- Front-End: Livewire
- Database: MySQL/PostgreSQL
- Data Visualization: Apex Charts
- Testing: Pest
- Deployment: RunCloud, VPS, WebHook, deployer script.

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/imerfanahmed/FHIT
   ```

2. Navigate to the project directory:

   ```bash
   cd fhit
   ```

3. Install dependencies:

   ```bash
   composer install
   ```

4. Set up the database and configure the `.env` file.

   ```bash
   php artisan migrate
   ```

## Usage

1. Start the Laravel development server:

   ```bash
   php artisan serve
   ```

2. Open your browser and go to [http://localhost:8000](http://localhost:8000) to access the Financial Health Indicator Tool.

## Architecture

The tool follows a Laravel-based architecture with MVC and a service-driven approach for flexibility and a robust back-end. Detailed architecture information can be found in the [Architecture Documentation](docs/architecture.md).

## Security

The tool ensures security by encrypting all sensitive financial information before saving it into the database. Refer to the [Security Documentation](docs/security.md) for more details.

## Data Visualization

Visual representation of the Financial Health Score and key metrics is achieved through Apex Charts. Learn more in the [Data Visualization Documentation](docs/data-visualization.md).

## Database Integration

Efficient data handling is ensured through the integration of Laravel's Eloquent ORM with [MySQL/PostgreSQL]. See the [Database Integration Documentation](docs/database-integration.md) for configuration details.

## Testing

Both automated and manual tests are conducted using Pest to ensure the tool's reliability. Refer to the [Testing Documentation](docs/testing.md) for test details and instructions.

## User-Centric Focus

The tool is designed with small business owners in mind, aiming for ease of use and understanding. Feedback and suggestions are welcomed for continuous improvement.

## Documentation

For more detailed information on various aspects of the Financial Health Indicator Tool, refer to the [Documentation Folder](docs).

## Deployment

The tool can be deployed on platforms like Laravel Forge, Heroku, etc., for public access. Follow the [Deployment Guide](docs/deployment.md) for step-by-step instructions.

## Contributing

Contributions are welcome! Please follow the [Contribution Guidelines](CONTRIBUTING.md) for details on how to contribute to this project.

## License

This project is licensed under the [MIT License](LICENSE). Feel free to use, modify, and distribute the code as per the license terms.
