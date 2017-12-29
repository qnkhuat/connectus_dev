<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            'throttle:60,1',
            'bindings',
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \Illuminate\Auth\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'allowGoToAdmin' => \App\Http\Middleware\AllowGoToAdmin::class,
        'viewListAllAddress' => \App\Http\Middleware\ViewListAllAddress::class,
        
        'teacherCreate' => \App\Http\Middleware\TeacherCreate::class,
        'teacherUpdate' => \App\Http\Middleware\TeacherUpdate::class,
        'teacherView' => \App\Http\Middleware\TeacherView::class,
        'teacherViewAll' => \App\Http\Middleware\TeacherViewAll::class,

        'userCreate' => \App\Http\Middleware\UserCreate::class,
        'userUpdate' => \App\Http\Middleware\UserUpdate::class,
        'userDestroy' => \App\Http\Middleware\UserDestroy::class,
        'userView' => \App\Http\Middleware\UserView::class,

        'courseCreate' => \App\Http\Middleware\CourseCreate::class,
        'courseUpdate' => \App\Http\Middleware\CourseUpdate::class,
        'courseUpdateAll' => \App\Http\Middleware\CourseUpdateAll::class,
        'courseDestroy' => \App\Http\Middleware\CourseDestroy::class,
        'courseDestroyAll' => \App\Http\Middleware\CourseDestroyAll::class,
        'courseView' => \App\Http\Middleware\CourseView::class,
        'courseViewAll' => \App\Http\Middleware\CourseViewAll::class,

        'categoryCreate' => \App\Http\Middleware\CategoryCreate::class,
        'categoryUpdate' => \App\Http\Middleware\CategoryUpdate::class,
        'categoryDestroy' => \App\Http\Middleware\CategoryDestroy::class,
        'categoryView' => \App\Http\Middleware\CategoryView::class,

        'districtCreate' => \App\Http\Middleware\DistrictCreate::class,
        'districtUpdate' => \App\Http\Middleware\DistrictUpdate::class,
        'districtDestroy' => \App\Http\Middleware\DistrictDestroy::class,
        'districtView' => \App\Http\Middleware\DistrictView::class,

        'orderListAll' => \App\Http\Middleware\OrderListAll::class,
        'orderEdit' => \App\Http\Middleware\OrderEdit::class,
    ];
}
