<style>
  // Within style tags in your html file
body {
  margin: 0;
  padding: 1rem;
}
// SCSS
// Masonry layout vertical
.masonry-with-columns {
  display: flex;
  flex-direction: column;
  flex-wrap: wrap;
  max-height: 1000px;
  div {
    flex: 1 0 auto;
    background: #00997B;
    color: white;
    margin: 0 1rem 1rem 0;
    text-align: center;
    font-weight: 900;
    font-size: 2rem;
  }
  @for $i from 1 through 36 {
    div:nth-child(#{$i}) {
      $h: (random(400) + 100) + px;
      height: $h;
      line-height: $h;
    }
  }
}
</style>
<div class="masonry-with-columns" id="masonry-with-columns">
  <div style="order: 0;">
    1
  </div>
  <div style="order: 1;">
    2
  </div>
  <div style="order: 2;">
    3
  </div>
  <div style="order: 0;">
    4
  </div>
  <div style="order: 1;">
    5
  </div>
  <div style="order: 2;">
    6
  </div>
  <div style="order: 0;">
    7
  </div>
  <div style="order: 1;">
    8
  </div>
  <div style="order: 2;">
    9
  </div>
  <div style="order: 0;">
    10
  </div>
  <div style="order: 1;">
    11
  </div>
  <div style="order: 2;">
    12
  </div>
  <div style="order: 0;">
    13
  </div>
  <div style="order: 1;">
    14
  </div>
  <div style="order: 2;">
    15
  </div>
</div>
<script>
(function($) {
$(document).ready(function() {

const numCols = 3;
const colHeights = Array(numCols).fill(0);
const container = document.getElementById('masonry-with-columns');
Array.from(container.children).forEach((child, i) => {
  const order = i % numCols;
  child.style.order = order;
  colHeights[order] += parseFloat(child.clientHeight);
})
container.style.height = Math.max(...colHeights) + 'px';  

});
})(jQuery);
</script>