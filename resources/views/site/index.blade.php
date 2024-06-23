@extends('layouts.main')
@section('title', 'Megaone')
@section('content')
    <?php $home_pages = \App\Models\Page::where('status', 1)->orWhere('menu_category', $header->menu_id)->orderBy('id', 'ASC')->first() ?>
    <?php $home_page = \App\Models\Page::where('status', 1)->orWhere('menu_category', $header->menu_id)->orderBy('id', 'DESC')->first() ?>
    <section class="position-relative p-0 no-transition" id="home">
        <h2 class="d-none">as</h2>
        <div id="rev_slider_18_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="megaone-medical-1"
             data-source="gallery" style="background:transparent;padding:0px;">
            <!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
            <div id="rev_slider_18_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8.1">
                <ul>
                    <li data-index="rs-44" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                        data-thumb="assets/100x50_3d469-bg-light-1.jpg" data-rotate="0" data-saveperformance="off"
                        data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                        data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{\Illuminate\Support\Facades\Storage::url($home_pages->image->image_url ?? null)}}"
                             alt="" data-bgposition="center center"
                             data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <div class="small-bg-overlay"></div>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-44-layer-2"
                             data-x="['left','left','center','center']" data-hoffset="['0','100','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-120','-120','-120','-96']"
                             data-fontsize="['36','36','28','23']"
                             data-lineheight="['46','46','38','33']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"

                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":270,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 5; white-space: nowrap; font-size: 36px; line-height: 46px; font-weight: 500; color: #484b59; letter-spacing: 0px;font-family:Poppins;">
                            {{$home_pages->{'title_'.App::getLocale()} }}
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-44-layer-1"
                             data-x="['left','left','center','center']" data-hoffset="['0','100','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-55','-55','-55','-40']"
                             data-fontsize="['72','72','62','45']"
                             data-lineheight="['82','82','72','55']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-type="text"
                             data-responsive_offset="on"
                             data-frames='[{"delay":1080,"split":"chars","splitdelay":0.1,"speed":1500,"split_direction":"forward","frame":"0","from":"sX:0.8;sY:0.8;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 6; white-space: nowrap; font-size: 72px; line-height: 82px; font-weight: 500; color: #484b59; letter-spacing: 0px;font-family:Poppins;">
                            @if(App::getLocale() == 'uz')
                                <span class="drk-blu">Tibbiy</span> <span class="light-blu">Salomatlik</span>
                            @elseif(App::getLocale() == 'ru')
                                <span class="drk-blu">Медицинское</span> <span class="light-blu">здоровье</span>
                            @else
                                <span class="drk-blu">Medical</span> <span class="light-blu">health</span><
                            @endif
                        </div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-44-layer-3"
                             data-x="['left','left','center','center']" data-hoffset="['0','100','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['40','53','53','60']"
                             data-width="['600','600','600','450']"
                             data-height="none"
                             data-whitespace="normal"
                             data-type="text"
                             data-responsive_offset="on"
                             data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','center','center']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             style="z-index: 7; min-width: 600px; max-width: 600px; white-space: normal; font-size: 16px; line-height: 26px; font-weight: 400; color: #797979; letter-spacing: 0px;font-family:Roboto;">
                            {{$home_pages->{'description_'.App::getLocale()} }}
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption  tp-resizeme"
                             id="slide-44-layer-4"
                             data-x="['left','left','center','center']" data-hoffset="['0','100','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['138','138','138','180']"
                             data-width="['600','600','600','450']"
                             data-height="none"
                             data-whitespace="normal"
                             data-type="button"
                             data-responsive_offset="on"
                             data-frames='[{"delay":3350,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','center','center']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 8; font-family:Roboto;"><a href="#whymegaone" class="btn btn-primary scroll" style="border-radius: 20px;">Batafsil</a>
                        </div>
                    </li>
                    <!-- SLIDE  -->
                    <!-- SLIDE  -->
                    <li data-index="rs-46" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                        data-thumb="assets/100x50_3d469-bg-light-1.jpg" data-rotate="0" data-saveperformance="off"
                        data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                        data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{\Illuminate\Support\Facades\Storage::url($home_page->image->image_url)}}" alt=""
                             data-bgposition="center center"
                             data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <div class="small-bg-overlay"></div>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 9 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-46-layer-2"
                             data-x="['right','right','center','center']" data-hoffset="['0','100','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-120','-120','-120','-96']"
                             data-fontsize="['36','36','28','23']"
                             data-lineheight="['46','46','38','33']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"

                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":270,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['right','right','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 5; white-space: nowrap; font-size: 36px; line-height: 46px; font-weight: 500; color: #484b59; letter-spacing: 0px;font-family:Poppins;">
                            {{$home_page->{'title_'.App::getLocale()} }}
                        </div>

                        <!-- LAYER NR. 10 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-46-layer-1"
                             data-x="['right','right','center','center']" data-hoffset="['0','100','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-55','-55','-55','-50']"
                             data-fontsize="['72','72','62','45']"
                             data-lineheight="['82','82','72','55']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"

                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":1080,"split":"chars","splitdelay":0.1,"speed":1500,"split_direction":"forward","frame":"0","from":"sX:0.8;sY:0.8;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['right','right','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 6; white-space: nowrap; font-size: 72px; line-height: 82px; font-weight: 500; color: #484b59; letter-spacing: 0px;font-family:Poppins;">
                            @if(App::getLocale() == 'uz')
                                <span class="drk-blu">Tibbiy</span> <span class="light-blu">Salomatlik</span>
                            @elseif(App::getLocale() == 'ru')
                                <span class="drk-blu">Медицинское</span> <span class="light-blu">здоровье</span>
                            @else
                                <span class="drk-blu">Medical</span> <span class="light-blu">health</span><
                            @endif
                        </div>

                        <!-- LAYER NR. 11 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-46-layer-3"
                             data-x="['right','right','center','center']" data-hoffset="['0','100','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['40','53','53','53']"
                             data-width="['600','600','600','450']"
                             data-height="none"
                             data-whitespace="normal"

                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['right','right','center','center']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 7; min-width: 600px; max-width: 600px; white-space: normal; font-size: 16px; line-height: 26px; font-weight: 400; color: #797979; letter-spacing: 0px;font-family:Roboto;">
                            {{$home_page->{'description_'.App::getLocale()} }}
                        </div>

                        <!-- LAYER NR. 12 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-46-layer-4"
                             data-x="['right','right','center','center']" data-hoffset="['0','100','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['138','138','138','160']"
                             data-width="['600','600','600','450']"
                             data-height="none"
                             data-whitespace="normal"

                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":3350,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['right','right','center','center']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 8; font-family:Roboto;"><a href="#whymegaone" class="btn btn-primary scroll" style="border-radius: 10px;">Batafsil</a>
                        </div>
                    </li>

                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div>

        <!-- END REVOLUTION SLIDER -->

        <ul class="social-icons-simple revicon darkcolor">
            <?php $heads = \App\Models\Header::first() ?>
            <li class="d-table"><a class="facebook-text-hvr" href="https://www.facebook.com/{{$heads->facebook}}"><i
                        class="fab fa-facebook-f"></i></a>
            </li>
            <li class="d-table"><a class="twitter-text-hvr" href="https://twitter.com/{{$heads->twitter}}"><i
                        class="fab fa-twitter"></i>
                </a></li>
            <li class="d-table">
                <a class="telegram-text-hvr" href="https://t.me/{{$heads->telegram}}">
                    <svg style="width: 16px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                        <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                            d="M248 8C111 8 0 119 0 256S111 504 248 504 496 393 496 256 385 8 248 8zM363 176.7c-3.7 39.2-19.9 134.4-28.1 178.3-3.5 18.6-10.3 24.8-16.9 25.4-14.4 1.3-25.3-9.5-39.3-18.7-21.8-14.3-34.2-23.2-55.3-37.2-24.5-16.1-8.6-25 5.3-39.5 3.7-3.8 67.1-61.5 68.3-66.7 .2-.7 .3-3.1-1.2-4.4s-3.6-.8-5.1-.5q-3.3 .7-104.6 69.1-14.8 10.2-26.9 9.9c-8.9-.2-25.9-5-38.6-9.1-15.5-5-27.9-7.7-26.8-16.3q.8-6.7 18.5-13.7 108.4-47.2 144.6-62.3c68.9-28.6 83.2-33.6 92.5-33.8 2.1 0 6.6 .5 9.6 2.9a10.5 10.5 0 0 1 3.5 6.7A43.8 43.8 0 0 1 363 176.7z"/>
                    </svg>
                </a>
            </li>
            <li class="d-table"><a class="instagram-text-hvr" href="https://twitter.com/{{$heads->instagram}}"><i class="fab fa-instagram"></i>
                </a></li>
        </ul>
        <!-- END REVOLUTION SLIDER -->
    </section>
    <section id="join-us" class="features feature-content p-0 pb-60">
        <div class="container">
            <?php $informations_header = \App\Models\HomePage::where('status', 1)->get(); ?>
            @if(!$informations_header->isEmpty())
                <div class="row mx-0">
                        <?php $i = 1 ?>
                    @foreach($informations_header as $header)
                            <?php $i++ ?>
                        <div class="col flip p-0 mr-1 col-md-3.5">
                            <div class="front">
                                <div class="feature-col one">
                                    <div class="box center-block ">
                                        <div class="feature-icon"><?= $header['icon'] ?></i></div>
                                        <h4 class="mb-4 main-font">{{$header->{'name_'.App::getLocale() } }}</h4>
                                        <p class="text-white mb-4 text-center">{{$header->{'description_'.App::getLocale() } }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="back">
                                <div class="feature-col-1 one-1">
                                    <div class="box center-block">
                                        <div class="feature-icon"><?= $header['icon'] ?></div>
                                        <h4 class="mb-4 theme-dark main-font">{{$header->{'name_'.App::getLocale() } }}</h4>
                                        <p class="theme-dark mb-4 text-center">{{$header->{'description_'.App::getLocale() } }}</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

    </section>
    <!--feature-box ends -->

    <!-- About us-->
    <?php $page_megaone = \App\Models\Page::where('menu_category', $menu_id_for_megaone->menu_id)->first(); ?>
    @if(isset($page_megaone))
        <section id="whymegaone" class="bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="container">
                        <div
                            class="main-title style-two d-flex justify-content-md-around align-items-center flex-column flex-md-row text-center text-md-left wow fadeIn"
                            data-wow-delay="300ms">
                            <div class="col-md-5 mb-4 mb-md-0">
                                <h5>{{$page_megaone->{'name_'.App::getLocale()} }}</h5>
                                <h2 class="pb-0"> {{$page_megaone->{'title_'.App::getLocale()} }}
                                </h2>

                            </div>
                            <div class="col-md-7 ml-md-4 pl-md-2">
                                <p class="mb-4">
                                    {{$page_megaone->{'description_'.App::getLocale()} }}
                                </p>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    @else

    @endif
    <!--end About us-->
    <!-- Bars-->
    <?php $treatments = \App\Models\TreatmentDisease::all(); ?>
    @if(!$treatments->isEmpty())
        <section class="pt-0">
            <h2 class="d-none">aas</h2>
            <div class="container ">
                <div class="row ">
                    <div class="col-12 my-auto">
                        <div class="row">
                            @foreach($treatments as $treatment)
                                <div class="col-lg-6">
                                    <div class="skills alt-font">
                                        <div class="prog-item">
                                            <p>{{$treatment->{'title_'.App::getLocale()} }}</p>
                                            <div class="skills-progress"><span class="bar-light"
                                                                               data-value="{{$treatment->percent}}%"></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </section>
    @else
    @endif
    <!-- end Bars-->
    <!-- Appointment -->
    @include('site.appointment')
    <!-- ends Appointment -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="department-sub alt-font text-center">
                    </div>
                    <div class="department-title main-font text-center"><h2><span
                                class="title-clr">@lang('words.clinic_department')</span>
                        </h2></div>

                </div>
            </div>

            <div class="row">
                @foreach($departments as $department)
                    <div class="col-md-4">
                        <div class="feature-item mb-md-0 mb-5">
                            <span class="icon" style="background: none;"><img width="130px" height="130px"
                                                                              src="{{\Illuminate\Support\Facades\Storage::url($department->image->image_url)}}"/></span>
                            <div class="text feature-txt mx-4 my-4">
                                <h4 class="feature-heading">{{$department->{'title_'.App::getLocale()} }}</h4>
                                <p>{{$department->{'description_'.App::getLocale()} }}</p>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Counters -->

    @if(isset($information))
        <section class="bg-counter demo-banner">
            <h2 class="d-none">as</h2>
            <div class="container">
                <div class="row">

                    <div class="col-md-3">
                        <div class="serial-box">
                            <span class="count">{{$information->patients}}</span>
                            <div class="count-line "></div>
                            <p>@lang('words.patients')</p>
                        </div>

                    </div>

                    <div class="col-md-3">
                        <div class="serial-box">
                            <span class="count">{{$information->cases}}</span>
                            <div class="count-line "></div>
                            <p>@lang('words.cases')</p>
                        </div>

                    </div>

                    <div class="col-md-3">
                        <div class="serial-box">
                            <span class="count">{{$information->appointments}}</span>
                            <div class="count-line "></div>
                            <p>@lang('words.appointments')</p>
                        </div>

                    </div>

                    <div class="col-md-3">
                        <div class="serial-box mb-0">
                            <span class="count">{{$information->doctors}}</span>
                            <div class="count-line "></div>
                            <p>@lang('words.doctors')</p>
                        </div>

                    </div>

                </div>
            </div>

        </section>
    @else
    @endif
    <!-- end Counters-->
    <!-- portfolio -->
    @include('site.gallery')
    <!-- Ends portfolio -->
    <!-- testimonial -->
    @include('site.happy_patient')
    <!-- Ends testimonial -->
    <!--Blog Start-->


    @include('site.blog')
    <!--Blog End-->
    <!-- Map -->
    @if(!$contacts->isEmpty())
        @foreach($contacts as $contact)
                <?php $page = \App\Models\Page::where('menu_category', $contact->menu_id)->first(); ?>
            @if(isset($page))
            <section id="contactus" class="contact p-0 position-relative"
                     style="background: url({{\Illuminate\Support\Facades\Storage::url($page->image->image_url)}});background-repeat: no-repeat;background-size:cover;">
                @include('site.contact')
            </section>
            @else
            @endif
        @endforeach
    @else
    @endif

@endsection
