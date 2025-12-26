# Artist Hiring Platform

Este projeto é uma aplicação web para busca e contratação de artistas para eventos privados.  
A aplicação é composta por um frontend em React e um backend em Laravel, comunicando-se através de uma API REST.

---

## Tecnologias Utilizadas

Frontend:
- React
- TypeScript
- Vite
- React Router DOM
- Tailwind CSS
- Fetch API

Backend:
- Laravel
- PHP
- PostgreSQL

---

## Estrutura do Projeto

/
├── frontend  
└── backend  

---

## Pré-requisitos

Antes de executar o projeto, certifique-se de ter instalado:

- Node.js (versão 18 ou superior)
- npm
- PHP 8.1 ou superior
- Composer
- PostgreSQL
- Git

---

## Como Executar o Projeto

### 1. Backend (Laravel)

1. Acesse a pasta do backend:

- cd backend


## Pré-requisitos

Antes de iniciar, certifique-se de ter instalado:

- Node.js (versão 18 ou superior)
- npm
- PHP (>= 8.1)
- Composer
- PostgreSQL
- Git

---

## Como executar o projeto

### Backend (Laravel)

1. Acesse a pasta do backend:
- cd backend
- cmd
- composer install
- code .
- configure o bd no .env:
 DB_CONNECTION=pgsql
  - DB_HOST=127.0.0.1
  - DB_PORT=5432
  - DB_DATABASE=contratacao_artistas
  - DB_USERNAME=postgres
  - DB_PASSWORD=senha
- php artisan key:generate
- php artisan serve
- http://127.0.0.1:8000


### Frontend (React + TypeScript)
- cd frontend
- npm install
- src/services/api.ts
- const API_URL = 'http://127.0.0.1:8000/api'
- npm run dev
- http://localhost:5173

### Autor
# Matheus Guarnieri Dos Anjos
# Fins para estágio

