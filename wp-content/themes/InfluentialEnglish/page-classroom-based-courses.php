<?php get_header(); ?>
<section class="section program-title grey-bg">
    <h1><?php  the_title() ?></h1>

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
            <tbody class="items-4">
            <tr>
                <td>4<br class="mobile-break"> weeks</td>
                <td>£109</td>
                <td>£14.50</td>
                <td>20</td>
                <td>30</td>
            </tr>
            <tr>
                <td>8<br class="mobile-break"> weeks</td>
                <td>£89</td>
                <td>£11,80</td>
                <td>40</td>
                <td>60</td>
            </tr>
            <tr>
                <td>12<br class="mobile-break"> weeks</td>
                <td>£79</td>
                <td>£10,50</td>
                <td>60</td>
                <td>90</td>
            </tr>
            <tr>
                <td>16<br class="mobile-break"> weeks</td>
                <td>£69</td>
                <td>£9,20</td>
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
            <tbody class="items-4">
            <tr>
                <td>4<br class="mobile-break"> weeks</td>
                <td>£89</td>
                <td>£19,70</td>
                <td>12</td>
                <td>18</td>
            </tr>
            <tr>
                <td>8<br class="mobile-break"> weeks</td>
                <td>£79</td>
                <td>£17,50</td>
                <td>24</td>
                <td>36</td>
            </tr>
            <tr>
                <td>12<br class="mobile-break"> weeks</td>
                <td>£75</td>
                <td>£16,60</td>
                <td>36</td>
                <td>54</td>
            </tr>
            <tr>
                <td>16<br class="mobile-break"> weeks</td>
                <td>£69</td>
                <td>£15,30</td>
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
        <div class="schedule__item column-1">
            <h3>10:00 - 11:30</h3>
            <div class="classesType">
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
        <div class="schedule__item">
            <h3>12:00 - 13:30</h3>
            <div class="classesType">
                <div class="classesType__item pink">
                    <h4>Upper intermediate<br>
                        general English</h4>
                </div>

            </div>

        </div>
        <div class="schedule__item">
            <h3>14:00 - 15:30</h3>
            <div class="classesType">
                <div class="classesType__item green">
                    <h4>Elementary<br>
                        general English</h4>
                </div>
            </div>

        </div>
        <div class="schedule__item">
            <h3>16:00 - 17:30</h3>
            <div class="classesType">
                <div class="classesType__item yellow">
                    <h4>Intermediate<br>
                        general English</h4>
                </div>
            </div>

        </div>
        <div class="schedule__item">
            <h3>19:00 - 20:30</h3>
            <div class="classesType">
                <div class="classesType__item yellow">
                    <h4>Intermediate<br>
                        general English</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
