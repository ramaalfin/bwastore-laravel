<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminProductGalleryController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\DashboardSettingController;
use App\Http\Controllers\DashboardTransactionsController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class, "index"])->name("home");

Route::get("/categories", [CategoryController::class, "index"])->name(
    "categories"
);
Route::get("/categories/{id}", [CategoryController::class, "detail"])->name(
    "categories-detail"
);

Route::get("/details/{id}", [DetailController::class, "index"])->name("detail");
Route::post("/details/{id}", [DetailController::class, "add"])->name("detail-add");

Route::get("/success", [CartController::class, "success"])->name("success");

Route::post("/checkout/callback", [CheckoutController::class, "callback"])->name("midtrans-callback");

Route::get("/register", [RegisterController::class, "index"])->name("register");
Route::get("/register/success", [RegisterController::class, "success"])->name(
    "register-success"
);

Route::get("/login", [LoginController::class, "index"])->name("login");

Route::middleware(['auth'])->group(function () {
    Route::get("/cart", [CartController::class, "index"])->name("cart");
    Route::delete("/cart/{id}", [CartController::class, "delete"])->name("cart-delete");

    Route::get("/dashboard", [DashboardController::class, "index"])->name("dashboard");

    Route::get("/dashboard/products", [DashboardProductController::class, "index"])->name("dashboard-products");
    Route::get("/dashboard/products/create", [DashboardProductController::class, "create"])->name("dashboard-product-create");
    Route::post("/dashboard/products", [DashboardProductController::class, "store"])->name("dashboard-product-store");
    Route::get("/dashboard/products/{id}", [DashboardProductController::class, "details"])->name("dashboard-product-details");
    Route::post("/dashboard/products/{id}", [DashboardProductController::class, "update"])->name("dashboard-product-update");
    Route::post("/dashboard/products/gallery/upload", [DashboardProductController::class, "uploadGallery"])->name("dashboard-product-gallery-upload");
    Route::get("/dashboard/products/gallery/delete{id}", [DashboardProductController::class, "deleteGallery"])->name("dashboard-product-gallery-delete");

    Route::get("/dashboard/transactions", [DashboardTransactionsController::class, "index"])->name("dashboard-transactions");
    Route::get("/dashboard/transactions/{id}", [DashboardTransactionsController::class, "details"])->name("dashboard-transactions-details");
    Route::post("/dashboard/transactions/{id}", [DashboardTransactionsController::class, "update"])->name("dashboard-transactions-update");

    Route::get("/dashboard/settings", [DashboardSettingController::class, "store"])->name("dashboard-settings-store");
    Route::get("/dashboard/account", [DashboardSettingController::class, "account"])->name("dashboard-settings-account");
    Route::post("/dashboard/account/{redirect}", [DashboardSettingController::class, "update"])->name("dashboard-settings-redirect");

    Route::post("/checkout", [CheckoutController::class, "process"])->name("checkout");
});

Route::prefix("admin")
    ->middleware("auth", "admin")
    ->group(function () {
        Route::get("/", [AdminDashboardController::class, "index"])->name(
            "admin-dashboard"
        );
        Route::resource("category", AdminCategoryController::class);
        Route::resource("user", AdminUserController::class);
        Route::resource("product", AdminProductController::class);
        Route::resource("product-gallery", AdminProductGalleryController::class);
});

Auth::routes();