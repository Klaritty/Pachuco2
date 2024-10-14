<?php
?>

<div>
<button onclick="topFunction()" id="scrollToTopBtn" title="Go to top">

<svg
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  xmlns="http://www.w3.org/2000/svg"
>
  <path
    fill-rule="evenodd"
    clip-rule="evenodd"
    d="M11.293 4.707a1 1 0 011.414 0l7 7a1 1 0 01-1.414 1.414L12 7.414 4.707 14.707a1 1 0 01-1.414-1.414l7-7z"
    fill="#0A2A45"
  />
</svg>

</button>
</div>


<script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("scrollToTopBtn").style.display = "block";
    document.getElementById("scrollToTopBtn").style.opacity = "1"; 
  } else {
    document.getElementById("scrollToTopBtn").style.opacity = "0"; 
  }
}


function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0; 
}

    </script>