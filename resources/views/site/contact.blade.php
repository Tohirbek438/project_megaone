<div class="bg-overlay bg-color"></div>
<div class="container">

            <div class="row align-items-center">
                <div class="col-md-6">
                    {{--map start--}}
                        <?= $contact->map_x ?>
                </div>
                <div class="col-md-6">
                    <div class="address-box tittle mb-0 bg-img4 ml-0 ml-md-5">
                        <!--overlay-->
                        <div class="bg-overlay opacity-8"></div>
                        <div class="address-text alt-font text-md-left text-white position-relative wow fadeInUp">
                            <h5 class="mb-3 text-capitalize contact-subtitle font-weight-light">{{$page->title_uz}}</h5>
                            <!--title-->
                            <h2 class="mb-4 main-font map-text text-capitalize">{{$page->name_uz}}</h2>
                            <!--Address-->
                            <p class="mb-3">{{$contact->address}}</p>
                            <!--Phone-->
                            <p class="mb-3">Office Telephone : {{$contact->office_phone}}<br>
                                Mobile : {{$contact->phone}} </p>
                            <!--Email-->
                            <p class="mb-3">mail : {{$contact->email}}<br>
                                Inquiries : {{$contact->inquires}}</p>
                            <!--Timing-->
                            <p class="mb-3">{{$contact->work_days}}</p>

                        </div>
                    </div>
                </div>

            </div>

</div>

