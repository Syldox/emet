<!DOCTYPE html>
<html lang="en">
    @include('partials._head')
    <body id="page-top">

        @include('partials._navbar')
        @include('partials._messages')

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>
        </div>

        @include('partials._footer')
        @include('partials._javascript')

    </body>
</html>


<style>
    #toTop{
        position: fixed;
        bottom: 10px;
        right: 10px;
        cursor: pointer;
        display: none;
        background-color: #ff6700;
        border-color: #ff6700;
    }
</style>

<script>
    $(document).ready(function(){
        $('body').append('<div id="toTop" class="btn btn-info"><span class="glyphicon glyphicon-chevron-up"></span> Top</div>');
        $(window).scroll(function () {
            if ($(this).scrollTop() != 0) {
                $('#toTop').fadeIn();
            } else {
                $('#toTop').fadeOut();
            }
        });
        $('#toTop').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });
    });

</script>