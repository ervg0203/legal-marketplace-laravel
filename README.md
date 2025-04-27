Here’s the updated README for your Laravel-based Legal Marketplace Platform project with the section on images added:

---

# Legal Marketplace Platform (Laravel)

## Overview

The **Legal Marketplace Platform** is a Laravel-based web application designed to connect two types of users: **Legal Workers** (e.g., Advocates, Arbitrators, Mediators) and **Users/Clients** (people seeking legal services). This platform helps users find legal professionals based on their role, specialization, and location. Users can request legal services, and legal workers can manage their requests efficiently.

## Key Features

- **Role-Based Authentication**: Separate user roles for Legal Workers and Clients (Users).
- **Legal Worker Module**: Legal Workers can register with detailed profiles, including their role, specialization, location, and contact details.
- **User Module**: Clients can register, view, and filter legal workers by specialization, location, and role.
- **Email Notifications**: Automated email notifications sent to Legal Workers when a Client sends a request for their services.
- **Search and Filterable Marketplace**: Clients can search and filter legal workers by role, location, and specialization.
- **Request System**: Clients can send service requests to Legal Workers, which are emailed directly to the worker.

## Requirements

- PHP 8.0 or higher
- Composer
- Laravel 8.x or higher
- MySQL or another compatible database

## Installation

1. **Clone the repository**:
    ```bash
    git clone https://github.com/your-username/legal-marketplace-platform.git
    cd legal-marketplace-platform
    ```

2. **Install dependencies**:
    ```bash
    composer install
    ```

3. **Set up the environment file**:
    Copy `.env.example` to `.env`:
    ```bash
    cp .env.example .env
    ```

4. **Generate the application key**:
    ```bash
    php artisan key:generate
    ```

5. **Set up the database**:
    - Configure your database credentials in the `.env` file.
    - Run the migrations to set up the database:
      ```bash
      php artisan migrate
      ```

6. **Seed the database** (Optional):
    If you want to populate the database with sample data for testing:
    ```bash
    php artisan db:seed
    ```

7. **Run the application**:
    ```bash
    php artisan serve
    ```

    Access the app at `http://localhost:8000`.

## Features in Detail

### 1. Legal Worker Module

- **Signup & Registration**: Legal Workers can register by filling out a form with their personal and professional details.
- **Profile Information**:
    - Name
    - Role (e.g., Advocate, Arbitrator)
    - Specialization
    - Location
    - Contact Email
    - Phone Number
    - Profile Image (Emoji-based)

**Example Data Structure**:
```php
[
  'name' => 'John Doe',
  'role' => 'Advocate',
  'specialization' => 'Criminal Law',
  'location' => 'Mumbai, Maharashtra',
  'contact' => 'john.doe@email.com',
  'phone' => '+91-9876543210',
  'image' => '👨‍⚖', // Emoji-based profile icon
]
```

### 2. User (Client) Module

- **Authentication**: Clients can register and log in using their email and password.
- **Marketplace Access**: After logging in, Clients can view a list of legal workers.
- **Search & Filter**: Clients can filter legal workers by:
  - Location
  - Specialization
  - Role
- **Profile Viewing**: Clients can view detailed profiles of legal workers.
- **Service Request**: Clients can send service requests with a brief description of their legal issue. This request will trigger an email notification to the selected legal worker.

### 3. Email Notifications

- **Legal Workers** will receive an email when a Client sends a service request.
- The email includes:
  - The Client’s email address
  - The description of the legal issue
  - A link to the Client's profile (optional)

### 4. Search and Filterable Marketplace

- Clients can search and filter legal workers based on:
  - Role
  - Specialization
  - Location

## Images Section

The platform allows legal workers to set an **emoji-based profile image**. For example, an advocate might use the following emoji for their profile image: `👨‍⚖`. This emoji serves as a visual representation of the worker's role on the platform.
