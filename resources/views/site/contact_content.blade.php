<div class="general-subhead">
    <h1>CONTACT US</h1>
</div>
<!--./ Gereral Subhead End -->
<section>
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-6  col-sm-12">
                <h3>{{$contact[0]['title']}}</h3>
                <hr />
                <p>
                    {{$contact[0]['str1']}}
                    <br />
                    {{$contact[0]['str2']}}
                    <br />
                    {{$contact[0]['str3']}}
                    <br />
                </p>
                <h3>Social Presence</h3>
                <a href="#"><i class="fa fa-facebook-square fa-3x color-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter-square fa-3x color-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus-square fa-3x color-google-plus"></i></a>
                <a href="#"><i class="fa fa-linkedin-square fa-3x color-linkedin"></i></a>
                <a href="#"><i class="fa fa-pinterest-square fa-3x color-pinterest"></i></a>
            </div>
            <div class="col-lg-6 col-md-6  col-sm-12">
                <h3>Need Help ? Write Us. </h3>
                <hr />
                <form>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Name" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Email address" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="4" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit Request</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

</section>
<!--./ Main Contact end -->
<div>
    <iframe class="cnt" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2999841.293321206!2d-75.80920404999999!3d42.75594204999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew+York!5e0!3m2!1sen!2s!4v1395313088825"></iframe>
    {{--<iframe class="cnt" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1377232.4076869201!2d34.22230131249997!3d47.6084970983438!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1507283981572" ></iframe>--}}
</div>
<!--./ Map end -->