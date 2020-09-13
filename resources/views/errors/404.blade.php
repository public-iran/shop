@extends('front.layout.master')
@section('content')

    <!--================================
        START 404 AREA
    =================================-->
    <section class="four_o_four_area section--padding2 dir-rtl">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <img src="{{asset('darya/images/new/404.png')}}" alt="404 page">
                    <div class="not_found">
                        <h3>کاربر گرامی ، متاسفانه صفحه مورد نظر شما وجود ندارد!
                             
                        </h3>
                        <a href="/" class="btn btn--round btn--default">بازگشت به خانه</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================
            END 404 AREA
    =================================-->

@endsection

