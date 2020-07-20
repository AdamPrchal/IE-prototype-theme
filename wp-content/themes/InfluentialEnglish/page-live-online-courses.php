<?php get_header(); ?>
    <section class="section program-title grey-bg">
        <h1><?php the_title() ?></h1>

    </section>
    <section class="section pricing">
        <h2>Pricing</h2>
        <div class="pricing__item">
            <h3>Full time</h3>
            <p>(Mon - Fri)</p>
            <table class="pricing__table">
                <thead>
                <tr>
                    <th></th>
                    <th>Price per week</th>
                    <th>Price per hour</th>
                    <th>Total classes</th>
                    <th>Total hours</th>
                </tr>
                </thead>
                <tbody class="items-3">
                <tr>
                    <td>8<br class="mobile-break"> weeks</td>
                    <td>£59</td>
                    <td>£7,50</td>
                    <td>40</td>
                    <td>60</td>
                </tr>
                <tr>
                    <td>12<br class="mobile-break"> weeks</td>
                    <td>£53</td>
                    <td>£6,90</td>
                    <td>60</td>
                    <td>90</td>
                </tr>
                <tr>
                    <td>16<br class="mobile-break"> weeks</td>
                    <td>£49</td>
                    <td>£6,50</td>
                    <td>80</td>
                    <td>120</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="pricing__item">
            <h3>Part time</h3>
            <p>(3x days per week – you select the days)</p>
            <table class="pricing__table">
                <thead>
                <tr>
                    <th></th>
                    <th>Price per week</th>
                    <th>Price per hour</th>
                    <th>Total classes</th>
                    <th>Total hours</th>
                </tr>
                </thead>
                <tbody class="items-3">
                <tr>
                    <td>8<br class="mobile-break"> weeks</td>
                    <td>£49</td>
                    <td>£10,80</td>
                    <td>24</td>
                    <td>36</td>
                </tr>
                <tr>
                    <td>12<br class="mobile-break"> weeks</td>
                    <td>£43</td>
                    <td>£9,30</td>
                    <td>36</td>
                    <td>54</td>
                </tr>
                <tr>
                    <td>16<br class="mobile-break"> weeks</td>
                    <td>£39</td>
                    <td>£8,60</td>
                    <td>48</td>
                    <td>72</td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="schedule section grey-bg">
        <h2>Schedule</h2>

        <div class="schedule__list">
            <div class="schedule__item">
                <h3>10:00 - 11:30</h3>
                <div class="classesType">
                    <div class="classesType__item pink">
                        <h4>Upper intermediate<br>
                            general English</h4>
                    </div>
                </div>

            </div>
            <div class="schedule__item">
                <h3>12:00 - 13:30</h3>
                <div class="classesType">
                    <div class="classesType__item yellow">
                        <h4>Intermediate<br>
                            general English</h4>
                    </div>
                </div>

            </div>
            <div class="schedule__item">
                <h3>14:00 - 15:30</h3>
                <div class="classesType">
                    <div class="classesType__item blue">
                        <h4>IELTS<br>
                            academic English</h4>
                    </div>
                </div>

            </div>
            <div class="schedule__item">
                <h3>16:00 - 17:30</h3>
                <div class="classesType">
                    <div class="classesType__item pink">
                        <h4>Upper intermediate<br>
                            general English</h4>
                    </div>
                </div>

            </div>
            <div class="schedule__item column-2">
                <h3>19:00 - 20:30</h3>
                <div class="classesType">
                    <div class="classesType__item pink">
                        <h4>Upper intermediate<br>
                            general English</h4>
                    </div>
                    <div class="classesType__item green">
                        <h4>Elementary<br>
                            general English</h4>
                    </div>
                    <div class="classesType__item blue">
                        <h4>IELTS<br>
                            academic English</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>