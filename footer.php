        <div class="backtotop">
            <a href="#backtotop">Back to top <i class="glyphicon glyphicon-menu-up"></i></a>
        </div>
        <div class="footer">
            <a href="index.php"><img src="/images/Drawing.png" style="padding-top: 25px;" alt="Ben & Kathryn logo" /></a>
            <hr style="border-top: 1px dashed grey; width: 50%">
            <span>Contact us at benandkathryn16@gmail.com</span>
            <p>Website built and designed by the groom.</p>
            <p>Icons designed by Freepik.</p>
        </div>

        <!-- jQuery Version 1.11.1 -->
        <script src="js/jquery.js"></script>
        <script>
            $(document).ready(function () {
                $("#dayblock").animate({ left: '0px' },600);
                $("#hourblock").animate({ left: '0px' },1000);
                $("#minuteblock").animate({ left: '0px' },1400);
                $("#secondblock").animate({ left: '0px' },1800);
            });
        </script>

        <!--Countdown Timer-->
        <script src="js/counter/jquery.countdown.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
         <script src="js/bootstrap.min.js"></script>

        <!-- Blueimp -->
        <script src="js/blueimp/blueimp-gallery.min.js"></script>

        <!--Blueimp script for gallery-->
        <script>
            document.getElementById('links').onclick = function (event) {
                event = event || window.event;
                var target = event.target || event.srcElement,
                    link = target.src ? target.parentNode : target,
                    options = {index: link, event: event},
                    links = this.getElementsByTagName('a');
                blueimp.Gallery(links, options);
            };
        </script>
        <!-- countdown script-->
        <script type="text/javascript">
          $('#days').countdown('2016/06/11  15:00:00', function(event) {
            $(this).html(event.strftime('%D'));
          });
          $('#hours').countdown('2016/06/11  15:00:00', function(event) {
            $(this).html(event.strftime('%H'));
          });
          $('#minutes').countdown('2016/06/11  15:00:00', function(event) {
            $(this).html(event.strftime('%M'));
          });
          $('#seconds').countdown('2016/06/11  15:00:00', function(event) {
            $(this).html(event.strftime('%S'));
          });
          $('#daysmobile').countdown('2016/06/11  15:00:00', function(event) {
            $(this).html(event.strftime('%D'));
          });
          $('#hoursmobile').countdown('2016/06/11  15:00:00', function(event) {
            $(this).html(event.strftime('%H'));
          });
          $('#minutesmobile').countdown('2016/06/11  15:00:00', function(event) {
            $(this).html(event.strftime('%M'));
          });
          $('#secondsmobile').countdown('2016/06/11  15:00:00', function(event) {
            $(this).html(event.strftime('%S'));
          });
        </script>

        <!--CUSTOM SCRIPT-->
        <script>
            $(document).ready(function () {
                $('a[href^="#"]').on('click', function (e) {
                    e.preventDefault();

                    var target = this.hash;
                    var $target = $(target);

                    $('html, body').stop().animate({
                        'scrollTop': $target.offset().top
                    }, 900, 'swing', function () {
                        window.location.hash = target;
                    });
                });
            });

            $(document).ready(function() {
                $("#ourstorylink")
                    .mouseover(function() { 
                        var src = "/icons/rings4grey.png";
                        $("#ourstoryimg").attr("src", src);
                    })
                    .mouseout(function() {
                        var src = $("#ourstoryimg").attr("src").replace("/icons/rings4grey.png", "/icons/rings4.png");
                        $("#ourstoryimg").attr("src", src);
                    });
                $("#photolibrarylink")
                    .mouseover(function() { 
                        var src = "/icons/photo212grey.png";
                        $("#photolibraryimg").attr("src", src);
                    })
                    .mouseout(function() {
                        var src = $("#photolibraryimg").attr("src").replace("/icons/photo212grey.png", "/icons/photo212.png");
                        $("#photolibraryimg").attr("src", src);
                    })
                $("#groomsmenlink")
                    .mouseover(function() { 
                        var src = "/icons/clothing466grey.png";
                        $("#groomsmenimg").attr("src", src);
                    })
                    .mouseout(function() {
                        var src = $("#groomsmenimg").attr("src").replace("/icons/clothing466grey.png", "/icons/clothing466.png");
                        $("#groomsmenimg").attr("src", src);
                    })
                $("#bridesmaidslink")
                    .mouseover(function() { 
                        var src = "/icons/dress2grey.png";
                        $("#bridesmaidsimg").attr("src", src);
                    })
                    .mouseout(function() {
                        var src = $("#bridesmaidsimg").attr("src").replace("/icons/dress2grey.png", "/icons/dress2.png");
                        $("#bridesmaidsimg").attr("src", src);
                    })
                $("#registrylink")
                    .mouseover(function() { 
                        var src = "/icons/xmas139grey.png";
                        $("#registryimg").attr("src", src);
                    })
                    .mouseout(function() {
                        var src = $("#registryimg").attr("src").replace("/icons/xmas139grey.png", "/icons/xmas139.png");
                        $("#registryimg").attr("src", src);
                    })
            });
        </script>
        <!--animate countdown-->

       <!-- <script>
            $(document).ready(function () {
                $("#dayblock").animate({ left: '150px' },600);
                $("#hourblock").animate({ left: '150px' },800);
                $("#minuteblock").animate({ left: '150px' },1000);
                $("#secondblock").animate({ left: '150px' },1200);
            });
            $(document).ready(function(){    
                $("div").animate({left: '250px'});
            });
        </script>
$(document).ready(function(){    
                $("countercontain").animate({left: '250px'});
            });-->

    </body>

</html>