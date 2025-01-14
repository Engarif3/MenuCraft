# MenuCraft (Symfony-MariaDB)

## Overview

This backend is a part of full-stack application \*\*Restaurant Management" consists of a separate Backend (Menu Craft) built with Symfony and MariaDB, and a Frontend ([Bistro Delight](https://github.com/Engarif3/Bistro_delight_aws)) developed by using React JS. The frontend communicates with the backend via RESTful APIs.

## Features

<!-- Customers can:
- Browse the restaurant menu
- Add items to their cart
- Modify item quantities
- Place orders -->

- Admin can manage dishes (create/edit/delete dishes).
- Admin can manage categories (create/edit/delete categories).
- Dockerized setup for development and production environments.
- MariaDB database integration.

## Technologies Used

- **Symfony**: Backend framework for application logic.
- **MariaDB**: Database management system.
- **Node.js**: For installing npm packages.
- **Docker**: Containerization of the application.
- **Docker Compose**: Managing and orchestrating multiple containers.
<!-- - **Frontend**: [Front-end repository](https://github.com/Engarif3/Bistro-delight) -->

## Prerequisites

- **Option 1**: Run locally:

  - PHP 8.1 installed.
  - Node 18.18 installed.
  - Composer installed.
  - MariaDB server installed and running.

- **Option 2**: Run with Docker:
  - Docker and Docker Compose installed on your system.

## Getting Started

### Running Locally

1. Clone the repository:

   ```bash
   git clone <Repo URL>
   cd <repository-folder>
   ```

2. Install dependencies:

   ```bash
   composer install
   npm install
   ```

3. Set up the `.env` file with your local database credentials.

4. Run the application using one of the following commands:

   ```bash
   php -S localhost:8000 -t public
   ```

   or

   ```bash
   symfony server:start
   ```

5. Access the Symfony application locally:
   ```
   http://localhost:8000 or 127.0.0.1:8000
   ```
   or the URL provided by the Symfony CLI.

### Running with Docker

1. Clone the repository:

   ```bash
   git clone <Repo URL>
   cd <repository-folder>
   ```

2. Start the application using Docker Compose:

   ```bash
   docker-compose up -d
   ```

3. Access the Symfony application locally:
   ```
   http://localhost:8000 or http://0.0.0.0:8000
   ```

### 4. API Endpoints

API Base URL: http://localhost:8000 or http://0.0.0.0:8000

| HTTP Method | Endpoint                | Description                                                  |
| ----------- | ----------------------- | ------------------------------------------------------------ |
| GET         | `/dishes`               | Fetches a list of all dishes.                                |
| POST        | `/dish/create`          | Creates a new dish.                                          |
| GET         | `/dish/{id}`            | Fetches details of a specific dish by ID.                    |
| PUT         | `/dish/{id}/edit`       | Updates a specific dish by ID.                               |
| DELETE      | `/dish/{id}/delete`     | Deletes a specific dish by ID.                               |
| GET         | `/api/dishes`           | Returns a JSON list of all dishes for the frontend.          |
| GET         | `/category`             | Fetches a list of all categories.                            |
| POST        | `/category/create`      | Creates a new category.                                      |
| PUT         | `/category/edit/{id}`   | Updates a specific category by ID.                           |
| DELETE      | `/category/delete/{id}` | Deletes a specific category by ID and its associated dishes. |

                                                                                 |

## 📞 Contact

For any inquiries or issues, feel free to reach out:

- **Name:** Md. Arifur Rahman
- **Email:** [arif.aust.eng@gmail.com](mailto:arif.aust.eng@gmail.com)
- **LinkedIn:** [Md. Arifur Rahman](https://www.linkedin.com/in/engarif3/)
