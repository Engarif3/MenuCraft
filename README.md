# Restaurant Management System (Backend)

A RESTful API built with Symfony to manage restaurant operations, including handling dishes, categories, carts, and payments. This backend is dockerized for seamless setup and integrates with a React frontend for a complete user experience.

## Features

- CRUD operations for recipes (dishes)
- Category management for menu items
- Cart functionality for adding dishes and managing quantities
- Payment processing
- RESTful API implementation
- Dockerized setup for development and production environments
- MySQL database integration

## Tech Stack

- **Backend Framework**: Symfony 6.4
- **Database**: MariaDB 10.4
- **Containerization**: Docker
- **Frontend**: React (not included in this repository; refer to the frontend repo)
- **API Testing**: Postman or similar tools

## Prerequisites

Ensure you have the following installed:

- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) (if using for frontend)

## Getting Started

### 1. Clone the Repository

```bash
git clone https://github.com/your-username/restaurant-management-backend.git
cd restaurant-management-backend
```

### 2. Build and Start Containers

```bash
docker-compose up --build

```

### 3. Access the Application

API Base URL: http://localhost:8000

```bash
docker-compose up --build

```

### 4. API Endpoints

## API Endpoints

| **HTTP Method** | **Endpoint**       | **Description**                            |
| --------------- | ------------------ | ------------------------------------------ |
| GET             | `/api/dishes`      | Retrieve a list of all dishes.             |
| POST            | `/api/dishes`      | Create a new dish.                         |
| GET             | `/api/dishes/{id}` | Retrieve details of a specific dish by ID. |
| PUT             | `/api/dishes/{id}` | Update a specific dish by ID.              |
| DELETE          | `/api/dishes/{id}` | Delete a specific dish by ID.              |
| GET             | `/api/categories`  | Retrieve a list of all categories.         |
| POST            | `/api/categories`  | Create a new category.                     |
| GET             | `/api/cart`        | View the cart contents.                    |
| POST            | `/api/cart`        | Add a dish to the cart.                    |
| PUT             | `/api/cart/{id}`   | Update the quantity of a dish in the cart. |
| DELETE          | `/api/cart/{id}`   | Remove a dish from the cart.               |
| POST            | `/api/checkout`    | Proceed to payment and checkout.           |

```

```
