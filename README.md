# Blog Creation

## Topic

Building a Blog with Slim Framework

## Objective

To develop a fully functional blog using the Slim microframework, focusing on routing, dependency injection (DI), integrating external packages, and utilizing template engines for rendering views.

## Task Requirements

### 1. Technology Stack
- **Slim Framework** (installed via Composer)
- Template Engine:
  - **Blade**: [jenssegers/blade](https://github.com/jenssegers/blade)  
  *or*  
  - **Twig**: [Twig Official Website](https://twig.symfony.com/)
- Dependency Injection:
  - **php-di**  
  *or*  
  - Standard DI Container
- Database Interaction:
  - **PDO**, **Eloquent**, or **Doctrine ORM**

### 2. Database Schema
The database consists of the following tables:

#### 1. Users
| Field         | Type          | Notes                                    |
|---------------|---------------|------------------------------------------|
| `id`          | Integer       | Primary key, autoincrement               |
| `username`    | String        | User's name                              |
| `password`    | String        | Encrypted password (use `password_hash`) |
| `created_at`  | Datetime      | Timestamp of user creation               |

#### 2. Posts
| Field         | Type          | Notes                          |
|---------------|---------------|--------------------------------|
| `id`          | Integer       | Primary key, autoincrement     |
| `user_id`     | Integer       | Foreign key from `users` table |
| `title`       | String        | Post title                     |
| `content`     | Text          | Post content                   |
| `created_at`  | Datetime      | Timestamp of creation          |
| `updated_at`  | Datetime      | Timestamp of last update       |

#### 3. Comments
| Field         | Type          | Notes                          |
|---------------|---------------|--------------------------------|
| `id`          | Integer       | Primary key, autoincrement     |
| `user_id`     | Integer       | Foreign key from `users` table |
| `post_id`     | Integer       | Foreign key from `posts` table |
| `content`     | Text          | Comment content                |
| `created_at`  | Datetime      | Timestamp of comment creation  |

#### 4. Tags
| Field         | Type          | Notes                  |
|---------------|---------------|------------------------|
| `id`          | Integer       | Primary key, autoincrement |
| `name`        | String        | Tag name               |

#### 5. Post_Tags
| Field         | Type          | Notes                          |
|---------------|---------------|--------------------------------|
| `post_id`     | Integer       | Foreign key from `posts` table |
| `tag_id`      | Integer       | Foreign key from `tags` table  |

### 3. Routing Example
Here is an example of routing setup for the blog:

#### Post Routes
```php
use App\Controllers\BlogController;

$app->get('/', [BlogController::class, 'index']);
$app->get('/posts/create', [BlogController::class, 'create']);
$app->post('/posts', [BlogController::class, 'store']);
$app->get('/posts/{id}', [BlogController::class, 'show']);
$app->get('/posts/{id}/edit', [BlogController::class, 'edit']);
$app->put('/posts/{id}', [BlogController::class, 'update']);
$app->delete('/posts/{id}', [BlogController::class, 'destroy']);
```

#### Authentication Routes
```php
use App\Controllers\AuthController;

$app->get('/login', [AuthController::class, 'showLoginForm']);
$app->post('/login', [AuthController::class, 'login']);
$app->get('/register', [AuthController::class, 'showRegistrationForm']);
$app->post('/register', [AuthController::class, 'register']);
$app->get('/logout', [AuthController::class, 'logout']);
```

#### Comment Routes
```php
use App\Controllers\CommentController;

$app->post('/comments', [CommentController::class, 'create']);
$app->put('/comments/{id}', [CommentController::class, 'update']);
$app->delete('/comments/{id}', [CommentController::class, 'delete']);
```

### 4. Blog Features
- **Post Management**: A single user can create, edit, and delete posts.
- **Commenting**: Authenticated users can comment on posts.
- **Tagging**: Posts can be tagged, and tags are managed via the `tags` table.
- **Authentication**: Users can register, log in, and log out.

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/practical-work-7.git
   cd practical-work-7
   ```

2. Install dependencies:
   ```bash
   composer install
   ```

3. Set up the database:
   - Create a new database.
   - Run the provided migration scripts or SQL schema file.

4. Configure environment variables:
   - Set database connection details in the `.env` file.

5. Start the server:
   ```bash
   php -S localhost:8000 -t public
   ```

## Usage

- Visit the homepage at `http://localhost:8000` to view posts.
- Register or log in to manage posts and leave comments.
- Only the admin user can create, edit, and delete posts.
- Authenticated users can leave comments on posts.

## Contributing

Contributions are welcome! Fork the repository and submit a pull request with your changes or improvements.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
