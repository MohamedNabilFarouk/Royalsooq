

      <div class="location-section">
          <img src="{{asset('https://royalsooq.com/img/logos/Royal Sooq.png')}}" style="
    width: 18%;
"/>
            <div class="lo-area ml-auto d-flex">
                <div class="area">
                    @auth
                    <a href="{{route('free.ads')}}" class="btn centerbutton" style="background: #2962d1;">
                        <i class="material-icons"> <i class="material-icons">add</i>أضافه أعلان</i>
                    </a>
                    @endauth
                    @guest
                    <a href="{{url('login')}}" class="btn centerbutton" style="background: #2962d1;">
                        <i class="material-icons"> <i class="material-icons"></i>{{__('index.log_in')}}</i>
                    </a>
                    @endguest
                </div>


            </div>
            <div class="clear"></div>
        </div>

<!-- .Header  -->
      {{-- <div class="search-section">
            <div class="search-form search-content">
                <div class="search-wrapper ">
                    <input id="searchButton" class="search" placeholder="Where do you want to go?">
                    <button class="ssubmit" type="submit" name="search_submit"><i data-feather="search"></i></button>
                </div>
            </div>
        </div> --}}
