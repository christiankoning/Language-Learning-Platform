# Language Learning Platform
A clean and scalable language learning platform built for typing-based recall, fast learning, and mastery through repetition.
Start learning real sentence structure from the ground up, whether it's particles, verbs, vocabulary, or complete sentence formation.
The platform supports multiple languages and learning paths, beginning with Japanese as the first implemented language.

## Features
### 🧠 Learning Modes
**Practice Mode**
- Instant feedback with unlimited retries.
- Skip and review tough items at the end.
- Result screen shows total accuracy, attempts per item, and skipped items.

**Timed Mode**
- Race the clock while staying accurate.
- Items must be answered correctly before continuing.
- Score breakdown includes times, accuracy, and number of attempts.
- Results can be submitted to the global leaderboard.

### 📊 Leaderboards
- **Global leaderboard:** Ranked by **accuracy first**, then **completion time.**
- **Personal leaderboard:** Track your own best scores for each category.
- Authenticated users only: No duplicate names or spam entries.

### 🌍 Multi-Language Support
- Built to support multiple languages with separate learning categories for each.
- Easily extendable to include:
  - Core grammar (particles, copulas)
  - Vocabulary by topic (objects, times, places)
  - Verb conjugation drills
  - Sentence building challenges

## Tech Stack
**Frontend:** Blade + Vanilla JS
**Backend:** Laravel, PHP
**Database:** MySQL
**Authentication:** Laravel Passport

## Installation & Setup
### 1. Clone the Repository
`git clone https://github.com/christiankoning/Language-Learning-Platform.git` <br>
`cd language-learning-platform`

### 2. Install Dependencies
`composer install` <br>
`npm install`

### 3. Configure Environment
`cp .env.example .env` <br>
`php artisan key:generate`

### 4. Migrate & Seed the Database
`php artisan migrate --seed`

### 5. Build Assets
`npm run dev`

### 6. Start the App
`php artisan serve`
