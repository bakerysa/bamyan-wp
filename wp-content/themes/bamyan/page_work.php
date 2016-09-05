<?php
/**
 * Template Name: Work
 * @package bamyan
 */

get_header();
?>

<div id="fullpage">

    <div class="section" id="section1" data-midnight="yellow">
        <div class="slide">
            <div class="container">
            <div class="col-md-6">
                <h2 class="yellow">EL MASHROUA</h2>
            </div>
            <div class="col-md-6">
                <h2 class="yellow">BAMYAN FRANCE</h2>
            </div>
                </div>
        </div>
        <div class="slide">
            <div class="container yellow">
            <div class="col-md-12">
                <h2>GAME CHANGERS</h2>
            </div>
            <div class="col-md-3">
                <h4>Show Name 1</h4>
                <p>We are a team of 5-50 (depending on projects) talented young people from really different backgrounds. We are a hybrid social enterprise: a US-registered non-profit parent co</p>
            </div>
            <div class="col-md-3">
                <h4>Show Name 1</h4>
                <p>We are a team of 5-50 (depending on projects) talented young people from really different backgrounds. We are a hybrid social enterprise: a US-registered non-profit parent co</p>
            </div>
            <div class="col-md-3">
                <h4>Show Name 1</h4>
                <p>We are a team of 5-50 (depending on projects) talented young people from really different backgrounds. We are a hybrid social enterprise: a US-registered non-profit parent co</p>
            </div>
            <div class="col-md-3">
                <h4>Show Name 1</h4>
                <p>We are a team of 5-50 (depending on projects) talented young people from really different backgrounds. We are a hybrid social enterprise: a US-registered non-profit parent co</p>
            </div>
        </div>
        <div class="slide">
            <div class="container yellow">
                            <div class="col-md-12">
                <h2>NEW SHOWS IN DEVELOPMENT</h2>
            </div>
            <div class="col-md-3">
                <h4>Show Name 1</h4>
                <p>We are a team of 5-50 (depending on projects) talented young people from really different backgrounds. We are a hybrid social enterprise: a US-registered non-profit parent co</p>
            </div>
            <div class="col-md-3">
                <h4>Show Name 1</h4>
                <p>We are a team of 5-50 (depending on projects) talented young people from really different backgrounds. We are a hybrid social enterprise: a US-registered non-profit parent co</p>
            </div>
            <div class="col-md-3">
                <h4>Show Name 1</h4>
                <p>We are a team of 5-50 (depending on projects) talented young people from really different backgrounds. We are a hybrid social enterprise: a US-registered non-profit parent co</p>
            </div>
            <div class="col-md-3">
                <h4>Show Name 1</h4>
                <p>We are a team of 5-50 (depending on projects) talented young people from really different backgrounds. We are a hybrid social enterprise: a US-registered non-profit parent co</p>
            </div>
        </div>
            </div>
            </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/src/vendor/js/jquery.fullPage.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/midnight.jquery.min.js"></script>
        <script>
        $(".menu-opener").click(function () {
            $(".menu-opener, .menu-opener-inner, .menu").toggleClass("active");
        });
    </script>
<script>
    $(document).ready(function () {
        $('#fullpage').fullpage({
            //Navigation
            menu: '#menu',
            lockAnchors: false,
            navigation: false,
            navigationPosition: 'right',
            navigationTooltips: ['firstSlide', 'secondSlide'],
            showActiveTooltip: false,
            slidesNavigation: true,
            slidesNavPosition: 'bottom',
            //Scrolling
            css3: true,
            scrollingSpeed: 700,
            autoScrolling: false,
            fitToSection: true,
            fitToSectionDelay: 1000,
            scrollBar: true,
            easing: 'linear',
            easingcss3: 'ease',
            loopBottom: true,
            loopTop: false,
            loopHorizontal: true,
            continuousVertical: false,
            scrollOverflow: false,
            scrollOverflowOptions: null,
            touchSensitivity: 15,
            //Accessibility
            keyboardScrolling: true,
            animateAnchor: true,
            recordHistory: true,
            //Design
            controlArrows: true,
            verticalCentered: true,
            sectionsColor: ['#342e8e'],
            fixedElements: '#header, #footer',
            responsiveWidth: 1000,
            responsiveHeight: 700,
                afterLoad() {
                    $('#header').midnight();
                   $('#footer').midnight();
                  },
        });
    });
</script>

</body>

</html>
