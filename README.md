# Podcast Platform API

A RESTful API for a podcast platform built with Laravel.

## Features

- CRUD operations for podcasts, episodes, and categories
- Filtering and pagination
- Swagger API documentation
- Dockerized development environment

## Requirements

- Docker and Docker Compose
- PHP 8.1+
- Composer

## Installation

1. Clone the repository
2. Copy `.env.example` to `.env`
3. Run `docker-compose up -d`
4. Enter the container: `docker-compose exec app bash`
5. Install dependencies: `composer install`
6. Generate app key: `php artisan key:generate`
7. Run migrations: `php artisan migrate`
8. Seed database: `php artisan db:seed`

## API Documentation

Access Swagger UI at: `http://localhost:8000/api/documentation`

## Testing

Run tests with: `php artisan test`

## Endpoints

- GET /api/categories
- GET /api/categories/{id}
- GET /api/podcasts
- GET /api/podcasts/{id}
- GET /api/episodes/{id}