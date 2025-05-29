<p align="center"><a href="https://rs-code.az" target="_blank"><img src="https://rs-code.az/img/rs-code.png" width="400" alt="RS-CODE"></a></p>

# RsCode Admin Dashboard (Tabler ilə)

**Laravel üçün hazır admin panel.**  
`Tabler` şablonu ilə hazırlanmış, daxilində login sistemi, dashboard, middleware, lang faylları və daha çoxunu ehtiva edən sadə bir admin panel paketi.

---

## 🔧 Quraşdırma

```bash
composer require rs-code/admin-dashboard
```

## 📦 İstifadə qaydası
1. Vendor fayllarını yayımlayın

```bash
php artisan vendor:publish --provider="RsCode\AdminTabler\AdminTablerProvider" --force
```

## Bu əmr aşağıdakıları kopyalayacaq:

- Migrations
- Seederlər
- Dashboard Controller
- Middleware
- Lang faylları
- View-lar
- Public fayllar

2. Auth yönləndirməsini dəyişin

`LoginController` faylında aşağıdakı sətri əlavə edin:

```
protected $redirectTo = '/admin/dashboard';
```

3. Route-ları əlavə edin

```
use App\Http\Controllers\Back\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('back.dashboard');
});

Auth::routes([
    'register' => false,
    'reset' => false,
    'confirm' => false,
]);
```

4. Performans üçün optimizasiya
```bash
php artisan optimize
```

5. Migration və seed işlədin
```
php artisan migrate:fresh --seed
```