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
