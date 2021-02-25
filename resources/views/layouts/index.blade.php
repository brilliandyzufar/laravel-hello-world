@extends('layouts.master')

<!-- cara penulisan isi section yang panjang -->
@section('konten')
<div id="container">
  <!-- tab panes -->
  <div id="prod_wrapper">
    <div id="panes">
      <div> <img src="assets/img/demo/1.jpg" alt="">
        <h5>Mauris elementum</h5>
        <p>Nulla hendrerit commodo tortor, vitae elementum magna convallis nec. Nam tempor nibh a purus aliquam et adipiscing elit gravida. Ut vitae nunc a libero volutpat gravida. Nullam egestas mi sit amet dui scelerisque eu laoreet nisi ultrices. Ut vitae nunc a libero volutpat gravida. Nam tempor nibh a purus aliquam. </p>
        <p style="text-align:right; margin-right: 16px"><a href="#" class="button">More Info</a> <a href="#" class="button">Buy Now</a></p>
      </div>
      <div> <img src="assets/img/demo/2.jpg" alt="">
        <h5>Nulla hendrerit</h5>
        <p>Nulla hendrerit commodo tortor, vitae elementum magna convallis nec. Nam tempor nibh a purus aliquam et adipiscing elit gravida. Ut vitae nunc a libero volutpat gravida. Nullam egestas mi sit amet dui scelerisque eu laoreet nisi ultrices. Ut vitae nunc a libero volutpat gravida. Nam tempor nibh a purus aliquam. </p>
        <p style="text-align:right; margin-right: 16px"><a href="#" class="button">More Info</a> <a href="#" class="button">Buy Now</a></p>
      </div>
      <div> <img src="assets/img/demo/3.jpg" alt="">
        <h5>Mauris elementum</h5>
        <p>Nulla hendrerit commodo tortor, vitae elementum magna convallis nec. Nam tempor nibh a purus aliquam et adipiscing elit gravida. Ut vitae nunc a libero volutpat gravida. Nullam egestas mi sit amet dui scelerisque eu laoreet nisi ultrices. Ut vitae nunc a libero volutpat gravida. Nam tempor nibh a purus aliquam. </p>
        <p style="text-align:right; margin-right: 16px"><a href="#" class="button">More Info</a> <a href="#" class="button">Buy Now</a></p>
      </div>
      <div> <img src="assets/img/demo/4.jpg" alt="">
        <h5>Nam tempor nibh</h5>
        <p>Nulla hendrerit commodo tortor, vitae elementum magna convallis nec. Nam tempor nibh a purus aliquam et adipiscing elit gravida. Ut vitae nunc a libero volutpat gravida. Nullam egestas mi sit amet dui scelerisque eu laoreet nisi ultrices. Ut vitae nunc a libero volutpat gravida. Nam tempor nibh a purus aliquam. </p>
        <p style="text-align:right; margin-right: 16px"><a href="#" class="button">More Info</a> <a href="#" class="button">Buy Now</a></p>
      </div>
      <div> <img src="assets/img/demo/5.jpg" alt="">
        <p>Nulla hendrerit commodo tortor, vitae elementum magna convallis nec. Nam tempor nibh a purus aliquam et adipiscing elit gravida. Ut vitae nunc a libero volutpat gravida. Nullam egestas mi sit amet dui scelerisque eu laoreet nisi ultrices. Ut vitae nunc a libero volutpat gravida. Nam tempor nibh a purus aliquam. </p>
        <p style="text-align:right; margin-right: 16px"><a href="#" class="button">More Info</a> <a href="#" class="button">Buy Now</a></p>
      </div>
    </div>
    <!-- END tab panes -->
    <br clear="all">
    <!-- navigator -->
    <div id="prod_nav">
      <ul>
        <li><a href="#1"><img src="assets/img/demo/thumb1.jpg" alt=""><strong>Class aptent</strong> $ 199</a></li>
        <li><a href="#2"><img src="assets/img/demo/thumb2.jpg" alt=""><strong>Sed dui risus</strong> $ 125</a></li>
        <li><a href="#3"><img src="assets/img/demo/thumb3.jpg" alt=""><strong>Pellentesque quis</strong> $ 480</a></li>
        <li><a href="#4"><img src="assets/img/demo/thumb4.jpg" alt=""><strong>Mauris elementum</strong> $ 1099</a></li>
        <li><a href="#5"><img src="assets/img/demo/thumb5.jpg" alt=""><strong>Cras et malesuada</strong> $ 99</a></li>
      </ul>
    </div>
    <!-- close navigator -->
  </div>
  <!-- END prod wrapper -->
  <div style="clear:both"></div>
  <h1 style="padding: 20px 0">This is what we do</h1>
  <blockquote>Nulla hendrerit commodo tortor, vitae elementum magna convallis nec. Nam tempor nibh a purus aliquam et adipiscing elit gravida. Ut vitae nunc a libero volutpat gravida. Nullam egestas mi sit amet dui scelerisque eu laoreet nisi ultrices. Ut vitae nunc a libero volutpat gravida. Nam tempor nibh a purus aliquam. </blockquote>
  <p style="text-align:right; margin-right: 16px; margin-bottom: 15px"><a href="#" class="button" style="font-size: 18px">Find out more</a></p>
  <!-- First Column -->
  <div class="one-fourth">
    <div class="heading_bg">
      <h2>Headline</h2>
    </div>
    <img src="assets/img/demo/2.jpg" width="217" alt=""> </div>
  <!-- Second Column -->
  <div class="one-fourth">
    <div class="heading_bg">
      <h2>Lorem</h2>
    </div>
    <img src="assets/img/demo/4.jpg" width="217" alt=""> </div>
  <!-- Third Column -->
  <div class="assets/one-fourth">
    <div class="heading_bg">
      <h2>Ipsum</h2>
    </div>
    <img src="assets/img/demo/3.jpg" width="217" alt=""> </div>
  <!-- Fourth Column -->
  <div class="one-fourth last">
    <div class="heading_bg">
      <h2>Last</h2>
    </div>
    <img src="assets/img/demo/1.jpg" width="217" alt=""> </div>
  <div style="clear:both; height: 40px"></div>
</div>
<!-- END container -->
@endsection