<a href="" type="button" onclick="topFunction()" id="go_top" title="Go to top"><img src="assets/img/favicon.ico" alt="CuatroDEV"></a>
<script>
var mybutton = document.getElementById("go_top");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>