<?php

namespace App\Providers;

use App\Interfaces\LessonRepositoryInterface;
use App\Repositories\LessonRepository;
use Illuminate\Support\ServiceProvider;

class LessonServiceRepository extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(LessonRepositoryInterface::class, LessonRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
