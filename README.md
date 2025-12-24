# Contratação de Artistas

Projeto fullstack desenvolvido como teste técnico, com integração à API do Spotify para busca de artistas e simulação de contratação.

---

##  Tecnologias Utilizadas

### Backend

* PHP 8+
* Laravel
* PostgreSQL
* pgAdmin
* API Spotify

### Frontend

* React
* TypeScript
* React Router DOM
* Fetch API

---

## Estrutura do Projeto

```
ContratacaoArtistas_teste/
│
├── backend/   # API Laravel
└── frontend/  # Aplicação React
```

---

## Como Rodar o Projeto

### Backend (Laravel)

1. Acesse a pasta do backend:

```bash
cd backend
```

2. Instale as dependências:

```bash
composer install
``

3. Configure o arquivo `.env`:

```env
DB_CONNECTION=pgsql
DB_HOST=localhost
DB_PORT=5432
DB_DATABASE=contratacao_artistas
DB_USERNAME=postgres
DB_PASSWORD=sua_senha

SPOTIFY_CLIENT_ID=seu_client_id
SPOTIFY_CLIENT_SECRET=seu_client_secret
```

4. Gere a chave da aplicação:

```bash
php artisan key:generate
```

5. Rode as migrations:

```bash
php artisan migrate
```

6. Inicie o servidor:

```bash
php artisan serve
```

Backend disponível em:
 `http://localhost:8000`

---

### Frontend (React)

1. Acesse a pasta do frontend:

```bash
cd frontend
```

2. Instale as dependências:

```bash
npm install
```

3. Inicie o projeto:

```bash
npm start
```

Frontend disponível em:
 `http://localhost:3000`

---

## Funcionalidades

* Buscar artistas via Spotify
* Listar artistas encontrados
* Exibir informações do artista
* Feedback visual com Alert
* Tipagem completa com TypeScript

---

## Decisões Técnicas

* Backend separado do frontend
* API REST consumida via Fetch
* Uso de FormRequest para validações
* Componentização no React
* Organização por responsabilidade

---

##  Autor

Desenvolvido por **Matheus** 

---

## 📌 Observações
* Este projeto foi desenvolvido como teste técnico para a vaga de estágio em desenvolvimento.


Projeto focado em clareza de código, organização e boas práticas, seguindo padrões comuns de mercado para aplicações fullstack.
