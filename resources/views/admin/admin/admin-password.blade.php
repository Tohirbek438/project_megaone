@extends('admin.layouts.app')
@section('title', 'Admin dashboard')
@section('content')
    @include('admin.admin.edit-modal')
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-body">
                <div class="nk-block">
                    <div class="card">
                        <div class="card-aside-wrap">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head nk-block-head-lg">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h4 class="nk-block-title">Shaxsiy ma'lumotlar</h4>
                                            <div class="nk-block-des">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="nk-block-head-content align-self-start d-lg-none">
                                            <a href="#" class="toggle btn btn-icon btn-trigger mt-n1"
                                               data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="nk-data data-list">
                                        <div class="data-head">
                                            <h6 class="overline-title">Asosiy</h6>
                                        </div>
                                        <br>
                                        <form action="{{route('update.password',Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                        <div class="col-md-10">
                                                <span class="data-label">Parol yangilash</span>
                                                    <input type="password" name="password" class="form-control">
                                            @error('password')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                            <br>
                                            <span class="data-label">Parolni qayta kiriting</span>
                                            <input type="password" name="password_confirmation" class="form-control">
                                            @error('password_confirmation')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        <span class="data-label">Rasm</span>
                                        <input type="file" name="image" class="form-control" required>
                                            @error('image')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                            <br>
                                            <img src="{{\Illuminate\Support\Facades\Storage::url(Auth::user()->image)}}" alt="">
                                            <br>
                                            <br>
                                            <button class="btn btn-outline-primary" type="submit">Saqlash</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg toggle-screen-lg"
                                data-toggle-body="true" data-content="userAside" data-toggle-screen="lg"
                                data-toggle-overlay="true">
                                <div class="card-inner-group" data-simplebar="init">
                                    <div class="simplebar-wrapper" style="margin: 0px;">
                                        <div class="simplebar-height-auto-observer-wrapper">
                                            <div class="simplebar-height-auto-observer"></div>
                                        </div>
                                        <div class="simplebar-mask">
                                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                                     aria-label="scrollable content"
                                                     style="height: auto; overflow: hidden;">
                                                    <div class="simplebar-content" style="padding: 0px;">
                                                        <div class="card-inner">
                                                            <div class="user-card">
                                                                <div class="user-avatar bg-primary">
                                                                    @if(!isset(Auth::user()->image))
                                                                        <span><i class="fas fa-user"></i></span>
                                                                    @else
                                                                        <img src="{{\Illuminate\Support\Facades\Storage::url(Auth::user()->image)}}" alt="" srcset="">
                                                                    @endif
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="lead-text">{{Auth::user()->name}}</span>
                                                                    <span class="sub-text">{{Auth::user()->email}}</span>
                                                                </div>
                                                                <div class="user-action">

                                                                </div>
                                                            </div><!-- .user-card -->
                                                        </div><!-- .card-inner -->
                                                        <div class="card-inner p-0">
                                                            <ul class="link-list-menu">
                                                                <li><a class="{{ Request::is('user/show/' . Auth::user()->id) ? 'active' : '' }}
"
                                                                       href="{{route('show.show',Auth::user()->id)}}">
                                                                        <em class="icon ni ni-user-fill-c"></em><span>Shaxsiy ma'lumot</span></a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{ route('parol.change', Auth::user()->id) }}"
                                                                       class="{{ Request::is('admin/edit'.Auth::user()->id) ? 'active' : '' }}">
                                                                        <em class="icon ni ni-lock-alt-fill"></em>
                                                                        <span>Boshqa ma'lumotlar</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="simplebar-placeholder" style="width: auto; height: 504px;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                                    </div>
                                </div><!-- .card-inner-group -->
                            </div><!-- card-aside -->
                        </div><!-- .card-aside-wrap -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
@endsection
