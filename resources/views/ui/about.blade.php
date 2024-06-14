@extends('ui.master')
@section('content')
<style>
      .red-shadow {
        filter: drop-shadow(0 0 10px rgb(46, 77, 143)); /* Adjust the shadow color and size as needed */
    }
</style>

<div class="container mb-5 ">
    <div class="row mt-5 ">
        <div class="col-5 mt-5" >
            <div >
              <img src="{{asset('ui-images/t.jpg')}}" class="red-shadow rounded-circle" style="width: 450px">
            </div>
          </div>
        <div class="col-md-7 mt-5">
            <div class="">
              <div class="heading_container">
                <h2 style="font-family: 'Bangers', cursive;" class="mb-3">
                  WHO WE ARE?
                </h2>
              </div>
              <ul  style="font-family: 'Bangers', cursive;color:rgb(14, 47, 48)" >
                <li  class="mb-3"> ကျွန်ုပ်တို့သည် ဉာဏ်စမ်းပဟေဠိများကို ထိရောက်စွာ စီစဉ်ပေးရန်အတွက် ခိုင်မာသော ပလက်ဖောင်းတစ်ခု ပံ့ပိုးပေးနိုင်ရန် ရည်စူးပါသည်။
                    ဉာဏ်စမ်းပဟေဋ္ဌိများကို ပံ့ပိုးပေးသည့် အသုံးပြုရလွယ်ကူသော User Inter faceကို ပေးဆောင်ပါသည်။
                </li>
                <li class="mb-3">
                    လွယ်ကူချောမွေ့စေရန်နှင့် အသေးစိတ်ခွဲခြမ်းစိတ်ဖြာခြင်းနှင့် အစီရင်ခံခြင်းကိရိယာများမှတစ်ဆင့် စွမ်းဆောင်ရည်ဆိုင်ရာ ထိုးထွင်းသိမြင်မှုများကို ပေးဆောင်ရန် ဒီဇိုင်းထုတ်ထားပါသည်။
                </li>
                <li>
                    ပဟေဠိစီမံခန့်ခွဲမှုကို ရိုးရှင်းစေပြီး သင်ယူမှုအတွေ့အကြုံများကို မြှင့်တင်ရာတွင် ကျွန်ုပ်တို့နှင့် ပူးပေါင်းပါ။

                </li>
                <li>
                    သင်သည် စာသင်ခန်းတွင်း သင်ယူမှုကို မြှင့်တင်ရန် ကြိုးစားနေသော ဆရာတစ်ဦးဖြစ်စေ သို့မဟုတ် သင့်အသိပညာကို စမ်းသပ်ရန် စိတ်အားထက်သန်သော ကျောင်းသားဖြစ်စေ၊ ကျွန်ုပ်တို့၏စနစ်သည် သင့်ခရီးအတွက် အသုံးပြုရလွယ်ကူသော User Inter faceနှင့် ပြည့်စုံသောကိရိယာများကို ပေးဆောင်ပါသည်။

                </li>
              <div>
                <a href="{{route('user.categories')}}" class="btn btn-primary mt-4">
                  Choose Category
                </a>
              </div>
            </div>
          </div>
    </div>


</div>



@endsection
