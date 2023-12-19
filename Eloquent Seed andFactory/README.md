
### 1. Use Model Factories

#### 1.1. Generate a Factory for the Task Model

If you haven't created a model factory for the `Task` model, you can generate one using the following command:

```bash
php artisan make:factory TaskFactory
```

This will create a `TaskFactory` class in the `database/factories` directory.

#### 1.2. Edit the TaskFactory

Edit the generated `TaskFactory` class (`database/factories/TaskFactory.php`) to define how tasks should be created:

```php
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Task::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'completed' => $this->faker->boolean,
            'priority' => $this->faker->randomElement(['Low', 'Medium', 'High']),
        ];
    }
}
```

This assumes that your `Task` model has the `completed` and `priority` attributes.

#### 1.3. Use the Factory in TaskSeeder

In your `TaskSeeder`, use the factory to create tasks:

```php
use App\Models\Task;

public function run()
{
    \App\Models\Task::factory()->count(50)->create();
}
```

This will create 50 tasks with random data based on the factory definition.

### 2. Additional Seeders (if needed)

If your seeding logic becomes complex, you can break it up into multiple seeders. For example, you might have separate seeders for different types of tasks or priorities.

### 3. Muting Model Events (if needed)

If you want to prevent models from dispatching events during seeding, you can use the `WithoutModelEvents` trait in your `TaskSeeder` or `DatabaseSeeder`.

### Testing

Run the seeding command:

```bash
php artisan db:seed --class=TaskSeeder
```

This will seed your `tasks` table with 50 randomly generated tasks.

