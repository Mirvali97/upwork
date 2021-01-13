@include('header')

<!-- ##### Breadcrumb Area Start ##### -->

<!-- ##### Contact Area Start ##### -->
<section class="contact-area mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-8">
                <div class="contact-content-area bg-white mb-30 p-30 box-shadow">
                    <!-- Google Maps -->
                    <!-- Section Title -->
                    <div class="section-heading">
                        <h5> {{ __('text.qilish') }}</h5>
                    </div>

                    <div class="contact-information mb-30">
                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon mr-15">
                                <i class="fa fa-map-marker" style="color: #0eaade;" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <h6>{{ __('text.manzil2') }}</h6>
                            </div>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon mr-15">
                                <i class="fa fa-envelope" style="color: #0eaade;" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <h6> mail.sportedu.uz</h6>
                            </div>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon mr-15">
                                <i class="fa fa-phone" style="color: #0eaade;" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <h6> (+99871) 242-30-87</h6>
                            </div>
                        </div>
                    </div>


                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <form action="{{route('contact.store')}}" method="post">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="text-danger" style="font-size: 10px;" >{{ $errors->first('name') }}</div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" placeholder="Ismingiz" name="name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="text-danger" style="font-size: 10px;" >{{ $errors->first('surname') }}</div>
                                    <div class="form-group">
                                        <input type="text" name="surname" class="form-control" placeholder="Familiyangiz" id="surname" >
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="text-danger" style="font-size: 10px;" >{{ $errors->first('email') }}</div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Elektron pochtangizni kiriting" id="email" >
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="text-danger" style="font-size: 10px;" >{{ $errors->first('phone') }}</div>
                                    <div class="form-group">
                                        <input type="number" name="phone" class="form-control" placeholder="telephone raqamingizni kiriting" id="phone" >
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="text-danger" style="font-size: 10px;" >{{ $errors->first('message') }}</div>
                                    <div class="form-group">
                                        <textarea name="message"  name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Xabar qoldirish"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn mag-btn mt-30 text-uppercase" type="submit">{{ __('text.knopka') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    </div>
                </div>
            </div>
        </div>

</section>
<!-- ##### Contact Area End ##### -->

@include('footer')
