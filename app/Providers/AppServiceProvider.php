<?php

namespace App\Providers;

use App\Repositories\Blog\BlogRepository;
use App\Repositories\Blog\BlogRepositoryInterface;
use App\Repositories\Comment\CommentRepository;
use App\Repositories\Comment\CommentRepositoryInterface;
use App\Repositories\Course\CourseRepository;
use App\Repositories\Course\CourseRepositoryInterface;
use App\Repositories\Teacher\TeacherRepository;
use App\Repositories\Teacher\TeacherRepositoryInterface;
use App\Services\Blog\BlogService;
use App\Services\Blog\BlogServiceInterface;
use App\Services\Comment\CommentService;
use App\Services\Comment\CommentServiceInterface;
use App\Services\Course\CourseService;
use App\Services\Course\CourseServiceInterface;
use App\Services\Teacher\TeacherService;
use App\Services\Teacher\TeacherServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //Blog
        $this->app->singleton(
            BlogRepositoryInterface::class,
            BlogRepository::class
        );

        $this->app->singleton(
            BlogServiceInterface::class,
            BlogService::class
        );

        //Course
        $this->app->singleton(
            CourseRepositoryInterface::class,
            CourseRepository::class
        );

        $this->app->singleton(
            CourseServiceInterface::class,
            CourseService::class
        );

        //Comment
        $this->app->singleton(
            CommentRepositoryInterface::class,
            CommentRepository::class
        );

        $this->app->singleton(
            CommentServiceInterface::class,
            CommentService::class
        );

        //Teacher
        $this->app->singleton(
            TeacherRepositoryInterface::class,
            TeacherRepository::class
        );

        $this->app->singleton(
            TeacherServiceInterface::class,
            TeacherService::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
