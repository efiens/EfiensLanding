<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

<link rel="stylesheet" href="{{ asset('css/sponsor.css') }}" />

<div id="logo-ticker">
  <div class="footer-logo-slider">
  @foreach($sponsors as $sponsor)
    <ul class="footer-logo">
      <li>
        <div class="logo" style="background-image: url({{$sponsor -> logo}})"></div>
      </li>
    </ul>
  @endforeach
    </div>
</div>

<script>

var scroller = $('#logo-ticker div.footer-logo-slider');
var scrollerContent = scroller.children('ul');
scrollerContent.children().clone().appendTo(scrollerContent);
var sum_width_of_elem = 0;
scrollerContent.children().each(function() {
  var $this = $(this);
  $this.css('left', sum_width_of_elem);
  sum_width_of_elem += $this.outerWidth(true);
});

var fullW = sum_width_of_elem / 2;
var viewportW = scroller.width();

// Scrolling speed management
var controller = { curSpeed: 0, fullSpeed: 2 };
var $controller = $(controller);
var contSpeed = function(newSpeed) {
var duration = 600;
  $controller.stop(false).animate({ curSpeed: newSpeed });
};

// Pause on hover
scroller.hover(function() {
  contSpeed(0);
}, function() {
  contSpeed(controller.fullSpeed);
});

// Scrolling management; start the automatic scrolling//
var doScroll = function() {
  var curX = scroller.scrollLeft();
  var newX = curX + controller.curSpeed;
  if (newX > fullW * 2 - viewportW)
    newX -= fullW;
  scroller.scrollLeft(newX);
};
setInterval(doScroll, 20);
contSpeed(controller.fullSpeed);

</script>