Certainly! Let's apply the changes step by step to your `Task` model. I'll guide you through each modification. Open your `Task` model (`app/Models/Task.php`) and make the following adjustments:

### 1. Accessor: Capitalize Task Name on Retrieval

Add an accessor for the `name` attribute:

```php
use Illuminate\Database\Eloquent\Casts\Attribute;

class Task extends Model
{
    // ... existing code ...

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => ucfirst($value)
        );
    }

    // ... existing code ...
}
```

This accessor will automatically capitalize the first letter of the task name when you retrieve it.

### 2. Mutator: Convert Task Name to Lowercase on Setting

Add a mutator for the `name` attribute:

```php
use Illuminate\Database\Eloquent\Casts\Attribute;

class Task extends Model
{
    // ... existing code ...

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => ucfirst($value),
            set: fn (string $value) => strtolower($value)
        );
    }

    // ... existing code ...
}
```

This mutator will convert the task name to lowercase when you set it.

### 3. Attribute Casting: Cast Completed Attribute to Boolean

Add the following property to cast the `completed` attribute to boolean:

```php
class Task extends Model
{
    // ... existing code ...

    protected $casts = [
        'completed' => 'boolean',
    ];

    // ... existing code ...
}
```

This casting ensures that the `completed` attribute is treated as a boolean.

### 4. Custom Cast: Create a Priority Custom Cast

Generate a custom cast class:

```bash
php artisan make:cast PriorityCast
```

Edit the generated `PriorityCast` class in `app/Casts/PriorityCast.php`:

```php
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class PriorityCast implements CastsAttributes
{
    public function get($model, $key, $value, $attributes)
    {
        // Your custom logic for getting the priority value
        return strtoupper($value);
    }

    public function set($model, $key, $value, $attributes)
    {
        // Your custom logic for setting the priority value
        return strtolower($value);
    }
}
```

In your `Task` model, use the custom cast for the `priority` attribute:

```php
use App\Casts\PriorityCast;

class Task extends Model
{
    // ... existing code ...

    protected $casts = [
        'priority' => PriorityCast::class,
    ];

    // ... existing code ...
}
```

This custom cast allows you to define custom logic for getting and setting the `priority` attribute.

### Testing

Now, you can test these changes by creating or updating a task in your application. For example, in your controller or wherever you handle task creation/update:

```php
use App\Models\Task;

public function createTask()
{
    // Create a new task
    $task = Task::create([
        'name' => 'example task',
        'description' => 'This is an example task description.',
        'completed' => true,
        'priority' => 'High',
    ]);

    // Retrieve the task and dump the attributes to see the changes
    $retrievedTask = Task::find($task->id);
    dd($retrievedTask->attributesToArray());
}
```

Run this code, and you should see the effects of accessors, mutators, attribute casting, and the custom cast on the retrieved task attributes.

Remember to adjust the custom logic in mutators, accessors, and custom casts based on your specific project requirements. If you encounter any issues or have further questions, feel free to ask!