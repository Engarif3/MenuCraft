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

API Base URL: http://localhost:8000

## API Endpoints

| HTTP Method | Endpoint                | Description                                                  | Example Response                                                                                          |
| ----------- | ----------------------- | ------------------------------------------------------------ | --------------------------------------------------------------------------------------------------------- |
| GET         | `/dishes`               | Fetches a list of all dishes.                                | `[{"id":1,"name":"Pizza","price":10.5,"description":"Cheese Pizza","image":"/uploads/images/pizza.jpg"}]` |
| POST        | `/dish/create`          | Creates a new dish.                                          | Success message or validation errors.                                                                     |
| GET         | `/dish/{id}`            | Fetches details of a specific dish by ID.                    | `{"id":1,"name":"Pizza","price":10.5,"description":"Cheese Pizza","image":"/uploads/images/pizza.jpg"}`   |
| PUT         | `/dish/{id}/edit`       | Updates a specific dish by ID.                               | Success message or validation errors.                                                                     |
| DELETE      | `/dish/{id}/delete`     | Deletes a specific dish by ID.                               | Success message.                                                                                          |
| GET         | `/api/dishes`           | Returns a JSON list of all dishes for the frontend.          | `[{"id":1,"name":"Pizza","price":10.5,"description":"Cheese Pizza","image":"/uploads/images/pizza.jpg"}]` |
| GET         | `/category`             | Fetches a list of all categories.                            | HTML response showing categories and dishes.                                                              |
| POST        | `/category/create`      | Creates a new category.                                      | Success message or validation errors.                                                                     |
| PUT         | `/category/edit/{id}`   | Updates a specific category by ID.                           | Success message or validation errors.                                                                     |
| DELETE      | `/category/delete/{id}` | Deletes a specific category by ID and its associated dishes. | Success message.                                                                                          |

## 📞 Contact

For any inquiries or issues, feel free to reach out:

- **Name:** Md. Arifur Rahman
- **Email:** [your-email@example.com](mailto:your-email@example.com)
- **LinkedIn:** [Md. Arifur Rahman](https://www.linkedin.com/in/md-arifur-rahman)
