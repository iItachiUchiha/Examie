# Examie : Student Examination System

The Student Examination System is a Dockerized application designed for managing examinations for students. It includes an AdminClient, UserClient, and Backend components. The application is deployed using Terraform and GitHub actions. Unit tests are implemented for basic backend routes.

## Table of Contents

- [Features](#features)
- [Folder Structure](#folder-structure)
- [Prerequisites](#prerequisites)
- [Getting Started](#getting-started)
- [Deployment](#deployment)
- [Unit Testing](#unit-testing)
- [Contributing](#contributing)
- [License](#license)

## Features

- **AdminClient:** Interface for administrators to manage exams.
- **UserClient:** Interface for students to take exams.
- **Backend:** Handles backend logic, API, and database interactions.
- **Dockerized:** Application is containerized for easy deployment.
- **Terraform Deployment:** Infrastructure as Code (IaC) using Terraform.
- **GitHub Actions:** Automated deployment using GitHub Actions.
- **Unit Testing:** Basic unit tests for backend routes.

## Folder Structure

```plaintext
.
├── AdminClient
│   └── ...
├── UserClient
│   └── ...
├── Backend
│   ├── src
│   │   └── ...
│   ├── tests
│   │   └── ...
│   └── ...
├── Dockerfile
├── terraform
│   └── ...
├── .github/workflows
│   └── deployment.yml
├── README.md
└── ...

AdminClient: Contains files related to the Admin interface.
UserClient: Contains files related to the User interface.
Backend: Contains backend logic, API, and tests.
Dockerfile: Docker configuration for containerization.
terraform: Terraform files for infrastructure setup.
.github/workflows: GitHub Actions workflow for automated deployment.



Prerequisites
Docker
Terraform
GitHub Account


Certainly! Below is a template for a Markdown README for your project. Feel free to customize it based on the specific details of your project.

markdown
Copy code
# Student Examination System

The Student Examination System is a Dockerized application designed for managing examinations for students. It includes an AdminClient, UserClient, and Backend components. The application is deployed using Terraform and GitHub actions. Unit tests are implemented for basic backend routes.

## Table of Contents

- [Features](#features)
- [Folder Structure](#folder-structure)
- [Prerequisites](#prerequisites)
- [Getting Started](#getting-started)
- [Deployment](#deployment)
- [Unit Testing](#unit-testing)
- [Contributing](#contributing)
- [License](#license)

## Features

- **AdminClient:** Interface for administrators to manage exams.
- **UserClient:** Interface for students to take exams.
- **Backend:** Handles backend logic, API, and database interactions.
- **Dockerized:** Application is containerized for easy deployment.
- **Terraform Deployment:** Infrastructure as Code (IaC) using Terraform.
- **GitHub Actions:** Automated deployment using GitHub Actions.
- **Unit Testing:** Basic unit tests for backend routes.

## Folder Structure

```plaintext
.
├── AdminClient
│   └── ...
├── UserClient
│   └── ...
├── Backend
│   ├── src
│   │   └── ...
│   ├── tests
│   │   └── ...
│   └── ...
├── Dockerfile
├── terraform
│   └── ...
├── .github/workflows
│   └── deployment.yml
├── README.md
└── ...



AdminClient: Contains files related to the Admin interface.
UserClient: Contains files related to the User interface.
Backend: Contains backend logic, API, and tests.
Dockerfile: Docker configuration for containerization.
terraform: Terraform files for infrastructure setup.
.github/workflows: GitHub Actions workflow for automated deployment.



Prerequisites
Docker
Terraform
GitHub Account
Getting Started
Clone the repository:

bash
Copy code
git clone https://github.com/yourusername/student-examination-system.git
cd student-examination-system
Build and run the Docker containers:

bash
Copy code
docker-compose up -d
Access AdminClient, UserClient, and Backend interfaces:

AdminClient: http://localhost:admin-port
UserClient: http://localhost:user-port
Backend API: http://localhost:backend-port
Deployment
The application is deployed using Terraform and GitHub Actions. Follow these steps to deploy:

Commit changes and push to the main branch.

GitHub Actions workflow will automatically trigger deployment.

Monitor deployment status on GitHub.

Unit Testing
Unit tests are implemented for basic backend routes. Run the tests using:

cd Backend
npm install
npm test
