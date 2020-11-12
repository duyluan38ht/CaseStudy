<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<style>

    h3.h3{text-align:center;margin:1em;text-transform:capitalize;font-size:1.7em;}

    /********************* shopping Demo-1 **********************/
    .product-grid{font-family:Raleway,sans-serif;text-align:center;padding:0 0 72px;border:1px solid rgba(0,0,0,.1);overflow:hidden;position:relative;z-index:1}
    .product-grid .product-image{position:relative;transition:all .3s ease 0s}
    .product-grid .product-image a{display:block}
    .product-grid .product-image img{width:100%;height:auto}
    .product-grid .pic-1{opacity:1;transition:all .3s ease-out 0s}
    .product-grid:hover .pic-1{opacity:1}
    .product-grid .pic-2{opacity:0;position:absolute;top:0;left:0;transition:all .3s ease-out 0s}
    .product-grid:hover .pic-2{opacity:1}
    .product-grid .social{width:150px;padding:0;margin:0;list-style:none;opacity:0;transform:translateY(-50%) translateX(-50%);position:absolute;top:60%;left:50%;z-index:1;transition:all .3s ease 0s}
    .product-grid:hover .social{opacity:1;top:50%}
    .product-grid .social li{display:inline-block}
    .product-grid .social li a{color:#fff;background-color:#333;font-size:16px;line-height:40px;text-align:center;height:40px;width:40px;margin:0 2px;display:block;position:relative;transition:all .3s ease-in-out}
    .product-grid .social li a:hover{color:#fff;background-color:#ef5777}
    .product-grid .social li a:after,.product-grid .social li a:before{content:attr(data-tip);color:#fff;background-color:#000;font-size:12px;letter-spacing:1px;line-height:20px;padding:1px 5px;white-space:nowrap;opacity:0;transform:translateX(-50%);position:absolute;left:50%;top:-30px}
    .product-grid .social li a:after{content:'';height:15px;width:15px;border-radius:0;transform:translateX(-50%) rotate(45deg);top:-20px;z-index:-1}
    .product-grid .social li a:hover:after,.product-grid .social li a:hover:before{opacity:1}
    .product-grid .product-discount-label,.product-grid .product-new-label{color:#fff;background-color:#ef5777;font-size:12px;text-transform:uppercase;padding:2px 7px;display:block;position:absolute;top:10px;left:0}
    .product-grid .product-discount-label{background-color:#333;left:auto;right:0}
    .product-grid .rating{color:#FFD200;font-size:12px;padding:12px 0 0;margin:0;list-style:none;position:relative;z-index:-1}
    .product-grid .rating li.disable{color:rgba(0,0,0,.2)}
    .product-grid .product-content{background-color:#fff;text-align:center;padding:12px 0;margin:0 auto;left:0;right:0;bottom:-27px;z-index:1;transition:all .3s}
    .product-grid:hover .product-content{bottom:0}
    .product-grid .title{font-size:13px;font-weight:400;letter-spacing:.5px;text-transform:capitalize;margin:0 0 10px;transition:all .3s ease 0s}
    .product-grid .title a{color:#828282}
    .product-grid .title a:hover,.product-grid:hover .title a{color:#ef5777}
    .product-grid .price{color:#333;font-size:17px;font-family:Montserrat,sans-serif;font-weight:700;letter-spacing:.6px;margin-bottom:8px;text-align:center;transition:all .3s}
    .product-grid .price span{color:#999;font-size:13px;font-weight:400;text-decoration:line-through;margin-left:3px;display:inline-block}
    .product-grid .add-to-cart{color:#000;font-size:13px;font-weight:600}
    @media only screen and (max-width:990px){.product-grid{margin-bottom:30px}
    }

    /********************* Shopping Demo-2 **********************/
    .demo{padding:45px 0}
    .product-grid2{font-family:'Open Sans',sans-serif;position:relative}
    .product-grid2 .product-image2{overflow:hidden;position:relative}
    .product-grid2 .product-image2 a{display:block}
    .product-grid2 .product-image2 img{width:100%;height:auto}
    .product-image2 .pic-1{opacity:1;transition:all .5s}
    .product-grid2:hover .product-image2 .pic-1{opacity:0}
    .product-image2 .pic-2{width:100%;height:100%;opacity:0;position:absolute;top:0;left:0;transition:all .5s}
    .product-grid2:hover .product-image2 .pic-2{opacity:1}
    .product-grid2 .social{padding:0;margin:0;position:absolute;bottom:50px;right:25px;z-index:1}
    .product-grid2 .social li{margin:0 0 10px;display:block;transform:translateX(100px);transition:all .5s}
    .product-grid2:hover .social li{transform:translateX(0)}
    .product-grid2:hover .social li:nth-child(2){transition-delay:.15s}
    .product-grid2:hover .social li:nth-child(3){transition-delay:.25s}
    .product-grid2 .social li a{color:#505050;background-color:#fff;font-size:17px;line-height:45px;text-align:center;height:45px;width:45px;border-radius:50%;display:block;transition:all .3s ease 0s}
    .product-grid2 .social li a:hover{color:#fff;background-color:#3498db;box-shadow:0 0 10px rgba(0,0,0,.5)}
    .product-grid2 .social li a:after,.product-grid2 .social li a:before{content:attr(data-tip);color:#fff;background-color:#000;font-size:12px;line-height:22px;border-radius:3px;padding:0 5px;white-space:nowrap;opacity:0;transform:translateX(-50%);position:absolute;left:50%;top:-30px}
    .product-grid2 .social li a:after{content:'';height:15px;width:15px;border-radius:0;transform:translateX(-50%) rotate(45deg);top:-22px;z-index:-1}
    .product-grid2 .social li a:hover:after,.product-grid2 .social li a:hover:before{opacity:1}
    .product-grid2 .add-to-cart{color:#fff;background-color:#404040;font-size:15px;text-align:center;width:100%;padding:10px 0;display:block;position:absolute;left:0;bottom:-100%;transition:all .3s}
    .product-grid2 .add-to-cart:hover{background-color:#3498db;text-decoration:none}
    .product-grid2:hover .add-to-cart{bottom:0}
    .product-grid2 .product-new-label{background-color:#3498db;color:#fff;font-size:17px;padding:5px 10px;position:absolute;right:0;top:0;transition:all .3s}
    .product-grid2:hover .product-new-label{opacity:0}
    .product-grid2 .product-content{padding:20px 10px;text-align:center}
    .product-grid2 .title{font-size:17px;margin:0 0 7px}
    .product-grid2 .title a{color:#303030}
    .product-grid2 .title a:hover{color:#3498db}
    .product-grid2 .price{color:#303030;font-size:15px}
    @media screen and (max-width:990px){.product-grid2{margin-bottom:30px}
    }

    /********************* Shopping Demo-3 **********************/
    .product-grid3{font-family:Roboto,sans-serif;text-align:center;position:relative;z-index:1}
    .product-grid3:before{content:"";height:81%;width:100%;background:#fff;border:1px solid rgba(0,0,0,.1);opacity:0;position:absolute;top:0;left:0;z-index:-1;transition:all .5s ease 0s}
    .product-grid3:hover:before{opacity:1;height:100%}
    .product-grid3 .product-image3{position:relative}
    .product-grid3 .product-image3 a{display:block}
    .product-grid3 .product-image3 img{width:100%;height:auto}
    .product-grid3 .pic-1{opacity:1;transition:all .5s ease-out 0s}
    .product-grid3:hover .pic-1{opacity:0}
    .product-grid3 .pic-2{position:absolute;top:0;left:0;opacity:0;transition:all .5s ease-out 0s}
    .product-grid3:hover .pic-2{opacity:1}
    .product-grid3 .social{width:120px;padding:0;margin:0 auto;list-style:none;opacity:0;position:absolute;right:0;left:0;bottom:-23px;transform:scale(0);transition:all .3s ease 0s}
    .product-grid3:hover .social{opacity:1;transform:scale(1)}
    .product-grid3:hover .product-discount-label,.product-grid3:hover .product-new-label,.product-grid3:hover .title{opacity:0}
    .product-grid3 .social li{display:inline-block}
    .product-grid3 .social li a{color:#e67e22;background:#fff;font-size:18px;line-height:50px;width:50px;height:50px;border:1px solid rgba(0,0,0,.1);border-radius:50%;margin:0 2px;display:block;transition:all .3s ease 0s}
    .product-grid3 .social li a:hover{background:#e67e22;color:#fff}
    .product-grid3 .product-discount-label,.product-grid3 .product-new-label{background-color:#e67e22;color:#fff;font-size:17px;padding:2px 10px;position:absolute;right:10px;top:10px;transition:all .3s}
    .product-grid3 .product-content{z-index:-1;padding:15px;text-align:left}
    .product-grid3 .title{font-size:14px;text-transform:capitalize;margin:0 0 7px;transition:all .3s ease 0s}
    .product-grid3 .title a{color:#414141}
    .product-grid3 .price{color:#000;font-size:16px;letter-spacing:1px;font-weight:600;margin-right:2px;display:inline-block}
    .product-grid3 .price span{color:#909090;font-size:14px;font-weight:500;letter-spacing:0;text-decoration:line-through;text-align:left;display:inline-block;margin-top:-2px}
    .product-grid3 .rating{padding:0;margin:-22px 0 0;list-style:none;text-align:right;display:block}
    .product-grid3 .rating li{color:#ffd200;font-size:13px;display:inline-block}
    .product-grid3 .rating li.disable{color:#dcdcdc}
    @media only screen and (max-width:1200px){.product-grid3 .rating{margin:0}
    }
    @media only screen and (max-width:990px){.product-grid3{margin-bottom:30px}
        .product-grid3 .rating{margin:-22px 0 0}
    }
    @media only screen and (max-width:359px){.product-grid3 .rating{margin:0}
    }

    /********************* Shopping Demo-4 **********************/
    .product-grid4,.product-grid4 .product-image4{position:relative}
    .product-grid4{font-family:Poppins,sans-serif;text-align:center;border-radius:5px;overflow:hidden;z-index:1;transition:all .3s ease 0s}
    .product-grid4:hover{box-shadow:0 0 10px rgba(0,0,0,.2)}
    .product-grid4 .product-image4 a{display:block}
    .product-grid4 .product-image4 img{width:100%;height:auto}
    .product-grid4 .pic-1{opacity:1;transition:all .5s ease-out 0s}
    .product-grid4:hover .pic-1{opacity:0}
    .product-grid4 .pic-2{position:absolute;top:0;left:0;opacity:0;transition:all .5s ease-out 0s}
    .product-grid4:hover .pic-2{opacity:1}
    .product-grid4 .social{width:180px;padding:0;margin:0 auto;list-style:none;position:absolute;right:0;left:0;top:50%;transform:translateY(-50%);transition:all .3s ease 0s}
    .product-grid4 .social li{display:inline-block;opacity:0;transition:all .7s}
    .product-grid4 .social li:nth-child(1){transition-delay:.15s}
    .product-grid4 .social li:nth-child(2){transition-delay:.3s}
    .product-grid4 .social li:nth-child(3){transition-delay:.45s}
    .product-grid4:hover .social li{opacity:1}
    .product-grid4 .social li a{color:#222;background:#fff;font-size:17px;line-height:36px;width:40px;height:36px;border-radius:2px;margin:0 5px;display:block;transition:all .3s ease 0s}
    .product-grid4 .social li a:hover{color:#fff;background:#16a085}
    .product-grid4 .social li a:after,.product-grid4 .social li a:before{content:attr(data-tip);color:#fff;background-color:#000;font-size:12px;line-height:20px;border-radius:3px;padding:0 5px;white-space:nowrap;opacity:0;transform:translateX(-50%);position:absolute;left:50%;top:-30px}
    .product-grid4 .social li a:after{content:'';height:15px;width:15px;border-radius:0;transform:translateX(-50%) rotate(45deg);top:-22px;z-index:-1}
    .product-grid4 .social li a:hover:after,.product-grid4 .social li a:hover:before{opacity:1}
    .product-grid4 .product-discount-label,.product-grid4 .product-new-label{color:#fff;background-color:#16a085;font-size:13px;font-weight:800;text-transform:uppercase;line-height:45px;height:45px;width:45px;border-radius:50%;position:absolute;left:10px;top:15px;transition:all .3s}
    .product-grid4 .product-discount-label{left:auto;right:10px;background-color:#d7292a}
    .product-grid4:hover .product-new-label{opacity:0}
    .product-grid4 .product-content{padding:25px}
    .product-grid4 .title{font-size:15px;font-weight:400;text-transform:capitalize;margin:0 0 7px;transition:all .3s ease 0s}
    .product-grid4 .title a{color:#222}
    .product-grid4 .title a:hover{color:#16a085}
    .product-grid4 .price{color:#16a085;font-size:17px;font-weight:700;margin:0 2px 15px 0;display:block}
    .product-grid4 .price span{color:#909090;font-size:13px;font-weight:400;letter-spacing:0;text-decoration:line-through;text-align:left;vertical-align:middle;display:inline-block}
    .product-grid4 .add-to-cart{border:1px solid #e5e5e5;display:inline-block;padding:10px 20px;color:#888;font-weight:600;font-size:14px;border-radius:4px;transition:all .3s}
    .product-grid4:hover .add-to-cart{border:1px solid transparent;background:#16a085;color:#fff}
    .product-grid4 .add-to-cart:hover{background-color:#505050;box-shadow:0 0 10px rgba(0,0,0,.5)}
    @media only screen and (max-width:990px){.product-grid4{margin-bottom:30px}
    }

    /********************* Shopping Demo-5 **********************/
    .product-image5 .pic-1,.product-image5 .pic-2{backface-visibility:hidden;transition:all .5s ease 0s}
    .product-grid5{font-family:Poppins,sans-serif;position:relative}
    .product-grid5 .product-image5{overflow:hidden;position:relative}
    .product-grid5 .product-image5 a{display:block}
    .product-grid5 .product-image5 img{width:100%;height:auto}
    .product-image5 .pic-1{opacity:1}
    .product-grid5:hover .product-image5 .pic-1{opacity:0}
    .product-image5 .pic-2{width:100%;height:100%;opacity:0;position:absolute;top:0;left:0}
    .product-grid5:hover .product-image5 .pic-2{opacity:1}
    .product-grid5 .social{padding:0;margin:0;position:absolute;top:10px;right:10px}
    .product-grid5 .social li{display:block;margin:0 0 10px;transition:all .5s}
    .product-grid5 .social li:nth-child(2){opacity:0;transform:translateY(-50px)}
    .product-grid5:hover .social li:nth-child(2){opacity:1;transform:translateY(0)}
    .product-grid5 .social li:nth-child(3){opacity:0;transform:translateY(-50px)}
    .product-grid5:hover .social li:nth-child(3){opacity:1;transform:translateY(0);transition-delay:.2s}
    .product-grid5 .social li a{color:#888;background:#fff;font-size:14px;text-align:center;line-height:40px;height:40px;width:40px;border-radius:50%;display:block;transition:.5s ease 0s}
    .product-grid5 .social li a:hover{color:#fff;background:#1e3799}
    .product-grid5 .select-options{color:#777;background-color:#fff;font-size:13px;font-weight:400;text-align:center;text-transform:uppercase;padding:15px 5px;margin:0 auto;opacity:0;display:block;position:absolute;width:92%;left:0;bottom:-100px;right:0;transition:.5s ease 0s}
    .product-grid5 .select-options:hover{color:#fff;background-color:#1e3799;text-decoration:none}
    .product-grid5:hover .select-options{opacity:1;bottom:10px}
    .product-grid5 .product-content{padding:20px 10px}
    .product-grid5 .title{font-size:15px;font-weight:600;text-transform:capitalize;margin:0 0 10px;transition:all .3s ease 0s}
    .product-grid5 .title a{color:#222}
    .product-grid5 .title a:hover{color:#1e3799}
    .product-grid5 .price{color:#222;font-size:13px;font-weight:500;letter-spacing:1px}
    @media only screen and (max-width:990px){.product-grid5{margin-bottom:30px}
    }

    /********************* Shopping Demo-6 **********************/
    .product-grid6,.product-grid6 .product-image6{overflow:hidden}
    .product-grid6{font-family:'Open Sans',sans-serif;text-align:center;position:relative;transition:all .5s ease 0s}
    .product-grid6:hover{box-shadow:0 0 10px rgba(0,0,0,.3)}
    .product-grid6 .product-image6 a{display:block}
    .product-grid6 .product-image6 img{width:100%;height:auto;transition:all .5s ease 0s}
    .product-grid6:hover .product-image6 img{transform:scale(1.1)}
    .product-grid6 .product-content{padding:12px 12px 15px;transition:all .5s ease 0s}
    .product-grid6:hover .product-content{opacity:0}
    .product-grid6 .title{font-size:20px;font-weight:600;text-transform:capitalize;margin:0 0 10px;transition:all .3s ease 0s}
    .product-grid6 .title a{color:#000}
    .product-grid6 .title a:hover{color:#2e86de}
    .product-grid6 .price{font-size:18px;font-weight:600;color:#2e86de}
    .product-grid6 .price span{color:#999;font-size:15px;font-weight:400;text-decoration:line-through;margin-left:7px;display:inline-block}
    .product-grid6 .social{background-color:#fff;width:100%;padding:0;margin:0;list-style:none;opacity:0;transform:translateX(-50%);position:absolute;bottom:-50%;left:50%;z-index:1;transition:all .5s ease 0s}
    .product-grid6:hover .social{opacity:1;bottom:20px}
    .product-grid6 .social li{display:inline-block}
    .product-grid6 .social li a{color:#909090;font-size:16px;line-height:45px;text-align:center;height:45px;width:45px;margin:0 7px;border:1px solid #909090;border-radius:50px;display:block;position:relative;transition:all .3s ease-in-out}
    .product-grid6 .social li a:hover{color:#fff;background-color:#2e86de;width:80px}
    .product-grid6 .social li a:after,.product-grid6 .social li a:before{content:attr(data-tip);color:#fff;background-color:#2e86de;font-size:12px;letter-spacing:1px;line-height:20px;padding:1px 5px;border-radius:5px;white-space:nowrap;opacity:0;transform:translateX(-50%);position:absolute;left:50%;top:-30px}
    .product-grid6 .social li a:after{content:'';height:15px;width:15px;border-radius:0;transform:translateX(-50%) rotate(45deg);top:-20px;z-index:-1}
    .product-grid6 .social li a:hover:after,.product-grid6 .social li a:hover:before{opacity:1}
    @media only screen and (max-width:990px){.product-grid6{margin-bottom:30px}
    }

    /********************* Shopping Demo-7 **********************/
    .product-grid7{font-family:'Roboto Slab',serif;position:relative;z-index:1}
    .product-grid7 .product-image7{border:1px solid rgba(0,0,0,.1);overflow:hidden;perspective:1500px;position:relative;transition:all .3s ease 0s}
    .product-grid7 .product-image7 a{display:block}
    .product-grid7 .product-image7 img{width:100%;height:auto}
    .product-grid7 .pic-1{opacity:1;transition:all .5s ease-out 0s}
    .product-grid7 .pic-2{opacity:0;transform:rotateY(-90deg);position:absolute;top:0;left:0;transition:all .5s ease-out 0s}
    .product-grid7:hover .pic-2{opacity:1;transform:rotateY(0)}
    .product-grid7 .social{padding:0;margin:0;list-style:none;position:absolute;bottom:3px;left:-20%;z-index:1;transition:all .5s ease 0s}
    .product-grid7:hover .social{left:17px}
    .product-grid7 .social li a{color:#fff;background-color:#333;font-size:16px;line-height:40px;text-align:center;height:40px;width:40px;margin:15px 0;border-radius:50%;display:block;transition:all .5s ease-in-out}
    .product-grid7 .social li a:hover{color:#fff;background-color:#78e08f}
    .product-grid7 .product-new-label{color:#fff;background-color:#333;padding:5px 10px;border-radius:5px;display:block;position:absolute;top:10px;left:10px}
    .product-grid7 .product-content{text-align:center;padding:20px 0 0}
    .product-grid7 .title{font-size:15px;font-weight:600;text-transform:capitalize;margin:0 0 10px;transition:all .3s ease 0s}
    .product-grid7 .title a{color:#333}
    .product-grid7 .title a:hover{color:#78e08f}
    .product-grid7 .rating{color:#78e08f;font-size:12px;padding:0;margin:0 0 10px;list-style:none}
    .product-grid7 .price{color:#333;font-size:20px;font-family:Lora,serif;font-weight:700;margin-bottom:8px;text-align:center;transition:all .3s}
    .product-grid7 .price span{color:#999;font-size:14px;font-weight:700;text-decoration:line-through;margin-left:7px;display:inline-block}
    @media only screen and (max-width:990px){.product-grid7{margin-bottom:30px}
    }

    /********************* Shopping Demo-8 **********************/
    .product-grid8{font-family:Poppins,sans-serif;position:relative;z-index:1}
    .product-grid8 .product-image8{border:1px solid #e4e9ef;position:relative;transition:all .3s ease 0s}
    .product-grid8:hover .product-image8{box-shadow:0 0 10px rgba(0,0,0,.15)}
    .product-grid8 .product-image8 a{display:block}
    .product-grid8 .product-image8 img{width:100%;height:auto}
    .product-grid8 .pic-1{opacity:1;transition:all .5s ease-out 0s}
    .product-grid8:hover .pic-1{opacity:0}
    .product-grid8 .pic-2{opacity:0;position:absolute;top:0;left:0;transition:all .5s ease-out 0s}
    .product-grid8:hover .pic-2{opacity:1}
    .product-grid8 .social{padding:0;margin:0;list-style:none;position:absolute;bottom:13px;right:13px;z-index:1}
    .product-grid8 .social li{opacity:0;transform:translateY(3px);transition:all .5s ease 0s}
    .product-grid8:hover .social li{margin:0 0 10px;opacity:1;transform:translateY(0)}
    .product-grid8:hover .social li:nth-child(1){transition-delay:.1s}
    .product-grid8:hover .social li:nth-child(2){transition-delay:.2s}
    .product-grid8:hover .social li:nth-child(3){transition-delay:.4s}
    .product-grid8 .social li a{color:grey;font-size:17px;line-height:40px;text-align:center;height:40px;width:40px;border:1px solid grey;display:block;transition:all .5s ease-in-out}
    .product-grid8 .social li a:hover{color:#000;border-color:#000}
    .product-grid8 .product-discount-label{display:block;padding:4px 15px 4px 30px;color:#fff;background-color:#0081c2;position:absolute;top:10px;right:0;-webkit-clip-path:polygon(34% 0,100% 0,100% 100%,0 100%);clip-path:polygon(34% 0,100% 0,100% 100%,0 100%)}
    .product-grid8 .product-content{padding:20px 0 0}
    .product-grid8 .price{color:#000;font-size:19px;font-weight:400;margin-bottom:8px;text-align:left;transition:all .3s}
    .product-grid8 .price span{color:#999;font-size:14px;font-weight:500;text-decoration:line-through;margin-left:7px;display:inline-block}
    .product-grid8 .product-shipping{color:rgba(0,0,0,.5);font-size:15px;padding-left:35px;margin:0 0 15px;display:block;position:relative}
    .product-grid8 .product-shipping:before{content:'';height:1px;width:25px;background-color:rgba(0,0,0,.5);transform:translateY(-50%);position:absolute;top:50%;left:0}
    .product-grid8 .title{font-size:16px;font-weight:400;text-transform:capitalize;margin:0 0 30px;transition:all .3s ease 0s}
    .product-grid8 .title a{color:#000}
    .product-grid8 .title a:hover{color:#0081c2}
    .product-grid8 .all-deals{display:block;color:#fff;background-color:#2e353b;font-size:15px;letter-spacing:1px;text-align:center;text-transform:uppercase;padding:22px 5px;transition:all .5s ease 0s}
    .product-grid8 .all-deals .icon{margin-left:7px}
    .product-grid8 .all-deals:hover{background-color:#0081c2}
    @media only screen and (max-width:990px){.product-grid8{margin-bottom:30px}
    }

    /********************* Shopping Demo-9 **********************/
    .product-grid9,.product-grid9 .product-image9{position:relative}
    .product-grid9{font-family:Poppins,sans-serif;z-index:1}
    .product-grid9 .product-image9 a{display:block}
    .product-grid9 .product-image9 img{width:100%;height:auto}
    .product-grid9 .pic-1{opacity:1;transition:all .5s ease-out 0s}
    .product-grid9:hover .pic-1{opacity:0}
    .product-grid9 .pic-2{position:absolute;top:0;left:0;opacity:0;transition:all .5s ease-out 0s}
    .product-grid9:hover .pic-2{opacity:1}
    .product-grid9 .product-full-view{color:#505050;background-color:#fff;font-size:16px;height:45px;width:45px;padding:18px;border-radius:100px 0 0;display:block;opacity:0;position:absolute;right:0;bottom:0;transition:all .3s ease 0s}
    .product-grid9 .product-full-view:hover{color:#c0392b}
    .product-grid9:hover .product-full-view{opacity:1}
    .product-grid9 .product-content{padding:12px 12px 0;overflow:hidden;position:relative}
    .product-content .rating{padding:0;margin:0 0 7px;list-style:none}
    .product-grid9 .rating li{font-size:12px;color:#ffd200;transition:all .3s ease 0s}
    .product-grid9 .rating li.disable{color:rgba(0,0,0,.2)}
    .product-grid9 .title{font-size:16px;font-weight:400;text-transform:capitalize;margin:0 0 3px;transition:all .3s ease 0s}
    .product-grid9 .title a{color:rgba(0,0,0,.5)}
    .product-grid9 .title a:hover{color:#c0392b}
    .product-grid9 .price{color:#000;font-size:17px;margin:0;display:block;transition:all .5s ease 0s}
    .product-grid9:hover .price{opacity:0}
    .product-grid9 .add-to-cart{display:block;color:#c0392b;font-weight:600;font-size:14px;opacity:0;position:absolute;left:10px;bottom:-20px;transition:all .5s ease 0s}
    .product-grid9:hover .add-to-cart{opacity:1;bottom:0}
    @media only screen and (max-width:990px){.product-grid9{margin-bottom:30px}
    }


</style>
</head>
<body>
<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Nhà Nghỉ Thiên Đường</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="fa fa-home"></i>
                    Trang Chủ
                    <span class="sr-only">(current)</span>
                </a>
            </li>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    </i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                </a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<div class="container">
    <div class="row" >
        <?php foreach ($room as $key => $value): ?>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <img class="pic-1" src="https://vietluat.vn/wp-content/uploads/2020/02/thanh-lap-cong-ty-nganh-khach-san.jpg">

                        <img class="pic-2" src="https://a25hotel.com/upload/images/a25-hotel-45-phan-chu-trinh-khach-san-2-sao-quan-hoan-kiem-ha-noi.jpg">

                </div>

                <div class="product-content">


                    <h6> <?php echo $value->getRoomName(); ?></h6>
                    <h6><?php echo $value->getRoomType(); ?></h6>
                    <h6> <?php echo $value->getRoomPrice(); ?></h6>
                    <h6> <?php echo $value->getCustomerName(); ?></h6>
                    <h6> <?php echo $value->getCMND(); ?></h6>
                    <h6> <?php echo $value->getdayIn(); ?></h6>
                    <h6> <?php echo $value->getNote(); ?></h6>

                    <div class="price">
                        <p><?php echo $value->getStatus(); ?></p>
                    </div>
                    <a href="index.php?page=bookRoom&id=<?php echo $value->getRoomCode(); ?>"
                       style="font-size: 10px;text-decoration: none; background: ;border-radius: 2px">Chi Tiết</a><br>
<!--                    <a href="index.php?page=bookRoom&id=--><?php //echo $value->getRoomCode(); ?><!--"-->
<!--                       style="font-size: 10px;text-decoration: none; background: ;border-radius: 2px">Trả Phòng</a><br>-->
                </div>
            </div>
        </div>

        <?php endforeach; ?>
        </div>

    </div>
</div>

</body>
</html>