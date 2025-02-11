import './bootstrap';
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

import AOS from 'aos';
import 'aos/dist/aos.css';  // Đảm bảo bạn import cả CSS của AOS
document.addEventListener('DOMContentLoaded', function() {
    AOS.init({
        easing: 'ease-out-back',  // Chế độ chuyển động mượt mà
        //once: true,             // Hiệu ứng chỉ chạy một lần khi phần tử xuất hiện
    });
});