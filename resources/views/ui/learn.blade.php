@extends('ui.master')
@section('content')
    <style>
        .swiper {
            background: none;
        }

        .swiper-slide {
            background: none;
        }

        .swiper-slide img {
            width: 150px;
            /* Set your desired width */
            height: 150px;
            /* Set your desired height */
            object-fit: cover;
            border-radius: 10px;
            /* Set your desired border radius */
            box-shadow: 0 4px 8px rgba(150, 185, 22, 0.2);
            /* Add shadow */
            transition: transform 0.5s, box-shadow 0.5s;
            /* Add transition for hover effect */
        }

        .swiper-slide img:hover {
            transform: scale(1.05);
            /* Slightly increase size on hover */
            box-shadow: 0 8px 16px rgba(236, 214, 84, 0.3);
            /* Enhance shadow on hover */
        }
    </style>


    <div style="height: 200px">

    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
            <div class="col-lg-6 order-2 order-lg-2 content">
                <h3 class="pcolor fw-bold ">Frontend ဆိုတာ ဘာလဲ? Backend ဆိုတာဘာလဲ
                    ? </h3>

                <ul style="font-family: 'Bangers', cursive;color:rgb(0, 0, 0)">
                    <li class="pcolor mb-4"> Website တစ်ခုကိုဖန်တီးတည်ဆောက်ရာမှာ Front-End ရယ် Back-End
                        ရယ်ဆိုပြီးနစ်မျိုးခွဲလုပ်လေ့ရှိကြပါတယ်။ အဲ့ထဲမှ Front-End ဆိုတာကတော့သူ့နာမည်အတိုင်း
                        ကိုယ်တည်ဆောက်မယ့် Website ရဲ့ Front(အရှေ့ပိုင်း)ကိုပြောချင်တာပါ။ ဆိုလိုချင်တာကတော့ Website ရဲ့
                        အပေါ်ယံအခွံ Design ကာလာအနေအထားကိုဆိုလိုချင်တာပါ။ Website တစ်ခုကို လူတစ်ယောက်အ​နေနဲ့မြင်ကြည့်လိုက်ပါ
                        အရေပြား၊ အသားအရောင်၊ ဆံပင်တွေ၊ မျက်ခုံးမွှေး စသဖြင့် အပေါ်ယံဆန်တဲ့အလှတွေ အရာတွေကို Front-End
                        လို့ခေါ်ပြီး။ ဦးနှောက်၊ ကိုယ်တွင်းကလီစာတွေ၊ သွေးကြောတွေစသဖြင့် နောက်ကွယ်ကနေ
                        အသက်သွင်းပေးတဲ့အရာတွေကိုတော့ Back-End ပိုင်းလို့ယူဆနိုင်ပါတယ်။
                    </li>
                    <li class="mb-4 pcolor">
                        front-end language အနေဖြင့် 1.HTML (HyperText Markup Language)
                        2.CSS (Cascading Style Sheets)
                        3.JavaScript
                        4.TypeScript
                        5.Dart
                        6.Elm
                        7.CoffeeScript ကိုလေ့လာထားသင့်ပါသည်
                    </li>
                    <li class="mb-1  pcolor">
                        backend-end language အနေဖြင့်
                        1.JavaScript (Node.js)
                        2.Python
                        3.PHP
                        4.Ruby
                        5.Java
                        6.C#
                        7.Go
                        8.Rust
                        9.Swift
                        10.Kotlin
                        11.Perl
                        12.Elixir
                        13.Scala
                        14.Django (Python Framework)
                        15.ASP.NET (C# Framework)
                        16.Spring (Java Framework)
                        17.Laravel (PHP Framework)
                        18.Express (Node.js Framework) ကိုလေ့လာထားသင့်ပါသည်
                    </li>

                </ul>

            </div>
            <div class="col-lg-6 order-1 order-lg-1">
                <img src="{{ asset('assets/img/bkfk.png') }}" class="" style="width: 500px;height:400px"
                    alt="">
            </div>

        </div>

    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 mt-3">
            <div class="col-lg-6 order-2 order-lg-2 content">
                <h3 class="pcolor fw-bold mb-5">What is API?</h3>

                <ul style="font-family: 'Bangers', cursive;color:rgb(0, 0, 0)">
                    <li class="pcolor mb-4"> APIဆိုတာဘာလဲ။ Application Programming Interfaceဖြစ်ပါတယ်။
                    </li>
                    <li class="mb-4 pcolor">
                        နားလည်လွယ်အောင်ပြောရရင် ထမင်းဆိုင်သွားလိုက်ရင် ထမင်းဆိုင်က စားသုံးသူတွေအတွက်ထုတ်ပေးထားတဲ့ menu interface ဆိုတာရှိပါတယ်။ ကြက်သားဟင်း၊ ငါးဟင်းစသည်ဖြင့်ပေါ့၊ Interface ကိုကောင်းအောင်ထုတ်ပေးနိုင်တဲ့ အဆင့်မြင့်တဲ့ ထမင်းဆိုင်တွေဆို description ဆိုတာလေးပါ ပါသေး၊ ကြက်သားဟင်းကို ဘာတွေနဲ့ဘယ်လိုချက်ထားတယ်စသည်ဖြင့်ပေါ့။ ဒီသဘောကို Programming မှာဆက်စပ်ပြရမယ်ဆိုရင် ကျနော်တို့အခုသုံးနေတဲ့ Programming Language တွေမှာ conditional statement စစ်တာတို့ looping ပတ်တာတို့သည် Language ကပေးထားတဲ့ ထုတ်ပေးထားတဲ့ API တွေကိုခေါ်သုံးနေတာပဲဖြစ်ပါတယ်။ နောက်ဥပမာတစ်ခုပြရမယ်ဆို ကျနော်တို့ website or application ထဲမှာ Google map ကြီးကို embed လုပ်ထားမယ်ဆို ဒါသည် Google Map API ကိုလှမ်းသုံးထားတာပဲဖြစ်ပါတယ်။ API ကိုအသေးစိတ်ထပ်ရှင်းရမယ်ဆို ပိုကျယ်ပြန့်ပေမယ့် ဒီဆောင်းပါးမှာတော့ ဒီလောက်နဲ့ပဲအရှိန်သတ်ထားလိုက်ပါမယ်။ အဓိကကတော့ API ဆိုတာ services တွေကြားမှာ အချင်းချင်းချိတ်ဆက်ပြီး အလုပ်လုပ်နိုင်အောင် ဖန်တီးပေးထားတဲ့အရာလို့ ယေဘုယျမှတ်ထားလို့ရပါတယ်
                    </li>


                </ul>

            </div>
            <div class="col-lg-6 order-1 order-lg-1">
                <img src="{{ asset('assets/img/api.jpg') }}" class="" style="width: 500px;height:400px"
                    alt="">
            </div>

        </div>

    </div>




    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 mt-3">
            <div class="col-lg-6 order-2 order-lg-2 content">
                <h3 class="pcolor fw-bold mb-5">HTMl CSS JavaScript</h3>

                <ul style="font-family: 'Bangers', cursive;color:rgb(0, 0, 0)">
                    <li class="pcolor mb-4"> Html သည် Hyper Text markup language တစ်ခုဖြစ်ပီး Website ရှိ အကြောင်းအရာများကို
                        ဖန်တီးရန်နှင့် တည်ဆောက်ရန် အသုံးပြုသည့် စံသတ်မှတ်ထားသော ဘာသာစကားဖြစ်သည်။
                        HTML ဆိုတာ website တစ်ခုကို ပိုပြီးဆွဲဆောင်မှု့ရှိအောင် ဖန်တီးရာတွင် အသုံးပြုသည့် markup language
                        တစ်ခုဖြစ်သည်။ Web page နှင့် app တွေကိုဖန်တီးရာမှာ အသုံးများဆုံး ဘာသာစကားတစ်ခုဖြစ်သည်။ HTML ဖြင့်
                        သင့်ကိုယ်ပိုင် website များကို ဖန်တီးနိုင်သလို မိမိဖန်တီးထားသည့် website မှာ text နှင့် graphic
                        များကို စိတ်ကြိုက်ပုံဖော်ရာတွင်လည်း အသုံးပြုနိုင်ပါသည်။
                    </li>
                    <li class="mb-4 pcolor">
                        ✨CSS ဆိုတာ Design တွေကို ပိုမိုလှပအောင် ပိုပြီးဆွဲဆောင်မှုရှိဖို့အတွက်
                        ဖန်တီးရာတွင်အသုံးပြုသည့်နည်းပညာတစ်ရပ်ဖြစ်ပါတယ်။

                        ✨ CSS အသုံးပြုပြီး မိမိဖန်တီးထားသည့် web page မှာ font style အမျိုးမျိုး, colour အမျိုးမျိုး, size
                        အမျိုးမျိုး ကို စိတ်ကြိုက်ဖန်တီးနိုင်ပါသည်။
                    </li>
                    <li class="mb-1  pcolor">
                        JavaScript ဆိုတာ Popular ဖြစ်သည့် Programming Language တစ်ခုဖြစ်ပါသည်။ Web App တစ်ခုကို User
                        Interactive ဖြစ်အောင် လုပ်ဆောင်ပေးသည့် နည်းပညာရပ်တစ်ခုလည်း ဖြစ်သည်။
                    </li>

                </ul>

            </div>
            <div class="col-lg-6 order-1 order-lg-1">
                <img src="{{ asset('assets/img/html.png') }}" class="" style="width: 500px;height:400px"
                    alt="">
            </div>

        </div>

    </div>




    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 mt-3">
            <div class="col-lg-6 order-2 order-lg-2 content">
                <h3 class="pcolor fw-bold mb-5">PHP ဆိုတာဘာလဲ ?</h3>

                <ul style="font-family: 'Bangers', cursive;color:rgb(0, 0, 0)">
                    <li class="pcolor mb-4"> PHP အရှည်ကောက်က Personal Home Pages ဖြစ်ပါတယ်
                        အခုနောက်ပိုင်းတော့ Php Hypertext Pre-processor ဖြစ်လာပါတယ်
                    </li>
                    <li class="mb-4 pcolor">
                        php ကိုstatic website တွေ ကိုdynamic website တွေ အဖြစ်ရေးသားရာမှာအသုံးပြုပါတယ်
                        website တွေရဲ့ 78.9% နီးပါးဟာ PHP ကို server-side language အနေနဲ့အသုံးပြုထားကြပါတယ်
                    </li>
                    <li class="mb-1  pcolor">
                        PHP က သင်ရတာ လွယ်တဲ့အပြင် အခမဲ့အသုံးပြုခွင့်ရှိတဲ့ Open-source License နဲ့ Programming Language တစ်ခုလဲ ဖြစ်ပါတယ်။ Open-source ဆိုတဲ့သဘောက PHP ဘယ်လိုရေးထားလဲဆိုတဲ့ Code တွေကို လူတိုင်းဖတ်ရှုနိုင်ပြီး လူတိုင်း ဝင်ရေးနိုင်ပါတယ်။ Bug တွေပြင်နိုင်ပါတယ်။ Community Support ( Forum, Troubleshooting, Documentation ) ကလဲ အရမ်းကောင်းတယ်။ နောက်ပြီး PHP က Cross-platform ဖြစ်ပါတယ်။ Window OS တင်ထားတဲ့ PC မှာ PHP နဲ့ရေးထားတဲ့ Program တစ်ခုဟာ Linux OS တင်ထားတဲ့ PC နဲ့လဲ အလုပ်လုပ်ပါတယ်။
                    </li>

                </ul>

            </div>
            <div class="col-lg-6 order-1 order-lg-1">
                <img src="{{ asset('assets/img/php.png') }}" class="" style="width: 500px;height:400px"
                    alt="">
            </div>

        </div>

    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 mt-3">
            <div class="col-lg-6 order-2 order-lg-2 content">
                <h3 class="pcolor fw-bold mb-5">Laravel  ဆိုတာဘာလဲ ?</h3>

                <ul style="font-family: 'Bangers', cursive;color:rgb(0, 0, 0)">
                    <li class="pcolor mb-4">Laravel ဆိုတာကတော့ PHP နဲ့ရေးသားဖန်တီးထားတဲ့ Open source MVC Framework တစ်ခုဖြစ်ပါတယ်။
                    </li>
                    <li class="mb-4 pcolor">
                        ပထမဆုံးသိထားရမှာက Laravel PHP Framework ကိုမလေ့လာခင် HTML/CSS/JS အခြေခံနှင့် PHP/OOP သိရမှာဖြစ်ပါတယ်။ ဒါတွေသိပြီဆိုရင် ပထမဆုံး Laravel Docs ကိုသေချာဖတ်ပြီးလေ့လာသင့်ပါတယ်။ ပြီးရင် Laracasts ရဲ့ Laravel Fundamental Series ကိုလိုက်လုပ်သင့်ပါတယ်။
                    </li>
                    <li class="mb-1  pcolor">
                        Laravel က MVC ဆိုတဲ့ design pattern ကိုအသုံးပြုထားပါတယ်။ MVC ဆိုတာက Model View Controller ကိုဆိုလိုပါတယ်။
                    </li>

                </ul>

            </div>
            <div class="col-lg-6 order-1 order-lg-1">
                <img src="{{asset('assets/img/laravel.png')}}" class="" style="width: 500px;height:400px"
                    alt="">
            </div>

        </div>

    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 mt-3">
            <div class="col-lg-6 order-2 order-lg-2 content">
                <h3 class="pcolor fw-bold mb-5">Model View Controller</h3>

                <ul style="font-family: 'Bangers', cursive;color:rgb(0, 0, 0)">
                    <li class="pcolor mb-4">MVC ဆိုတာ Model View Controller  ဖြစ်ပါတယ်။MVC ဆိုတာ တကယ်တန်းတော့ framework နဲ့ သက်ဆိုင်တာ မဟုတ်တဲ့ architectural pattern တစ်ခုပါ။
                    </li>
                    <li class="mb-4 pcolor">
                        ပုံမှန် သမာရိုးကျ Web app တွေမှာ controller ရဲ့ အရေးပါပုံ မသိသာ ပေမယ့် routing address တွေ များလာတဲ့ အခါမှာ controller နဲ့ model ချိတ်ဆက်တာ အရမ်းအရေးပါလာတယ်။ သာမာန် Web App တွေမှာ GET နဲ့ POST ကိုပဲ အဓိကသုံးပေမယ့် RESTful မှာတော့ GET , POST , PUT , DELETE ကို အသုံးပြုကြပါတယ်။ Controller အနေနဲ့ GET နဲ့ ဒီ လိပ်စာလာရင် ဒီ model ကို ခေါ်ပြီး ဒါကို လုပ်။ POST ဆိုရင်တော့ ဒါကို လုပ်ဆိုပြီး ခွဲခြမ်း စိတ်ဖြာပေးပြီး ရလာတဲ့ result တွေကို View နဲ့ ပြန်ထုတ်ပြပါတယ်။
                    </li>
                    <li class="mb-1  pcolor">
                        PHP ကို ဘာ framework မှ မပါပဲ ကိုယ့်ဘာသာကိုယ် MVC pattern အနေနဲ့ ရေးလို့ရပါတယ်။ web ပိုင်းမှာမှ မဟုတ်ပဲ Desktop Application တွေမှာလည်း MVC ကို အသုံးပြုနိုင်ပါတယ်။ iOS development မှာလည်း MVC ကို အသုံးပြုနိုင်ပါတယ်။
                    </li>

                </ul>

            </div>
            <div class="col-lg-6 order-1 order-lg-1">
                <img src="{{asset('assets/img/mvc.png')}}" class="" style="width: 500px;height:400px"
                    alt="">
            </div>

        </div>

    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 mt-3">
            <div class="col-lg-6 order-2 order-lg-2 content">
                <h3 class="pcolor fw-bold mb-5">Git & GitHub</h3>

                <ul style="font-family: 'Bangers', cursive;color:rgb(0, 0, 0)">
                    <li class="pcolor mb-4">Git ဆိုတာ Project တစ်ခုမှာ ရေးသားထားတဲ့ Source Code တွေကို စိစစ်တည်းဖြတ်တဲ့အလုပ်ကို လုပ်နိုင်တဲ့ Software စနစ်တစ်ခုပဲ ဖြစ်ပါတယ်။ Version Control System (VCS) လို့လည်းခေါ်ကြတယ်။ Development Team တစ်ခုမှာ Software တွေ Develop လုပ်ကြတဲ့အခါ၊ ဘယ် Developer တွေက Source Code ကို ဘယ်လိုတွေရေးခဲ့တယ်၊ Logic တွေမှားနေလား၊ မလိုအပ်တာတွေပါနေလား၊ Code Standard နှင့် ကိုက်ညီမှုရှိရဲ့လား၊ မရှိဘူးလား စတာတွေကို Git ကနေပြန်ကြည့်ပြီး Source Code တွေကို စိစစ်နိုင်တယ်၊ တည်းဖြတ်နိုင်တယ်။ Developer တစ်ယောက်ရေးထားတဲ့ Code နှင့် အခြား Developer တစ်ယောက်ရေးထားတဲ့ Code တွေကို ပေါင်းစည်းတဲ့အလုပ် (Merge) လုပ်နိုင်တယ်။ Developer တစ်ယောက်ရေးထားတဲ့ Code အချို့က အခြား Developer တစ်ယောက်အတွက် အသုံးဝင်နေခဲ့မယ်၊ ဒါမှမဟုတ် အခြား Project တစ်ခုအတွက် အသုံးဝင်နေခဲ့မယ်ဆိုရင် အဲ့ဒီ Code အချို့ကို လိုအပ်တဲ့နေရာအတွက် ရွေးချယ်၊ ပေါင်းထည့်နိုင်တဲ့အလုပ် (Cherry Pick) လုပ်နိုင်တယ်။
                    </li>
                    <li class="mb-4 pcolor">
                        ဆိုတာ Git Repository တွေကို Hosting လုပ်ပေးတဲ့ Website တစ်ခုဖြစ်ပြီး၊ Repository တွေကို Management လုပ်တဲ့စနစ်တစ်ခုဖြစ်ပါတယ်။ Open Source (သို့) Public Project တွေအတွက် Code Hosting ကို Free အသုံးပြုနိုင်ပြီး၊ Private Project တွေအတွက်ကိုတော့ အနည်းဆုံး ၁လကို ၇ဒေါ်လာမှ စပြီးပေးချေရပါတယ်။  GitHub ထဲက အခြားသူတွေရဲ့ Open Source Project တွေမှာ Register လုပ်ပြီး ပါဝင်ကူညီ အားဖြည့်ပေးနိုင်ပါတယ်။  GitHub မှာ GitHub Desktop ဆိုတာရှိပါတယ်။  အဲ့ဒီ GitHub Desktop ကသုံးရတာရိုးရှင်း၊ လွယ်ကူတဲ့ Git GUI Client တစ်ခုဖြစ်ပါတယ်။
                    </li>


                </ul>

            </div>
            <div class="col-lg-6 order-1 order-lg-1">
                <img src="{{asset('assets/img/git.jpg')}}" class="" style="width: 500px;height:400px"
                    alt="">
            </div>

        </div>

    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 mt-3">
            <div class="col-lg-6 order-2 order-lg-2 content">
                <h3 class="pcolor fw-bold mb-5">Framework Vs Library</h3>

                <ul style="font-family: 'Bangers', cursive;color:rgb(0, 0, 0)">
                    <li class="pcolor mb-4">Framework ဆိုတာဘာလဲ?


                        Framework ဆိုတာ က တော့ ဘာနဲ့ တူလဲဆိုတော့ အသင့် ပြင်ဆင်ပြီးသား ပစ္စည်း အပြည့်အစုံ ထည့် ပေးထားတဲ့ အိမ်ကို ငှါးလိုက်တာနဲ့ တူပါတယ်။ ကိုယ်လိုအပ်မယ် ထင်တဲ့ ပစ္စည်းတွေ ကို အိမ်ရှင်က အဆင်သင့် ထည့်ပေးထားတာမျိုး ပေါ့ ။

                        Framework ဆိုတာ လည်း အဲသဘော တရားအတိုင်းပါဘဲ ။ ကိုယ့် ရဲ့ Project ကြီး တစ်ခုလုံးအတွက် လိုအပ်သမျှ Package တွေ အကုန်လုံးကို စုထည့်ပေးထားတာမျိုးပေါ့။ Development အတွက် လိုအပ်တဲ့ Function တွေကို စုပြီး development process ကို တန်း လုပ်နိုင်အောင် ပြုလုပ်ပေးထားတာဖြစ်ပါတယ်။
                    </li>
                    
                    <li class="mb-4 pcolor">
                        Library ဆိုတာဘာလဲ?  မိတ်ဆွေက အိမ်ငှားတယ် ဆိုပါစို့ ။ မိတ်ဆွေက နေဖို့ရာ နေရာ တစ်ခုထဲဆိုတဲ့ လိုအပ်ချက် အတွက်နဲ့ အိမ်ငှါးလိုက်တာမျိုးနဲ့ တူပါတယ်။ မိတ်ဆွေကို အိမ်ရှင်က နေဖို့ ရာ အတွက်ကို ဘဲ အဓိက ဖြေရှင်းပေးလိုက်တာ ။ ကျန်တဲ့ အသုံးအဆောင်လိုအပ်တဲ့ ပစ္စည်းမှန်သမျှ မိတ်ဆွေ စိတ်တိုင်းကျ ထည့် သုံးချင်လဲရတယ်။ မသုံးချင်လဲ ရတယ် ။

                        Library ဆိုတာလည်း အဲ အတိုင်းပါဘဲ။

                        Library ဆိုတာက functionality တွေ သို့မဟုတ် problemတွေအတွက် တခြားသူတစ်ယောက်က ဖြေရှင်းပြီးသား code တွေ၊ ready to use ဖြစ်နေတဲ့ program တွေကိုပြောတာပါ။
                    </li>


                </ul>

            </div>
            <div class="col-lg-6 order-1 order-lg-1">
                <img src="{{asset('assets/img/framework.png')}}" class="" style="width: 500px;height:400px"
                    alt="">
            </div>

        </div>

    </div>

    <div style="height: 50px">

    </div>

    <div class="container ">
        <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
                      {
                        "loop": true,
                        "speed": 600,
                        "autoplay": {
                          "delay": 5000
                        },
                        "slidesPerView": "auto",
                        "pagination": {
                          "el": ".swiper-pagination",
                          "type": "bullets",
                          "clickable": true
                        },
                        "breakpoints": {
                          "320": {
                            "slidesPerView": 2,
                            "spaceBetween": 40
                          },
                          "480": {
                            "slidesPerView": 3,
                            "spaceBetween": 60
                          },
                          "640": {
                            "slidesPerView": 4,
                            "spaceBetween": 80
                          },
                          "992": {
                            "slidesPerView": 6,
                            "spaceBetween": 120
                          }
                        }
                      }
                    </script>
            <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide mt-2">
                    <a href="https://www.w3schools.com/html/default.asp"><img src="assets/img/clients/1.png"
                            class="img-fluid" alt=""></a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.w3schools.com/css/default.asp"><img src="assets/img/clients/2.png"
                            class="img-fluid" alt=""></a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.w3schools.com/js/default.asp"><img src="{{ asset('assets/img/clients/3.png') }}"
                            class="img-fluid" alt=""></a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.php.net/"><img src="{{ asset('assets/img/clients/4.png') }}" class="img-fluid"
                            alt=""></a>
                </div>
                <div class="swiper-slide">
                    <a href="https://laravel.com/docs/11.x/readme"><img src="assets/img/clients/5.jpg" class="img-fluid"
                            alt=""></a>
                </div>
                <div class="swiper-slide">
                    <a
                        href="https://en.wikipedia.org/wiki/C_Sharp_(programming_language)#:~:text=C%23%20(%2F%CB%8Csi%CB%90%20%CB%88,Paradigm"><img
                            src="assets/img/clients/6.png" class="img-fluid" alt=""></a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.java.com/en/"><img src="assets/img/clients/7.png" class="img-fluid"
                            alt=""></a>
                </div>
                <div class="swiper-slide">
                    <a href="https://www.python.org/"><img src="assets/img/clients/8.png" class="img-fluid"
                            alt=""></a>
                </div>
            </div>
            <div class="swiper-pagination" class="mt-4"></div>
        @endsection
