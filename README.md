🎤 Artist Hiring Platform

This project was developed as part of the EnterScience Internship Technical Test – 2025.
The application allows users to search for artists, create contracts for private events, and manage previously submitted contracts.

🧩 Project Overview

The system simulates a platform where a user can:

Search for available artists

Select an artist and fill out a contract form

Submit the contract

View previously created contracts

The application is divided into frontend and backend, following good separation of concerns.

🛠️ Technologies Used
Frontend

React (Vite)

TypeScript

React Router DOM

CSS (custom styling, responsive layout)

Backend

Laravel

PostgreSQL

REST API

📁 Project Structure
ContratacaoArtistas_teste/
│
├── backend/        # Laravel API
│
├── frontend/       # React application
│
└── README.md

⚙️ Backend Setup (Laravel)
1️⃣ Requirements

PHP >= 8.2

Composer

PostgreSQL

Laravel CLI

2️⃣ Installation
cd backend
composer install

3️⃣ Environment Configuration

Create the .env file:

cp .env.example .env


Configure your PostgreSQL credentials in .env:

DB_CONNECTION=pgsql
DB_HOST=localhost
DB_PORT=5432
DB_DATABASE=your_database
DB_USERNAME=your_user
DB_PASSWORD=your_password

4️⃣ Generate App Key
php artisan key:generate

5️⃣ Run Migrations
php artisan migrate

6️⃣ Start Backend Server
php artisan serve


Backend will be available at:

http://localhost:8000

⚙️ Frontend Setup (React)
1️⃣ Requirements

Node.js >= 18

npm

2️⃣ Installation
cd frontend
npm install

3️⃣ Start Frontend
npm run dev


Frontend will be available at:

http://localhost:5173

🔌 API Endpoints
🎨 Artists (Mocked)
GET /api/artists


Returns a list of available artists.

📄 Contracts
POST /api/contracts


Creates a new contract.

GET /api/contracts


Returns all submitted contracts.

🖥️ Application Pages

Home

Artist carousel

Artist search

Navigation to contract form

Contract Form

Required fields validation

Artist selection

Submission handling

Success Page

Confirmation message

Navigation options

Contracts List

Displays all saved contracts

Interactive and styled list

✨ Extra Features Implemented

Responsive layout

Animations and transitions

Visual feedback for loading and confirmation

Floating action button for quick access

Clean and semantic component structure

🚧 Challenges & Notes

Spotify API integration was initially considered, but mock data was implemented to ensure stability and delivery within the deadline.

Backend persistence uses PostgreSQL to add extra points according to the challenge description.

👨‍💻 Author

Developed by Matheus
GitHub repository is public as requested.

📬 Contact

For any questions regarding this test, feel free to reach out.

✅ Project ready for evaluation
Thank you for the opportunity!
