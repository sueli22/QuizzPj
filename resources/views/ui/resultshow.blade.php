@extends('ui.master')

@section('content')
<style>
    .scrollable-container {
        max-height: 35vh; /* Adjust the percentage or pixel value as needed */
        overflow-y: auto;
    }
</style>


<div class="container">
    <div class="mt-5">
        <div class="row justify-content-center  mb-5">
            <div class="col-md-10 mt-5 ">
                <div class="border p-4">
                    <div class="card-header pcolor"><p>"ကျွန်ုပ်တို့၏ Quiz Management System ကိုအသုံးပြုသည့်အတွက် ကျေးဇူးတင်ပါသည်။"</p> <p>"ဤဥာဏ်ရည်ဉာဏ်သွေးလေ့ကျင့်ခန်းကို သင်နှစ်သက်မည်ဟု မျှော်လင့်ပါသည်။ ကောင်းသောနေ့တစ်နေ့ဖြစ်ပါစေ" <a href="{{route('user.categories')}}"  class="btn btn-primary btn-sm">Back</a></p></div>

                    <div class="card-body">
                        <h6 class="mt-0 fw-bolds pcolor"> သင်ရွေးချယ်ထားခဲ့သော မေးခွန်းအမျိုးအစား မှာ:
                            {{ $result->category->name ?? 'ERROR' }} ဖြစ်သည်</h6>
                        <table class="table table-bordered mt-2 pcolor">
                            <thead>
                                <tr>
                                    <th class="pcolor">အမည်</th>
                                    <th class="pcolor">{{ $result->user->name }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="fw-bold">
                                    <td class="pcolor">ရမှတ်: </td>
                                    <td class="pcolor">{{ $result->total_points ?? '0' }} </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class=" p-3 scrollable-container">
                        <h6 class="pcolor">ဖြေခဲ့သော မေးခွန်း၏ အဖြေမှန်များမှာ</h6>
                        @foreach ($result->category->questions as $q)
                            <p style="font-size: 12px;" class="pcolor">{{ $q->name }} </p>
                            @foreach ($q->options as $key => $o)
                                @if ($o->points == 1)
                                    <p style="font-size: 12px;" class="pcolor">အဖြေမှန် no.{{ $key + 1 }} - {{ $o->answer }} </p>
                                @endif
                            @endforeach
                            <hr style="color: red; border: 1px solid rgb(230, 224, 224);">
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
    </div>

@endsection
