@extends('layouts.app')

@section('content')

<style>
    .carousel-item,
    .carousel-inner,
    .carousel-inner img {
    height: 100%;
    width: auto;
    }

    .carousel-item {
    text-align: center;
    }
    .carousel {
  height: 200px;
    }

    .p{
        font-size: 40px;
    }   
    .footer {
  background-color: #000000;
  }
    
</style>

<div class="card" style="width:100;">
    <div id="carouselExampleIndicators" class="carousel slide mb-4" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="{{ url('images/fotbar1.jpg')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="{{ url('images/fotbar2.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="{{ url('images/fotbar3.jpg')}}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                    </a>
        </div>
</div>

<div class="container">
    <div class="row">
             <div class="row mt-5 mb-4"><!-- first row -->
                <div class="col-lg-12 col-xl-12">
                    <div class="">
                        <h2 class="mb-4">UMKM Kelurahan Menteng</h2>
                        <div class="row mx-auto mb-4">
                            <div class="col-md-6">
                                <img src="{{ url('images/logomenteng.png') }}" class="rounded mx-auto d-block" width="300" alt="">
                            </div>
                            <div class="col-md-6 mt-5">
                                <h5>Selamat datang di Website Catalog UMKM Kelurahan Menteng Kota Bogor</h5>
                            </div> 
                        </div>
                    
                    </div>
                </div>

            </div>
            <div class="row  mb-4 "><!-- second row -->
                <div class="col-lg-12 mx-auto">
                    <div class="">
                        <h3 class="tm-text-primary mb-4">Kegunaan Website Ini</h3>
                        
                    </div>
                </div>
            
            <div class="row mx-auto mb-4 "><!-- second row -->
        		<div class="col-lg-1">
                    <i class="far fa-3x fa-chart-bar text-center"></i>
                </div>
                <div class="col-lg-5">
                    <div class="">
                        <h3 class="tm-text-primary mb-4">Penjualan</h3>
                        <p class="mb-4 tm-intro-text">
                         Website ini diharapkan dapat membantu penjualan dari UMKM yang ada pada Kelurahan Menteng dengan menyediakan katalog dan barang apa saja yang  ada pada UMKM Kelurahan Menteng</p>
                    </div>
                </div>
                
                <div class="col-lg-1">
                    <i class="far fa-3x fa-comment-alt text-center "></i>
                </div>
                <div class="col-lg-5">
                    <div class="">
                        <h3 class="mb-4">Penyebaran Informasi</h3>
                        <p class="mb-4">
                          Dengan adanya Website ini akan mengembangkan UMKM di kelurahan menteng agar masyarakat luas lebih tau mengenai kehadiran UMKM Kelurahan Menteng.</p>
                    </div>
                </div>

            </div><!-- second row -->
            
            <div class="row mx-auto ">
            <!-- third row -->
                <div class="col-lg-1 ml-auto">
                    <i class="fas fa-3x fa-users text-center tm-icon"></i>
                </div>
                <div class="col-lg-5 mr-auto">
                    <div class="tm-intro-text-container">
                      <h3 class="tm-text-primary mb-4">Pendekatan Komunitas</h3>
                      <p class="mb-4">
                     Website ini juga membantu para penggiat UMKM yang ada pada kelurahan Menteng untuk lebih dekat antar satu sama lain</p>
                          
                    </div>
                </div>

            </div>
    </div>
    <div class="row">
    <canvas id="myChart" width="400" height="400"></canvas>
            
    </div>

</div>

        <footer id="footer" style="background-color:'black;'">
            <div class="main-footer widgets-dark typo-light">
                <div class="container">
                    <div class="row">
        
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="widget subscribe no-box">
                                <h5 class="widget-title">UMKM Kelurahan Menteng<span></span></h5>
                                <p>Segala pemesanan dapat dilakukan dalam bentuk aplikasi online Shopee atau Tokopedia, dapat mengikuti tautan pada disamping. atua juga dapat menghubungi kami melalui media sosial yang tertera pada samping kanan </p>
                             </div>
                        </div>

        

       

                        <div class="col-xs-12 col-sm-6 col-md-6">

                             <div class="widget no-box">
                                <h5 class="widget-title">Contact Us<span></span></h5>

                                <p><a href="mailto:kelurahanmentengbogor@domain.com" title="glorythemes">kelurahanmentengbogor@gmail.com</a></p>
                                <ul class="social-footer2">
                                    <li class=""><a href="https://www.facebook.com/profile.php?id=100071951027864" target="_blank" title="Facebook">Facebook</a></li>
                                    <li class=""><a title="instagram" target="_blank" href="https://www.instagram.com/umkmkelurahanmentengbogor/">Instagram</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        
            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center mt-5">
                            <p>Copyright UMKM Kerluahan Menteng © 2021. All rights reserved.</p>
                        </div>
                    </div>
                </div>
             </div>
        </footer>
@endsection

@section('footer')


@stop
