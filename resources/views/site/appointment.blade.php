@if(!$forms->isEmpty())
    @foreach($forms as $form)
            <?php $page = \App\Models\Page::where('menu_category', $form->menu_id)->first(); ?>
        <section id="appointment" class="form-bg" style="background: url({{\Illuminate\Support\Facades\Storage::url($page->image->image_url)}}) no-repeat;
background-attachment: inherit;
background-size: cover;
background-position: top center;
">
            @if(isset($page))
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="appointment-box">
                                <div class="form-title"><h2>{{$page->{'title_'.App::getLocale()} }}</h2></div>
                                <div class="form-para"><p>{{$page->{'description_'.App::getLocale()} }}</p></div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="contact-form" id="contact-form-data" action="{{route('save-appointments')}}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-12" id=""></div>
                                                <div class="col-md-6 mb-3">
                                                    <input type="text" name="userName" class=" form-control m-mb-20"
                                                           placeholder="{{$form->{'name_'.App::getLocale()} }}">
                                                    <br>
                                                    @error('userName')
                                                    <div class="alert alert-danger col-md-12">
                                                        <span class="text-danger">{{$message}}</span>
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <input type="text" name="userPhone" class=" form-control m-mb-20"
                                                           placeholder="{{$form->{'phone_'.App::getLocale()} }}">

                                                    <br>
                                                    @error('userPhone')
                                                    <div class="alert alert-danger col-md-12">
                                                        <span class="text-danger">The phone field is required.</span>
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="position-relative m-mb-20">
                                                        <label class="position-absolute m-label">
                                                            <span class="calender-line"></span>
                                                            <i class="fas fa-calendar-alt calender-icon"></i>
                                                        </label>
                                                        <input type="text" id="my-date" name="reservationDate"
                                                               placeholder="{{$form->{'date_'.App::getLocale()} }}:"
                                                               class=" form-control datepicker">
                                                        <br>
                                                        @error('reservationDate')
                                                        <div class="alert alert-danger col-md-12">
                                                            <span class="text-danger">{{$message}}</span>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                            <textarea class="message form-control m-mb-20 pt-2" name="userMessage"
                                                      placeholder="{{$form->{'message_'.App::getLocale()} }}:"></textarea>
                                                    <br>
                                                    @error('userMessage')
                                                    <div class="alert alert-danger col-md-12">
                                                        <span class="text-danger" style="font-size: 14px;">{{$message}}</span>
                                                    </div>
                                                    @enderror
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 text-center text-md-right">
                                                    <button type="submit"
                                                            class="mt-3 btn btn-rounded btn-large btn-white-blue">
                                                        <i class="fa fa-spinner fa-spin mr-2 d-none"
                                                           aria-hidden="true"></i>Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </section>
    @endforeach
@endif
