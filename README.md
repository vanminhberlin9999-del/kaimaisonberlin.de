pass: tinhcv / kientrithanhcongA123

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


## ------------------------- on the server
# Clear Cache
php artisan config:clear
php artisan cache:clear
php artisan config:cache

## build css 
INSERT INTO users  (name, email, password, status, created_at, updated_at) 
VALUES ('Admin', ' kaiphuong@gmail.com, '$2y$12$fq79PKGNfv4ICTSfrdEaVen1oMgqfApRk4EN3Spvhg2Xq8hgaSLCK', 'active', NOW(), NOW());

## image linked
php artisan storage:link

## check permisson of folder storage and cache
# Xóa symlink cũ (do root tạo)
rm public/storage

# Tạo lại symlink bằng Laravel (dưới user kaimaison)
php artisan storage:link

# Set lại owner cho toàn bộ storage và symlink
chown -h kaimaison:kaimaison public/storage
chown -R kaimaison:kaimaison storage

# Set lại quyền (folders 755, files 644)
find storage -type d -exec chmod 755 {} \;
find storage -type f -exec chmod 644 {} \;
✅ Sau đó kiểm tra
ls -l public/ | grep storage
ls -ld storage/app/public/uploads

## ------------------------------------ SEO TOPIC for laravel website
### auto create slug for post with the library Str
'slug' => Str::slug($request->title), // Generate slug from title

# Create Schema SEO for website
# Screenshort of the website: Because I did not buy a VPS hosting, before I had 
![start1.png](readme-img/start/start1.png)
![Bildschirmfoto 2025-12-14 um 19.58.06.png](readme-img/start/Bildschirmfoto%202025-12-14%20um%2019.58.06.png)
![Bildschirmfoto 2025-12-14 um 19.58.25.png](readme-img/start/Bildschirmfoto%202025-12-14%20um%2019.58.25.png)
![Bildschirmfoto 2025-12-14 um 19.58.51.png](readme-img/start/Bildschirmfoto%202025-12-14%20um%2019.58.51.png)
![Bildschirmfoto 2025-12-14 um 19.59.04.png](readme-img/start/Bildschirmfoto%202025-12-14%20um%2019.59.04.png)
![Bildschirmfoto 2025-12-14 um 19.59.17.png](readme-img/start/Bildschirmfoto%202025-12-14%20um%2019.59.17.png)
![Bildschirmfoto 2025-12-14 um 19.59.29.png](readme-img/start/Bildschirmfoto%202025-12-14%20um%2019.59.29.png)

# Menu
![Bildschirmfoto 2025-12-14 um 19.54.18.png](readme-img/menu/Bildschirmfoto%202025-12-14%20um%2019.54.18.png)
![Bildschirmfoto 2025-12-14 um 19.54.32.png](readme-img/menu/Bildschirmfoto%202025-12-14%20um%2019.54.32.png)
![Bildschirmfoto 2025-12-14 um 19.54.49.png](readme-img/menu/Bildschirmfoto%202025-12-14%20um%2019.54.49.png)
![Bildschirmfoto 2025-12-14 um 19.55.01.png](readme-img/menu/Bildschirmfoto%202025-12-14%20um%2019.55.01.png)
![Bildschirmfoto 2025-12-14 um 19.55.13.png](readme-img/menu/Bildschirmfoto%202025-12-14%20um%2019.55.13.png)
![Bildschirmfoto 2025-12-14 um 19.55.43.png](readme-img/menu/Bildschirmfoto%202025-12-14%20um%2019.55.43.png)
////


