<section id="vedio-sec">
    <div class="container">
        <div class="row pad-top-botm">

            <div class="col-lg-6 col-md-6">
                {{-- так выводим если в табл. 1-а запись и через
                     @foreach коллекция не разбирается  --}}
                <h2>{{ $special[0]['title'] }}</h2>
                <p>
                    {{ $special[0]['desc'] }}

                </p>
                <p>
                    {{ $special[0]['text'] }}

                </p>
                <button class="btn btn-primary" type="button">
                    Read Full Details <span class="badge">+</span>
                </button>
                <br />
                <br />
            </div>

            <div class="col-lg-6 col-md-6">
                <!--<iframe class="vedio-style" src="http://www.youtube.com/embed/VpZmIiIXuZ0" ></iframe>-->
                <!--<iframe width="590" height="320" src="https://www.youtube.com/embed/5dsGWM5XGdg" frameborder="0" allowfullscreen></iframe>-->
                <iframe width="590" height="330" src="https://www.youtube.com/embed/fRmf14-Px-8" frameborder="0" allowfullscreen></iframe>
                <!--<video class="vedio-style" controls="controls"><source src="assets/video/video1.mp4"></video>-->
            </div>

        </div>
    </div>
</section>
