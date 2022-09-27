<?php

namespace App\Providers;

use App\Repositories\About\AboutRepository;
use App\Repositories\About\AboutRepositoryInterface;
use App\Repositories\Blog\BlogRepository;
use App\Repositories\Blog\BlogRepositoryInterface;
use App\Repositories\Classes\ClassesRepository;
use App\Repositories\Classes\ClassesRepositoryInterface;
use App\Repositories\Comment\CommentRepository;
use App\Repositories\Comment\CommentRepositoryInterface;
use App\Repositories\Contact\ContactRepository;
use App\Repositories\Contact\ContactRepositoryInterface;
use App\Repositories\Course\CourseRepository;
use App\Repositories\Course\CourseRepositoryInterface;
use App\Repositories\Register\RegisterRepository;
use App\Repositories\Register\RegisterRepositoryInterface;
use App\Repositories\Subject\SubjectRepository;
use App\Repositories\Subject\SubjectRepositoryInterface;
use App\Repositories\Teacher\TeacherRepository;
use App\Repositories\Teacher\TeacherRepositoryInterface;
use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryInterface;
use App\Services\About\AboutService;
use App\Services\About\AboutServiceInterface;
use App\Services\Blog\BlogService;
use App\Services\Blog\BlogServiceInterface;
use App\Services\Classes\ClassesService;
use App\Services\Classes\ClassesServiceInterface;
use App\Services\Comment\CommentService;
use App\Services\Comment\CommentServiceInterface;
use App\Services\Contact\ContactService;
use App\Services\Contact\ContactServiceInterface;
use App\Services\Course\CourseService;
use App\Services\Course\CourseServiceInterface;
use App\Services\Register\RegisterService;
use App\Services\Register\RegisterServiceInterface;
use App\Services\Subject\SubjectService;
use App\Services\Subject\SubjectServiceInterface;
use App\Services\Teacher\TeacherService;
use App\Services\Teacher\TeacherServiceInterface;
use App\Services\User\UserService;
use App\Services\User\UserServiceInterface;
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

        //Classes
        $this->app->singleton(
            ClassesRepositoryInterface::class,
            ClassesRepository::class
        );

        $this->app->singleton(
            ClassesServiceInterface::class,
            ClassesService::class
        );

        //Subject
        $this->app->singleton(
            SubjectRepositoryInterface::class,
            SubjectRepository::class
        );

        $this->app->singleton(
            SubjectServiceInterface::class,
            SubjectService::class
        );

        //Register
        $this->app->singleton(
            RegisterRepositoryInterface::class,
            RegisterRepository::class
        );

        $this->app->singleton(
            RegisterServiceInterface::class,
            RegisterService::class
        );

        //User
        $this->app->singleton(
            UserRepositoryInterface::class,
            UserRepository::class
        );

        $this->app->singleton(
            UserServiceInterface::class,
            UserService::class
        );

        //About
        $this->app->singleton(
            AboutRepositoryInterface::class,
            AboutRepository::class
        );

        $this->app->singleton(
            AboutServiceInterface::class,
            AboutService::class
        );

        //Contact
        $this->app->singleton(
            ContactRepositoryInterface::class,
            ContactRepository::class
        );

        $this->app->singleton(
            ContactServiceInterface::class,
            ContactService::class
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
