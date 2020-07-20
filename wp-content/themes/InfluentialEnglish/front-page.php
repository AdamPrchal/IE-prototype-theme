<?php get_header(); ?>
    <section class="section study-programs">
        <h2>Study programs 🇬🇧</h2>
        <div class="study-programs__list">
            <div class="study-programs__item">
                <div class="study-programs__title">
                    <h3>
                        Classroom <br/>
                        based courses <br/>
                        in London
                    </h3>
                </div>

                <div class="study-programs__features">
                    <p>🕒 Full time & Part-time courses available</p>
                    <p>🏠 Small classes – maximum 6 students per class</p>
                    <p>📈 Elementary to Advanced levels</p>
                    <p>⏱ Intensive 90-minute classes (no break)</p>
                    <p>🌐 Free WIFI</p>
                    <p>😷 COVID-19 – Sanitation dispensers and social distancing measures in place for safe learning</p>
                </div>
                <div class="study-programs__controls">
                    <div><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Classroom based courses' ) ) ); ?>">Find out more</a></div>
                    <button type="button" class="button button__green">
                        Free trial class
                    </button>
                </div>
            </div>
            <div class="study-programs__item">
                <div class="study-programs__title"><h3>
                        Live <br/>
                        interactive <br/>
                        online courses
                    </h3>
                </div>
                <div class="study-programs__features">
                    <p>🇬🇧 British teachers who are fun and friendly</p>
                    <p>🕒 Full time & Part-time courses available</p>
                    <p>🏠 Small classes – maximum 7 students per class</p>
                    <p>📈 Elementary to Advanced levels</p>
                    <p>⏱ Intensive 90-minute classes (no break)</p>
                    <p>💸 Affordable prices – these courses are approximately half the price of our classroom-based
                        courses</p>
                </div>
                <div class="study-programs__controls">
                    <div><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Live online courses' ) ) ); ?>">Find out more</a></div>
                    <button type="button" class="button button__green">
                        Free trial class
                    </button>
                </div>
            </div>
            <div class="study-programs__item">
                <div class="study-programs__title"><h3>
                        Self study <br/>
                        package
                    </h3>
                </div>
                <div class="study-programs__features">
                    <p>🍿 Animated grammar video explanations</p>
                    <p>🎬 Hours of online grammar class video recordings</p>
                    <p>📚 Over 1000 practice exercises</p>
                    <p>✅ Correction and feedback from our highly qualified English teachers</p>
                    <p>📊 End of unit tests with progress charts to monitor progress</p>
                    <p>🎓 Certification on completion of the course</p>
                </div>
                <div class="study-programs__controls">
                    <div><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Self study package' ) ) ); ?>">Find out more</a></div>
                    <button type="button" class="button button__green">
                        Free trial class
                    </button>
                </div>
            </div>
        </div>
    </section>
    <div class="triangle triangle-white"></div>


    <section class="section why-ie">
        <h2>Why to choose Influential English</h2>
        <div class="why-ie__list">
            <div class="why-ie__item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/016-reward.svg" alt=""/>
                <h3>
                    Improve your level
                </h3>
            </div>
            <div class="why-ie__item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/020-startup.svg" alt=""/>
                <h3>
                    Beginner? No problem!
                </h3>
            </div>
            <div class="why-ie__item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/029-balance.svg" alt=""/>
                <h3>
                    Best prices
                </h3>
            </div>
            <div class="why-ie__item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/030-strategy.svg" alt=""/>
                <h3>
                    Study plans for anyone
                </h3>
            </div>
            <div class="why-ie__item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/050-briefcase.svg" alt=""/>
                <h3>
                    We provide invoices
                </h3>
            </div>
            <div class="why-ie__item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/040-location.svg" alt=""/>
                <h3>
                    Lessons from anywhere
                </h3>
            </div>
        </div>
    </section>

<?php get_footer(); ?>