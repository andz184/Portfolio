# Portfolio Cá Nhân - Lê Văn An

Đây là mã nguồn cho trang web portfolio cá nhân của tôi, được xây dựng bằng Laravel và Tailwind CSS. Trang web này được tạo ra để giới thiệu các dự án, kinh nghiệm làm việc, và kỹ năng trong lĩnh vực phát triển web của tôi.

## 🎯 Mục Tiêu

*   **Giới thiệu bản thân:** Tạo một "danh thiếp" trực tuyến chuyên nghiệp để nhà tuyển dụng và đồng nghiệp có thể tìm hiểu.
*   **Trưng bày dự án & Kinh nghiệm:** Hiển thị một cách trực quan và chi tiết các dự án đã thực hiện cùng với vai trò và trách nhiệm trong từng dự án.
*   **Chứng minh kỹ năng:** Thể hiện khả năng ứng dụng các công nghệ hiện đại để xây dựng một trang web hoàn chỉnh, từ backend đến frontend.

## 🚀 Công Nghệ Sử Dụng

### Backend
*   **[Laravel](https://laravel.com/):** Framework PHP chính được sử dụng để xây dựng toàn bộ logic phía máy chủ, xử lý routing, và quản lý view.

### Frontend
*   **[Tailwind CSS](https://tailwindcss.com/):** Framework CSS utility-first để xây dựng giao diện người dùng một cách nhanh chóng và tùy biến cao.
*   **Blade Templates:** Hệ thống template engine mạnh mẽ của Laravel để cấu trúc các thành phần giao diện.
*   **JavaScript (ES6+):** Xử lý các tương tác phía client như chuyển đổi theme (dark/light mode), hiệu ứng cuộn, và các thành phần giao diện động.
*   **Particles.js:** Thư viện JavaScript được dùng để tạo hiệu ứng các hạt chuyển động làm nền cho trang web.

### Môi trường phát triển
*   **Composer:** Quản lý các gói phụ thuộc của PHP.
*   **NPM:** Quản lý các gói phụ thuộc của JavaScript/CSS.
*   **Laravel Mix:** Biên dịch và đóng gói các tài sản (assets) frontend.

## 💻 Hướng Dẫn Cài Đặt

1.  Clone repository về máy của bạn:
    ```bash
    git clone https://github.com/your-username/your-repo-name.git
    cd your-repo-name
    ```
2.  Cài đặt các gói phụ thuộc của Composer:
    ```bash
    composer install
    ```
3.  Cài đặt các gói phụ thuộc của NPM:
    ```bash
    npm install
    ```
4.  Sao chép file `.env.example` thành `.env` và cấu hình:
    ```bash
    cp .env.example .env
    ```
5.  Tạo Application Key cho Laravel:
    ```bash
    php artisan key:generate
    ```
6.  Biên dịch tài sản frontend:
    ```bash
    npm run dev
    ```
7.  Chạy server phát triển:
    ```bash
    php artisan serve
    ```
Bây giờ, bạn có thể truy cập trang web tại địa chỉ `http://127.0.0.1:8000`.