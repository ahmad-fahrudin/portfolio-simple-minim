<main class="main">
    <!--==================== HOME ====================-->
    <section class="home section" id="home">
        <div class="home__container container grid">
            <div class="home__content grid">
                <div class="home__social">
                    <a href="https://www.instagram.com/fahrudinahmad20/" target="_blank" class="home__social-icon">
                        <i class="uil uil-instagram"></i>
                    </a>
                    <a href="https://www.facebook.com/people/Fahrudin-Ahmad/pfbid02trwDXrnMhxCMN1ABXdXWR2QbkEajCAYbt87uDhgWyJfYEv9BqDR5LsUA5TaH8sJ8l/"
                        target="_blank" class="home__social-icon">
                        <i class="uil uil-facebook"></i>
                    </a>
                    <a href="https://github.com/ahmad-fahrudin" target="_blank" class="home__social-icon">
                        <i class="uil uil-github-alt"></i>
                    </a>
                </div>

                <div class="home__img">
                    <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <mask id="mask0" mask-type="alpha">
                            <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547
                                    130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775
                                    97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666
                                    0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                        </mask>
                        <g mask="url(#mask0)">
                            <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346
                                    165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403
                                    129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028
                                    -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                            <image class="home__blob-img" x="" xlink:href="{{ asset('image/1.jpg') }}" />
                        </g>
                    </svg>
                </div>

                <div class="home__data">
                    <h1 class="home__title">I'am Ahmad Fahrudin</h1>
                    <h3 class="home__subtitle">Full Stack Developer</h3>
                    <p class="home__description">"As a full stack developer, I have expertise in building and optimizing
                        applications from frontend to backend. I enjoy finding innovative solutions to complex
                        technology challenges."</p>
                    <a href="#contact" class="button button--flex home__button">
                        Contact Me<i class="uil uil-message button__icon"></i>
                    </a>
                </div>
            </div>

            <div class="home__scroll">
                <a href="#about" class="home__scroll-button button--flex">
                    <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                    <span class="home__scroll-name">Scroll Down</span>
                    <i class="uil uil-arrow-down home__scroll-arrow"></i>
                </a>
            </div>
        </div>
    </section>

    <!--==================== ABOUT ====================-->
    <section class="about section" id="about">
        <h2 class="section__title">About Me</h2>
        <span class="section__subtitle">My Introduction</span>

        <div class="about__container container grid">
            <img src="{{ asset('image/2.jpg') }}" alt="" class="about__img">
            <div class="about__data">
                <p class="about__description">
                    Fullstack Developer with extensive knowledge and years of experience in developing and
                    maintaining both front-end and back-end systems. Skilled in a wide range of technologies and tools,
                    delivering high-quality, efficient, and scalable solutions.
                </p>
                <div class="about__info">
                    <div>
                        <span class="about__info-title">02+</span>
                        <span class="about__info-name">Years <br> experience</span>
                    </div>
                    <div>
                        <span class="about__info-title">05+</span>
                        <span class="about__info-name">Completed <br> certifications</span>
                    </div>
                    <div>
                        <span class="about__info-title">02+</span>
                        <span class="about__info-name">companies<br>worked</span>
                    </div>
                </div>

                <div class="about__buttons">
                    <a download="" href="{{ route('download.resume') }}" class="button button--flex">
                        Download Resume<i class="uil uil-download-alt button__icon"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--==================== SKILLS ====================-->
    <section class="skills section" id="skills">
        <h2 class="section__title">Skills</h2>
        <span class="section__subtitle">My technical level</span>

        <div class="skills__container container grid">
            <div>
                <div class="skills__content skills__close">
                    <div class="skills__header">
                        <i class="uil uil-brackets-curly skills__icon"></i>
                        <div>
                            <h1 class="skills__title">Frontend Developer</h1>
                            <span class="skills__subtitle">More than 2 years</span>
                        </div>
                        <i class="uil uil-angle-down skills__arrow"></i>
                    </div>
                    <div class="skills__list grid">
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">HTML</h3>
                                <span class="skills__number">90%</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__html"></span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">CSS</h3>
                                <span class="skills__number">80%</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__css"></span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">Bootstrap</h3>
                                <span class="skills__number">85%</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__bootstrap"></span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">Java Script</h3>
                                <span class="skills__number">70%</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__wordpress"></span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">Laravel Blade Engine</h3>
                                <span class="skills__number">80%</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__laravel"></span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">Jquery</h3>
                                <span class="skills__number">70%</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__jquery"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="skills__content skills__close">
                    <div class="skills__header">
                        <i class="uil uil-money-bill skills__icon"></i>
                        <div>
                            <h1 class="skills__title">Backend Developer</h1>
                            <span class="skills__subtitle">More than 2 years</span>
                        </div>
                        <i class="uil uil-angle-down skills__arrow"></i>
                    </div>
                    <div class="skills__list grid">
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">PHP</h3>
                                <span class="skills__number">70%</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__wordpress"></span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">Laravel</h3>
                                <span class="skills__number">80%</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__laravel"></span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">Rest API</h3>
                                <span class="skills__number">75%</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__api"></span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">Database MySQL</h3>
                                <span class="skills__number">85%</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__sql"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="skills__content skills__close">
                    <div class="skills__header">
                        <i class="uil uil-analytics skills__icon"></i>
                        <div>
                            <h1 class="skills__title">Lain-lain</h1>
                            <span class="skills__subtitle">More than 2 years</span>
                        </div>
                        <i class="uil uil-angle-down skills__arrow"></i>
                    </div>
                    <div class="skills__list grid">
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">MVC Pattern</h3>
                                <span class="skills__number">80%</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__git"></span>
                            </div>
                        </div>
                    </div>
                    <div class="skills__list grid">
                        <div class="skills__data">
                            <div class="skills__titles">
                                <h3 class="skills__name">Git/GitHub</h3>
                                <span class="skills__number">80%</span>
                            </div>
                            <div class="skills__bar">
                                <span class="skills__percentage skills__git"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==================== QUALIFICATION ====================-->
    <section class="qualification__section">
        <h2 class="section__title">Qualification</h2>
        <span class="section__subtitle">My personal journey</span>

        <div class="qualification__container container">
            <div class="qualification__tabs">
                <div class="qualification__button button--flex" data-target='#education'>
                    <i class="uil uil-graduation-cap qualification__icon"></i>
                    Education
                </div>

                <div class="qualification__button button--flex qualification__active" data-target="#work">
                    <i class="uil uil-briefcase-alt qualification__icon"></i>
                    Work
                </div>
            </div>

            <div class="qualification__sections">
                <!--==================== QUALIFICATION CONTENT 1 ====================-->
                <div class="qualification__content" data-content id="education">
                    <!--==================== QUALIFICATION 1 ====================-->
                    <div class="qualification__data">
                        <div>
                            <h3 class="qualification__title">MIPA </h3>
                            <span class="qualification__subtitle">SMA Negeri 1 Jepon</span>
                            <div class="qualification__calendar">
                                <i class="uil uil-calendar-alt"></i>
                                2015 - 2018
                            </div>
                        </div>

                        <div>
                            <span class="qualification__rounder"></span>
                            <span class="qualification__line"></span>
                        </div>
                    </div>

                    <!--==================== QUALIFICATION 2 ====================-->
                    <div class="qualification__data">
                        <div></div>
                        <div>
                            <span class="qualification__rounder"></span>
                            <span class="qualification__line"></span>
                        </div>

                        <div>
                            <h3 class="qualification__title">FullStack.id</h3>
                            <span class="qualification__subtitle">CODEPOLITAN</span>
                            <div class="qualification__calendar">
                                <i class="uil uil-calendar-alt"></i>
                                2019 - 2020
                            </div>
                        </div>
                    </div>

                    <!--==================== QUALIFICATION 3 ====================-->
                    <div class="qualification__data">
                        <div>
                            <h3 class="qualification__title">Online Course</h3>
                            <span class="qualification__subtitle">UDEMY</span>
                            <div class="qualification__calendar">
                                <i class="uil uil-calendar-alt"></i>
                                2020 - Sekarang
                            </div>
                        </div>

                        <div>
                            <span class="qualification__rounder"></span>
                        </div>
                    </div>
                </div>

                <!--==================== QUALIFICATION CONTENT 2 ====================-->
                <div class="qualification__content qualification__active" data-content id="work">
                    <!--==================== QUALIFICATION 1 ====================-->
                    <div class="qualification__data">
                        <div>
                            <h3 class="qualification__title">PT. BILINDO INFO SISTEMA</h3>
                            <span class="qualification__subtitle">Full Stack & Backend Developer</span>
                            <div class="qualification__calendar">
                                <i class="uil uil-calendar-alt"></i>
                                1 Mei 2021 - 31 Mei 2023
                            </div>
                        </div>

                        <div>
                            <span class="qualification__rounder"></span>
                            <span class="qualification__line"></span>
                        </div>
                    </div>

                    <!--==================== QUALIFICATION 2 ====================-->
                    <div class="qualification__data">
                        <div></div>
                        <div>
                            <span class="qualification__rounder"></span>
                        </div>

                        <div>
                            <h3 class="qualification__title">IAN STUDIOS</h3>
                            <span class="qualification__subtitle">Remote Full Stack Developer</span>
                            <div class="qualification__calendar">
                                <i class="uil uil-calendar-alt"></i>
                                1 Desember 2023 - 30 Juni 2024
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--==================== PORTFOLIO ====================-->
    <section class="portfolio section" id="portfolio">

        <h2 class="section__title">Portfolio</h2>
        <span class="section__subtitle">Most recent works</span>

        <div class="portfolio__container container swiper-container">
            <div class="swiper-wrapper">

                <div class="portfolio__content grid swiper-slide">
                    <img src="{{ asset('image/pos.png') }}" alt="" class="portfolio__img">

                    <div class="portfolio_">
                        <h3 class="portfolio__title">Point Of Sale Application</h3>
                        <p class="portfolio__description">"Compatible with various POS hardware such as receipt
                            printers, barcode scanners and cash drawers."</p>
                    </div>
                </div>
                <!--==================== PORTFOLIO 3 ====================-->

                <div class="portfolio__content grid swiper-slide">
                    <img src="{{ asset('image/booking.png') }}" alt="" class="portfolio__img">

                    <div class="portfolio_">
                        <h3 class="portfolio__title">Booking Hotel Application</h3>
                        <p class="portfolio__description">"Find hotels according to your preferences with advanced and
                            accurate search filters."</p>
                    </div>
                </div>
                <!--==================== PORTFOLIO 3 ====================-->

                <div class="portfolio__content grid swiper-slide">
                    <img src="{{ asset('image/school.jpg') }}" alt="" class="portfolio__img">

                    <div class="portfolio_">
                        <h3 class="portfolio__title">School Application</h3>
                        <p class="portfolio__description">"school management and online SPP payments"</p>
                    </div>
                </div>
                <div class="portfolio__content grid swiper-slide">
                    <img src="{{ asset('image/wedding.png') }}" alt="" class="portfolio__img">
                    <div class="portfolio_">
                        <h3 class="portfolio__title">Wedding Invitation</h3>
                        <p class="portfolio__description">"Every wedding invitation we create is designed with love and
                            attention to detail. From classic to modern styles, we are committed to presenting a design
                            that suits your personality and wedding theme."</p>
                    </div>
                </div>

                <!--==================== PORTFOLIO 2 ====================-->

                <div class="portfolio__content grid swiper-slide">
                    <img src="{{ asset('image/ecommerce.png') }}" alt="" class="portfolio__img">

                    <div class="portfolio_">
                        <h3 class="portfolio__title">E-Commerce Application</h3>
                        <p class="portfolio__description">"Powerful search features with customizable filters help
                            users find products quickly and easily."</p>
                    </div>
                </div>
                <!--==================== PORTFOLIO 2 ====================-->

                <div class="portfolio__content grid swiper-slide">
                    <img src="{{ asset('image/online-shop') }}.png" alt="" class="portfolio__img">

                    <div class="portfolio_">
                        <h3 class="portfolio__title">Online Shop Application</h3>
                        <p class="portfolio__description">"Responsive and easy-to-use design, ensuring a pleasant
                            shopping experience across devices."</p>
                    </div>
                </div>
            </div>

            <!-- add arrows-->
            <div class="swiper-button-next">
                <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
            </div>

            <div class="swiper-button-prev">
                <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
            </div>

            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>


        </div>

    </section>

    <!--==================== PROJECT IN MIND ====================-->
    <section class="project section">

        <div class="project__bg">
            <div class="project__container container grid">
                <div class="project__data">
                    <h2 class="project__title">You have a new project?</h2>
                    <p class="project__description">Contact me now and get discounts on your Web development
                        projects.</p>
                    <a href="#contact" class="button button--flex button--white">Contact me
                        <i class="uil uil-message project__icon button__icon"></i>
                    </a>

                </div>
                <!-- <img src="assets/img/project.png" alt="" class="project__img"> -->
            </div>
        </div>

    </section>

    <!--==================== CONTACT ME ====================-->
    <section class="contact section" id="contact">
        <h2 class="section__title">Contact me</h2>
        <span class="section__subtitle">Get in touch</span>

        <div class="contact__container container grid">
            <div>
                <div class="contact__information">
                    <i class="uil uil-phone-alt contact__icon"></i>

                    <div>
                        <h3 class="contact__title">WhatsApp</h3>
                        <span class="contatc__subtitle">0895-3608-89600</span>
                    </div>
                </div>

                <div class="contact__information">
                    <i class="uil uil-envelope contact__icon"></i>

                    <div>
                        <h3 class="contact__title">E-mail</h3>
                        <span class="contatc__subtitle">ahmadfahrudin200200@gmail.com</span>
                    </div>
                </div>

                <div class="contact__information">
                    <i class="uil uil-map-marker contact__icon"></i>

                    <div>
                        <h3 class="contact__title">Location</h3>
                        <span class="contatc__subtitle">Blora, Jawa Tengah</span>
                    </div>
                </div>
            </div>

            <form action="" method="POST" class="contact__form grid">
                <div class="contact__inputs grid">
                    <div class="contact__content">
                        <label for="name" class="contact__label ">Name</label>
                        <input type="text" class="contact__input" name="name">
                    </div>

                    <div class="contact__content">
                        <label for="" class="contact__label">E-mail</label>
                        <input type="email" class="contact__input" name="email">
                    </div>
                </div>

                <div class="contact__content">
                    <label for="" class="contact__label">Subject</label>
                    <input type="text" class="contact__input" name="subject">
                </div>

                <div class="contact__content">
                    <label for="" class="contact__label">Description</label>
                    <textarea name="description" id="" cols="0" rows="7" class="contact__input"></textarea>
                </div>

                <div>
                    <button type="submit" class="button button--flex">Send message
                        <i class="uil uil-message button__icon"></i>
                    </button>
                </div>
            </form>
        </div>

    </section>
</main>
