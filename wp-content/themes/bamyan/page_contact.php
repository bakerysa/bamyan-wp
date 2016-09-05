<?php
/**
 * Template Name: Contact
 * @package bamyan
 */

get_header();
?>

<div id="fullpage">

    <div class="section" id="section4" data-midnight="blue">
        <div class="container h-padding-sm">
            <div class="col-md-3">
                <h4>Want to bring our shows to your area?</h4>
                <p>We work with local teams.</p>
            </div>
            <div class="col-md-3">
                <h4>Want to become a partner?</h4>
                <p>We work with local teams.</p>
            </div>
            <div class="col-md-3">
                <h4>Are you looking for a job?</h4>
                <p>We work with local teams.</p>
            </div>
            <div class="col-md-3">
                <h4>Do you just want to chat?</h4>
                <p>We work with local teams.</p>
            </div>
        </div>
        <div class="container h-padding-sm" style="background-color:#43DD81;">
            <div class="row h-padding-sm">
                <div class="col-md-4">
                    <h4>UNITED STATES</h4>
                </div>
                <div class="col-md-4">
                    +01 509-763-9937
                    <br> info@bamyan.org
                </div>
                <div class="col-md-4">
                    1598 Sun Valley Road
                    <br> Leavenworth,
                    <br> WA 98826
                    <br> USA
                </div>
            </div>
            <div class="row h-padding-sm">
                <div class="col-md-4">
                    <h4>MIDDLE EAST</h4>
                </div>
                <div class="col-md-4">
                    +01 509-763-9937
                    <br> info@bamyan.org
                </div>
                <div class="col-md-4">
                    1598 Sun Valley Road
                    <br> Leavenworth,
                    <br> WA 98826
                    <br> USA
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
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
            sectionsColor: ['#4bef91'],
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
