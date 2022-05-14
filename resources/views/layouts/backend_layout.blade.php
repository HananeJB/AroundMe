<!DOCTYPE html>
<html lang="en">

<head>

    @yield('head')

    @include('layouts.includes.head_back')



</head>

<body>

<div id="main_wrapper">

    @include('layouts.includes.header_back')

    @yield('content')




</div>

<script src="scripts/jquery-3.4.1.min.js"></script>
<script src="scripts/chosen.min.js"></script>
<script src="scripts/perfect-scrollbar.min.js"></script>
<script src="scripts/slick.min.js"></script>
<script src="scripts/rangeslider.min.js"></script>
<script src="scripts/magnific-popup.min.js"></script>
<script src="scripts/jquery-ui.min.js"></script>
<script src="scripts/mmenu.js"></script>
<script src="scripts/tooltips.min.js"></script>
<script src="scripts/color_switcher.js"></script>
<script src="scripts/jquery_custom.js"></script>
<script>
    (function($) {
        try {
            var jscr1 = $('.js-scrollbar');
            if (jscr1[0]) {
                const ps1 = new PerfectScrollbar('.js-scrollbar');

            }
        } catch (error) {
            console.log(error);
        }
    })(jQuery);
</script>
</body>
</html>
