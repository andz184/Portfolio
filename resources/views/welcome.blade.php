<!DOCTYPE html>
<html lang="vi" class="scroll-smooth dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lê Văn An - Lập Trình Viên Laravel</title>

        <!-- SEO Meta Tags -->
        <meta name="description" content="Chào bạn, tôi là Lê Văn An, một lập trình viên Laravel chuyên xây dựng các hệ thống backend hiệu suất cao và có khả năng mở rộng. Khám phá các dự án và kinh nghiệm làm việc của tôi.">
        <meta name="keywords" content="Lê Văn An, Laravel Developer, Backend Developer, PHP, MySQL, API, Web Developer, Lập trình viên Laravel">
        <meta name="author" content="Lê Văn An">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url('/') }}">
        <meta property="og:title" content="Lê Văn An - Lập Trình Viên Laravel">
        <meta property="og:description" content="Chào bạn, tôi là Lê Văn An, một lập trình viên Laravel chuyên xây dựng các hệ thống backend hiệu suất cao và có khả năng mở rộng. Khám phá các dự án và kinh nghiệm làm việc của tôi.">
        <meta property="og:image" content="{{ asset('images/Gemini_Generated_Image_jbsi36jbsi36jbsi.webp') }}">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="{{ url('/') }}">
        <meta property="twitter:title" content="Lê Văn An - Lập Trình Viên Laravel">
        <meta property="twitter:description" content="Chào bạn, tôi là Lê Văn An, một lập trình viên Laravel chuyên xây dựng các hệ thống backend hiệu suất cao và có khả năng mở rộng. Khám phá các dự án và kinh nghiệm làm việc của tôi.">
        <meta property="twitter:image" content="{{ asset('images/Gemini_Generated_Image_jbsi36jbsi36jbsi.webp') }}">

        <link rel="icon" href="{{ asset('images/p.webp') }}" type="image/webp">
        <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
            <style>
       html, body {
            cursor: auto !important;
        }
        .vertical-text {
            writing-mode: vertical-rl;
            text-orientation: mixed;
        }
        .side-link {
            transition: all 0.25s cubic-bezier(0.645,0.045,0.355,1);
        }
        .side-link:hover {
            color: #0d9488;
            transform: translateY(-3px);
        }
        .dark .side-link:hover {
            color: #64ffda;
        }
        .nav-number {
            font-family: 'SF Mono', 'Fira Code', monospace;
            font-size: 14px;
            margin-right: 5px;
            color: #0d9488;
        }
        .dark .nav-number {
            color: #64ffda;
        }
        @media (max-width: 768px) {
            .side-element {
                display: none;
            }
        }
        /* Tab Styles */
        .tab-button {
            transition: all 0.3s ease;
            border-bottom: 2px solid transparent;
        }
        .tab-button.active {
            color: #0d9488; /* text-teal-600 */
            border-bottom-color: #0d9488;
        }
        .dark .tab-button.active {
            color: #64ffda; /* text-green */
            border-bottom-color: #64ffda;
        }
        .tab-content {
            display: none;
            animation: fadeIn 0.5s;
        }
        .tab-content.active {
            display: block;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="bg-white dark:bg-navy text-slate-700 dark:text-slate-400 antialiased leading-relaxed selection:bg-teal-300/30 selection:text-teal-900 dark:selection:bg-green/30 dark:selection:text-green">
    <div id="particles-js"></div>

    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 px-6 sm:px-12 h-24 flex items-center justify-between backdrop-blur-sm bg-white/80 dark:bg-navy/80">
        <div class="text-teal-600 dark:text-green font-mono text-xl z-10">
            <a href="/">LA</a>
        </div>
        <div class="flex items-center space-x-6">
            <ul class="flex items-center space-x-8 font-mono text-sm">
                <li><a href="#about" class="group hover:text-teal-600 dark:hover:text-green"><span class="nav-number">01.</span><span class="text-slate-800 dark:text-white group-hover:text-teal-600 dark:group-hover:text-green transition-colors">Giới Thiệu</span></a></li>
                <li><a href="#education" class="group hover:text-teal-600 dark:hover:text-green"><span class="nav-number">02.</span><span class="text-slate-800 dark:text-white group-hover:text-teal-600 dark:group-hover:text-green transition-colors">Học Vấn</span></a></li>
                <li><a href="#experience" class="group hover:text-teal-600 dark:hover:text-green"><span class="nav-number">03.</span><span class="text-slate-800 dark:text-white group-hover:text-teal-600 dark:group-hover:text-green transition-colors">Kinh Nghiệm</span></a></li>
                <li><a href="#projects" class="group hover:text-teal-600 dark:hover:text-green"><span class="nav-number">04.</span><span class="text-slate-800 dark:text-white group-hover:text-teal-600 dark:group-hover:text-green transition-colors">Dự Án</span></a></li>
                <li><a href="#contact" class="group hover:text-teal-600 dark:hover:text-green"><span class="nav-number">05.</span><span class="text-slate-800 dark:text-white group-hover:text-teal-600 dark:group-hover:text-green transition-colors">Liên Hệ</span></a></li>
            </ul>
            <button id="theme-toggle" class="text-slate-500 dark:text-slate-400 hover:text-teal-600 dark:hover:text-green">
                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
            </button>
        </div>
    </nav>

    <!-- Social Links - Left Side -->
    <div class="fixed left-10 bottom-0 hidden lg:block side-element fade-in-section is-visible" style="transition-delay: 800ms;">
        <div class="flex flex-col items-center">
            <ul class="flex flex-col items-center space-y-5">
                <li>
                    <a href="https://github.com/andz184" target="_blank" rel="noopener noreferrer" class="side-link block text-slate-700 dark:text-slate-400">
                        <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                    </a>
                </li>
                <li>
                    <a href="https://linkedin.com/in/levanan" target="_blank" rel="noopener noreferrer" class="side-link block text-slate-700 dark:text-slate-400">
                        <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                    </a>
                </li>
                 <li>
                    <a href="https://www.facebook.com/lvaann3418" target="_blank" rel="noopener noreferrer" class="side-link block text-slate-700 dark:text-slate-400">
                        <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                    </a>
                </li>
            </ul>
            <div class="w-px h-24 mt-5 bg-slate-600 dark:bg-slate-lightest"></div>
        </div>
    </div>

    <!-- Email - Right Side -->
    <div class="fixed right-10 bottom-0 hidden lg:block side-element fade-in-section is-visible" style="transition-delay: 800ms;">
        <div class="flex flex-col items-center">
            <a href="mailto:levanan3418@gmail.com" class="side-link font-mono text-sm vertical-text mb-5 text-slate-700 dark:text-slate-400">
                levanan3418@gmail.com
            </a>
            <div class="w-px h-24 mt-5 bg-slate-600 dark:bg-slate-lightest"></div>
        </div>
    </div>

    <!-- Main Content -->
    <main class="px-6 sm:px-12 lg:px-24 xl:px-32 mx-auto max-w-screen-xl">
        <!-- Hero Section -->
        <section class="min-h-screen flex flex-col justify-center">
            <div class="fade-in-section is-visible">
                <p class="text-sm sm:text-base font-mono mb-5 text-teal-600 dark:text-green">Xin chào, tôi là</p>
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-slate-900 dark:text-white mb-4">Lê Văn An</h1>
                <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-slate-700 dark:text-slate-light mb-8">Tôi xây dựng các hệ thống backend.</h2>
                <p class="max-w-xl text-lg text-slate-600 dark:text-slate mb-12">
                    Tôi là một kỹ sư Backend chuyên xây dựng các hệ thống web hiệu suất cao và có khả năng mở rộng.
                    Hiện tại, tôi tập trung vào việc thiết kế API, tối ưu hóa cơ sở dữ liệu và xây dựng các giải pháp phía máy chủ vững chắc.
                </p>
                <a href="#projects" class="inline-block px-7 py-4 border-2 rounded font-mono transition-all duration-300 relative group border-teal-600 text-teal-600 hover:bg-teal-600/10 dark:border-green dark:text-green dark:hover:bg-green-tint">
                    <span class="relative z-10">Xem các dự án của tôi</span>
                </a>
            </div>
        </section>

                <!-- About Section -->
                <section id="about" class="py-24 fade-in-section">
                    <div class="grid md:grid-cols-3 gap-12 items-center">
                        <div class="md:col-span-2">
                            <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-8 flex items-center">
                                <span class="nav-number text-xl">01.</span>
                                <span class="text-slate-900 dark:text-white">Giới Thiệu</span>
                                <span class="ml-4 text-sm font-mono text-slate-500 dark:text-slate-400 border border-slate-500 dark:border-slate-400 rounded px-2 py-1">
                                    Fresher / Junior
                                </span>
                            </h2>
                            <div class="space-y-4 text-slate-600 dark:text-slate text-lg">
                               <p>
                                    Xin chào! Tôi là Lê Văn An, định hướng trở thành một Backend Developer chuyên sâu và có năng lực ở cấp độ cao trong tương lai. Tuy nhiên, tôi hiểu rằng hành trình đó cần bắt đầu từ nền tảng vững chắc. Vì vậy, tôi đang tìm kiếm cơ hội làm việc ở vị trí Junior Laravel Developer để học hỏi, rèn luyện và tích lũy kinh nghiệm thực tiễn trong môi trường chuyên nghiệp.
                                </p>
                                <p>
                                   Tôi mong muốn được làm việc cùng những người có kinh nghiệm, được hướng dẫn và tiếp cận quy trình phát triển thực tế, từ đó từng bước nâng cao kỹ năng kỹ thuật và tư duy hệ thống. Tôi luôn giữ tinh thần cầu thị, chủ động tiếp cận kiến thức mới và không ngại thử thách để trưởng thành hơn từng ngày trong lĩnh vực mình theo đuổi.
                                </p>
                                <p>Dưới đây là một số công nghệ tôi đã làm việc gần đây:</p>
                                <ul class="grid grid-cols-2 gap-2 font-mono text-sm">
                                    <li class="flex items-center"><span class="text-teal-600 dark:text-green mr-2">▹</span>Laravel</li>
                                    <li class="flex items-center"><span class="text-teal-600 dark:text-green mr-2">▹</span>PHP</li>
                                    <li class="flex items-center"><span class="text-teal-600 dark:text-green mr-2">▹</span>MySQL</li>
                                    <li class="flex items-center"><span class="text-teal-600 dark:text-green mr-2">▹</span>MSSQL</li>
                                    <li class="flex items-center"><span class="text-teal-600 dark:text-green mr-2">▹</span>RESTful APIs</li>
                                    <li class="flex items-center"><span class="text-teal-600 dark:text-green mr-2">▹</span>Pusher</li>
                                    <li class="flex items-center"><span class="text-teal-600 dark:text-green mr-2">▹</span>Linux Server</li>
                                    <li class="flex items-center"><span class="text-teal-600 dark:text-green mr-2">▹</span>Git & GitHub</li>
                                    <li class="flex items-center"><span class="text-teal-600 dark:text-green mr-2">▹</span>JavaScript</li>
                                </ul>
                            </div>
                        </div>
                        <div class="relative w-fit">
                            <div class="relative z-10">
                                <img src="{{ asset('images/Gemini_Generated_Image_jbsi36jbsi36jbsi.webp') }}" alt="Lê Văn An"
                                     class="rounded transition-all duration-300">
                            </div>
                            <div class="absolute inset-0 border-2 border-teal-600 dark:border-green rounded -z-10"></div>
                        </div>
                    </div>
                </section>

                <!-- Education Section -->
                <section id="education" class="py-24 fade-in-section">
                    <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-8 flex items-center">
                        <span class="nav-number text-xl">02.</span>
                         <span class="text-slate-900 dark:text-white">Học Vấn</span>
                    </h2>
                    <div class="relative">
                        <!-- Education 1 -->
                        <div class="mb-12 relative pl-8 border-l-2 border-slate-200 dark:border-slate-dark">
                            <div class="absolute w-3 h-3 bg-teal-600 dark:bg-green rounded-full -left-[7px] top-2"></div>
                            <h3 class="text-xl font-semibold text-slate-800 dark:text-white mb-1">Đại học Giao thông Vận tải</h3>
                            <p class="text-sm font-mono text-slate-500 dark:text-slate mb-4">2024 - 2026</p>
                            <p class="text-slate-600 dark:text-slate">Ngành: Công nghệ thông tin</p>
                        </div>

                        <!-- Education 2 -->
                        <div class="relative pl-8 border-l-2 border-slate-200 dark:border-slate-dark">
                            <div class="absolute w-3 h-3 bg-teal-600 dark:bg-green rounded-full -left-[7px] top-2"></div>
                            <h3 class="text-xl font-semibold text-slate-800 dark:text-white mb-1">Cao đẳng FPT Polytechnic</h3>
                            <p class="text-sm font-mono text-slate-500 dark:text-slate mb-4">2021 - 2023</p>
                             <p class="text-slate-600 dark:text-slate">Ngành: Công nghệ thông tin - Chuyên ngành Backend</p>
                        </div>
                    </div>
                </section>

                <!-- Experience Section -->
                <section id="experience" class="py-24 fade-in-section">
                    <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-8 flex items-center">
                        <span class="nav-number text-xl">03.</span>
                         <span class="text-slate-900 dark:text-white">Kinh Nghiệm Làm Việc</span>
                    </h2>
                    <div class="relative">
                        <!-- Experience 1 -->
                        <div class="mb-12 relative pl-8 border-l-2 border-slate-200 dark:border-slate-dark">
                            <div class="absolute w-3 h-3 bg-teal-600 dark:bg-green rounded-full -left-[7px] top-2"></div>
                            <h3 class="text-xl font-semibold text-slate-800 dark:text-white mb-1">Lập trình viên Backend (Laravel) @ <a href="https://xcel.bot/" target="_blank" rel="noopener noreferrer" class="font-medium text-teal-600 dark:text-green hover:underline">Xcel Bot</a></h3>
                            <p class="text-sm font-mono text-slate-500 dark:text-slate mb-4">01/2025 - 07/2025</p>
                            <div class="space-y-8 text-slate-600 dark:text-slate">
                                <!-- Project Poscake -->
                                <div>
                                    <h4 class="font-semibold text-slate-700 dark:text-slate-300">CRM quản lý bán hàng nội bộ – Poscake (mở rộng)</h4>
                                    <p class="text-xs font-mono my-2"><strong class="font-semibold">Công nghệ:</strong> Laravel, MySQL, Pancake Webhook, Blade, jQuery, Bootstrap, Google Sheets API, Pusher, WebRTC, OpenAI</p>
                                    <ul class="space-y-2">
                                        <li class="flex items-start"><span class="text-teal-600 dark:text-green mr-2 mt-1 shrink-0">▹</span><span>Phát triển và mở rộng hệ thống CRM nội bộ nhằm đáp ứng các nghiệp vụ quản lý và giám sát mà hệ thống gốc của Poscake chưa hỗ trợ.</span></li>
                                        <li class="flex items-start"><span class="text-teal-600 dark:text-green mr-2 mt-1 shrink-0">▹</span><span>Thiết kế các báo cáo tùy chỉnh theo tiêu chí: ngành hàng, trạng thái đơn, nhân viên xử lý, thời gian… kèm khả năng lọc nâng cao, tìm kiếm và xuất Excel.</span></li>
                                        <li class="flex items-start"><span class="text-teal-600 dark:text-green mr-2 mt-1 shrink-0">▹</span><span>Tích hợp webhook từ Pancake để tự động nhận dữ liệu đơn hàng, đồng bộ về hệ thống nội bộ phục vụ báo cáo và điều phối vận hành.</span></li>
                                        <li class="flex items-start"><span class="text-teal-600 dark:text-green mr-2 mt-1 shrink-0">▹</span><span>Xây dựng màn hình realtime từ Google Sheet, đồng bộ dữ liệu theo dõi ngành hàng thông qua Google Sheets API và hiển thị realtime bằng Pusher.</span></li>
                                        <li class="flex items-start"><span class="text-teal-600 dark:text-green mr-2 mt-1 shrink-0">▹</span><span>Phát triển hệ thống gọi điện nội bộ bằng WebRTC, tích hợp ghi âm và chuyển giọng nói thành văn bản. Áp dụng AI (ATO, MCP) để phân tích nội dung cuộc gọi.</span></li>
                                    </ul>
                                </div>
                                <!-- Project KhoaHocAI -->
                                <div>
                                    <h4 class="font-semibold text-slate-700 dark:text-slate-300">Nền tảng học trực tuyến – khoahocai.pro</h4>
                                    <p class="text-xs font-mono my-2"><strong class="font-semibold">Vai trò:</strong> Fullstack Laravel Developer | <strong class="font-semibold">Công nghệ:</strong> Laravel, MySQL, jQuery, AJAX, Blade, HTML/CSS, Mail API, VideoJS</p>
                                    <ul class="space-y-2">
                                        <li class="flex items-start"><span class="text-teal-600 dark:text-green mr-2 mt-1 shrink-0">▹</span><span><strong>Phát triển toàn bộ hệ thống học trực tuyến từ đầu đến cuối với đầy đủ tính năng:</strong></span>
                                            <ul class="list-disc pl-5 mt-1 space-y-1">
                                                <li>Đăng ký, đăng nhập, phân quyền học viên và quản trị viên.</li>
                                                <li>Thêm/sửa khoá học, chương học, bài học kèm video, quản lý học viên và đơn hàng.</li>
                                                <li>Tìm kiếm, lọc (filter) trên tất cả các màn hình: danh sách khoá học, bài học, học viên, lịch sử giao dịch...</li>
                                                <li>Tích hợp thanh toán online, xử lý đơn hàng và gửi email hàng loạt khi có khoá học mới hoặc cập nhật nội dung.</li>
                                                <li>Giao diện học tập hiện đại, hỗ trợ học viên xem video, theo dõi tiến độ học, kiểm tra trạng thái hoàn thành bài học theo từng chương.</li>
                                                <li>Thiết kế responsive hoàn toàn, hoạt động mượt mà trên mọi thiết bị (desktop, tablet, mobile).</li>
                                                <li>Hệ thống được tối ưu hiệu năng để phục vụ số lượng lớn người dùng cùng lúc với trải nghiệm ổn định và liền mạch.</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Experience 2 -->
                        <div class="mb-12 relative pl-8 border-l-2 border-slate-200 dark:border-slate-dark">
                            <div class="absolute w-3 h-3 bg-teal-600 dark:bg-green rounded-full -left-[7px] top-2"></div>
                            <h3 class="text-xl font-semibold text-slate-800 dark:text-white mb-1">Lập trình viên Backend Laravel @ <a href="https://btpholdings.com.vn/" target="_blank" rel="noopener noreferrer" class="font-medium text-teal-600 dark:text-green hover:underline">Cty CP Tập đoàn Bách Tường Phát</a></h3>
                            <p class="text-sm font-mono text-slate-500 dark:text-slate mb-4">01/2024 - 06/2024</p>
                            <ul class="space-y-4 text-slate-600 dark:text-slate">
                                <li class="flex items-start"><span class="text-teal-600 dark:text-green mr-2 mt-1">▹</span><span><strong>Tích hợp và đồng bộ dữ liệu Shopee:</strong> Tìm hiểu và kết nối với API của Shopee để tự động lấy dữ liệu đơn hàng và sản phẩm về hệ thống web nội bộ. Sau đó, đồng bộ dữ liệu này từ web lên hệ thống server của công ty, đảm bảo dữ liệu cập nhật chính xác theo thời gian thực.</span></li>
                                <li class="flex items-start"><span class="text-teal-600 dark:text-green mr-2 mt-1">▹</span><span><strong>Làm việc với Magento:</strong> Hiểu rõ cấu trúc hệ thống thương mại điện tử Magento, hỗ trợ trong việc tích hợp và đồng bộ dữ liệu sản phẩm, khách hàng, đơn hàng giữa Magento và hệ thống nội bộ.</span></li>
                                <li class="flex items-start"><span class="text-teal-600 dark:text-green mr-2 mt-1">▹</span><span><strong>Phát triển API cho Front-end:</strong> Phát triển các API phục vụ hiển thị và xử lý dữ liệu phía client, đồng thời tích hợp vào hệ thống CRM nội bộ phục vụ nghiệp vụ của doanh nghiệp.</span></li>
                                <li class="flex items-start"><span class="text-teal-600 dark:text-green mr-2 mt-1">▹</span><span><strong>Xây dựng Logic nghiệp vụ:</strong> Thiết kế và lập trình các chức năng xử lý nghiệp vụ (đơn hàng, sản phẩm, khách hàng, quyền truy cập...), đảm bảo tính chính xác và hiệu quả khi vận hành.</span></li>
                                <li class="flex items-start"><span class="text-teal-600 dark:text-green mr-2 mt-1">▹</span><span><strong>Tối ưu hiệu năng SQL:</strong> Viết và tối ưu các truy vấn SQL (Stored Procedures, Triggers), giúp tăng hiệu suất xử lý dữ liệu lớn, hạn chế tối đa các truy vấn tốn tài nguyên.</span></li>
                                <li class="flex items-start"><span class="text-teal-600 dark:text-green mr-2 mt-1">▹</span><span><strong>Hợp tác và triển khai dự án:</strong> Làm việc chặt chẽ với các thành viên trong team để triển khai các tính năng mới, fix bugs, và cải tiến hệ thống theo yêu cầu thực tế.</span></li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Projects Section -->
                <section id="projects" class="py-24 fade-in-section">
                    <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-12 flex items-center">
                        <span class="nav-number text-xl">04.</span>
                        <span class="text-slate-900 dark:text-white">Một trong số các dự án</span>
                    </h2>
                    
                    <div class="grid md:grid-cols-2 gap-8 items-center transition-transform duration-300 hover:-translate-y-2">
                        <div class="relative aspect-video rounded overflow-hidden md:order-last">
                            <a href="https://khoahocai.pro/" target="_blank" rel="noopener noreferrer" class="block">
                                <img src="{{ asset('images/khoahocai.pro.webp') }}" alt="KhoaHocAI.Pro" class="object-cover w-full h-full">
                                <div class="absolute inset-0 bg-teal-600/20 dark:bg-navy/70 hover:bg-transparent transition-all duration-300"></div>
                            </a>
                        </div>
                        <div class="text-left md:text-right">
                            <p class="font-mono text-teal-600 dark:text-green text-sm mb-2">Dự án Tự động hóa & AI</p>
                            <h3 class="text-2xl font-semibold text-slate-800 dark:text-white mb-4"><a href="https://khoahocai.pro/" target="_blank" rel="noopener noreferrer" class="hover:text-teal-600 dark:hover:text-green transition-colors">Website KhoaHocAI.Pro</a></h3>
                            <div class="bg-slate-100 dark:bg-navy-light p-6 rounded-lg mb-4 shadow-lg">
                                <p class="text-slate-600 dark:text-slate">Là người phụ trách chính, tôi đã phát triển toàn diện trang web từ backend đến frontend. Công việc bao gồm xây dựng hệ thống quản lý khóa học, tích hợp các workflow tự động hóa bằng n8n, triển khai các API cho Zalo và OpenAI, và đảm bảo hiệu suất, bảo mật cho toàn bộ hệ thống.</p>
                            </div>
                            <ul class="flex justify-start md:justify-end space-x-4 font-mono text-sm text-slate-600 dark:text-slate">
                                <li>Laravel</li>
                                <li>n8n</li>
                                <li>OpenAI API</li>
                                <li>MySQL</li>
                                <li>Linux</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Contact Section -->
                <section id="contact" class="py-24 text-center fade-in-section">
                    <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-8 flex items-center justify-center">
                        <span class="nav-number text-xl">05.</span>
                        <span class="text-slate-900 dark:text-white">Liên Hệ</span>
                    </h2>
                    <p class="max-w-md mx-auto text-slate-600 dark:text-slate mb-12">
                        Tôi hiện đang tìm kiếm cơ hội mới. Dù bạn có câu hỏi hay chỉ muốn chào hỏi, tôi sẽ cố gắng hết sức để trả lời bạn!
                        Hãy kết nối với tôi qua
                    </p>
                    <div class="flex justify-center items-center space-x-6">
                         <a href="https://github.com/andz184" target="_blank" rel="noopener noreferrer" class="text-slate-700 dark:text-slate-400 hover:text-teal-600 dark:hover:text-green transition-colors transform hover:-translate-y-1">
                            <svg class="w-10 h-10" role="img" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                         </a>
                         <a href="mailto:levanan3418@gmail.com" class="text-slate-700 dark:text-slate-400 hover:text-teal-600 dark:hover:text-green transition-colors transform hover:-translate-y-1">
                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                    </svg>
                         </a>
                </div>
                </section>
            </main>

    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script>
        // Particle.js Configuration
        function initParticles(theme) {
            const color = theme === 'dark' ? '#8892b0' : '#495670';
            const opacity = theme === 'dark' ? 0.2 : 0.3;

            particlesJS('particles-js', {
                "particles": { "number": { "value": 40, "density": { "enable": true, "value_area": 800 } }, "color": { "value": color }, "shape": { "type": "circle" }, "opacity": { "value": opacity, "random": false }, "size": { "value": 3, "random": true }, "line_linked": { "enable": true, "distance": 150, "color": color, "opacity": opacity, "width": 1 }, "move": { "enable": true, "speed": 2, "direction": "none", "random": false, "straight": false, "out_mode": "out", "bounce": false } },
                "interactivity": { "detect_on": "canvas", "events": { "onhover": { "enable": false, "mode": "repulse" }, "onclick": { "enable": false, "mode": "push" }, "resize": true }, "modes": { "repulse": { "distance": 100, "duration": 0.4 }, "push": { "particles_nb": 4 } } },
                "retina_detect": true
            });
        }
        
        document.addEventListener("DOMContentLoaded", function() {
            // Smooth scroll
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });

            // Scroll Animation Observer
            const sections = document.querySelectorAll('.fade-in-section');
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                    }
                });
            }, { threshold: 0.1 });
            sections.forEach(section => {
                observer.observe(section);
            });
        });

        // Theme toggle functionality
        const themeToggleBtn = document.getElementById('theme-toggle');
        const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');
        
        let currentTheme = localStorage.getItem('color-theme');
        if (!currentTheme) {
            currentTheme = 'dark';
            localStorage.setItem('color-theme', 'dark');
        }

        if (currentTheme === 'dark') {
            document.documentElement.classList.add('dark');
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            document.documentElement.classList.remove('dark');
            themeToggleDarkIcon.classList.remove('hidden');
        }
        
        initParticles(currentTheme);

        themeToggleBtn.addEventListener('click', function() {
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            document.documentElement.classList.toggle('dark');
            let newTheme = document.documentElement.classList.contains('dark') ? 'dark' : 'light';
            localStorage.setItem('color-theme', newTheme);

            if (window.pJSDom && window.pJSDom.length > 0) {
                window.pJSDom[0].pJS.fn.vendors.destroypJS();
                window.pJSDom = [];
            }
            initParticles(newTheme);
        });
    </script>
    <!-- Schema.org for Google -->
    <script type="application/ld+json">
        @json($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
    </script>
    </body>
</html>
