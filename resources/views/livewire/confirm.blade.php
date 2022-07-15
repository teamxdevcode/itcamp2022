<div>
  @php
    $subcamp = [
      'Webtopia'=>[
        'image'=>'camp-logo-1.png',
        'color'=>'#952720',
      ],
      'Game Runner'=>[
        'image'=>'camp-logo-3.png',
        'color'=>'#539520',
      ],
      'DataVergent'=>[
        'image'=>'camp-logo-2.png',
        'color'=>'#956620',
      ],
      'Nettapunk'=>[
        'image'=>'camp-logo-4.png',
        'color'=>'#206B95',
      ],
    ];

    date_default_timezone_set("Asia/Bangkok");

    $reserved = [168, 1687, 383, 1618, 1314];
  @endphp
  @if (is_null($user->registration))
    <p class="text-xl md:text-2xl font-bold mb-3 md:mb-2">ขออภัย, ระบบปิดรับสมัครแล้ว</p>
    <p class="mb-8">ขอขอบคุณในความสนใจต่อ ITCAMP18 แล้วพบกันใหม่ในปีหน้า</p>
  @elseif (($user->registration->result == 1 || in_array($user->registration->applicant_id, $reserved)) && is_null($user->registration->confirm))
    <div x-data="{waiverModal:false}">
      @if ((strtotime(date('Y-m-d H:m:s')) < strtotime('2022-07-01 23:59:59')) || in_array($user->registration->applicant_id, $reserved))
        <div class="mb-8 max-w-xl">
          <img src="https://itcamp18.in.th/{{$subcamp[$user->registration->subcamp]['image']}}" alt="" class="mx-auto h-24">
        </div>
        <p class="text-xl md:text-2xl font-bold mb-3 md:mb-2 flex items-center gap-2">ขอแสดงความยินดี, น้องผ่านการคัดเลือก</p>
        <p class="mb-8">ขอต้อนรับน้องสู่เมือง <span style="color: {{$subcamp[$user->registration->subcamp]['color']}}">{{$user->registration->subcamp}}</span></p>
        <div class="flex gap-3 justify-center">
          <a href="{{route('confirmation')}}" class="inline-block mb-8 max-w-[14rem] w-full p-3 px-6 rounded-xl hover:opacity-80 transition-all duration-500 bg-green-700">ยืนยันสิทธิ์</a>
          <button type="button" x-on:click="waiverModal = true" class="inline-block mb-8 max-w-[14rem] w-full p-3 px-6 rounded-xl hover:opacity-80 transition-all duration-500 bg-zinc-800">สละสิทธิ์</button>
        </div>
        <div class="fixed w-screen h-screen bg-zinc-900/80 top-0 left-0 z-40" x-show="waiverModal" style="display: none">
          <div class="absolute z-50 flex flex-col gap-2 justify-center items-center h-full w-full p-6">
            <button type="button" class="material-symbols-outlined absolute right-3 top-3 text-3xl" x-on:click="waiverModal = false">close</button>
            @error('waiver')
              <span class="mb-3 bg-amber-600/50 p-2 px-4 border border-amber-700/50 rounded-lg flex items-center gap-2"><span class="material-symbols-outlined">priority_high</span>{{$message}}</span>
            @enderror
            <h1 class="text-2xl">น้องต้องการ<span class="text-red-600">สละสิทธิ์</span>ใช่หรือไม่</h1>
            <p>หากดำเนินการสละสิทธิ์แล้วจะไม่สามารถยืนยันสิทธิ์ได้อีกครั้ง</p>
            <div class="mt-6 flex flex-col sm:flex-row w-full justify-center gap-3">
              <button type="button" x-on:click="waiverModal = false" class="inline-block h-fit max-w-[14rem] w-full p-3 px-6 rounded-xl hover:opacity-80 transition-all duration-500 bg-zinc-600 mx-auto sm:mx-0">ยกเลิก</button>
              <button type="button" wire:click="waiver()" class="inline-block h-fit max-w-[14rem] w-full p-3 px-6 rounded-xl hover:opacity-80 transition-all duration-500 bg-red-600 mx-auto sm:mx-0">ยืนยันการสละสิทธิ์</button>
            </div>
          </div>
          <div class="absolute h-full w-full backdrop-blur-md"></div>
        </div>
      @else
        <img src="{{asset('image/icon/sob.svg')}}" alt="" class="w-16 mx-auto mb-6">
        <p class="text-xl md:text-2xl font-bold mb-3 md:mb-2 flex items-center gap-2">ขออภัย น้องไม่ได้ยืนยันสิทธิ์ภายในเวลาที่กำหนด</p>
        <p class="mb-8">ขอขอบคุณในความสนใจต่อ ITCAMP18 แล้วพบกันใหม่ในปีหน้า</p>
      @endif
    </div>
  @elseif (($user->registration->result == 1 || $user->registration->result == 2) && $user->registration->confirm->confirm == 1)
    <div x-data="{waiverModal:$wire.waiverModal}">
      <div class="mb-8 max-w-xl">
        <img src="https://itcamp18.in.th/{{$subcamp[$user->registration->subcamp]['image']}}" alt="" class="mx-auto h-24">
      </div>
      <p class="text-xl md:text-2xl font-bold mb-3 md:mb-2 flex items-center gap-2">ขอแสดงความยินดี, น้องผ่านการคัดเลือก</p>
      <p class="mb-8">ขอต้อนรับน้องสู่เมือง <span style="color: {{$subcamp[$user->registration->subcamp]['color']}}">{{$user->registration->subcamp}}</span></p>
      <p class="text-xl flex items-center justify-center gap-2 mb-6 font-bold" style="color: {{$subcamp[$user->registration->subcamp]['color']}}">
        <span class="material-symbols-outlined">check_circle</span>
        ยืนยันสิทธิ์แล้ว
      </p>
      <div class="flex gap-3">
        <a href="https://www.facebook.com/groups/1084619469119222/" target="_blank" class="inline-block mb-8 max-w-[14rem] w-full p-3 px-6 rounded-xl hover:opacity-80 transition-all duration-500 bg-blue-700 hover:bg-blue-600">เข้ากลุ่ม Facebook</a>
        <button type="button" x-on:click="waiverModal = true" class="inline-block mb-8 max-w-[14rem] w-full p-3 px-6 rounded-xl hover:opacity-80 transition-all duration-500 bg-zinc-800">สละสิทธิ์</button>
      </div>
      <div class="fixed w-screen h-screen bg-zinc-900/80 top-0 left-0 z-40" x-show="waiverModal" style="display: none">
        <div class="absolute z-50 flex flex-col gap-2 justify-center items-center h-full w-full p-6">
          <button type="button" class="material-symbols-outlined absolute right-3 top-3 text-3xl" x-on:click="waiverModal = false">close</button>
          @error('waiver')
            <span class="mb-3 bg-amber-600/50 p-2 px-4 border border-amber-700/50 rounded-lg flex items-center gap-2"><span class="material-symbols-outlined">priority_high</span>{{$message}}</span>
          @enderror
          <h1 class="text-2xl">น้องต้องการ<span class="text-red-600">สละสิทธิ์</span>ใช่หรือไม่</h1>
          <p>หากดำเนินการสละสิทธิ์แล้วจะไม่สามารถยืนยันสิทธิ์ได้อีกครั้ง</p>
          <div class="mt-6 flex flex-col sm:flex-row w-full justify-center gap-3">
            <button type="button" x-on:click="waiverModal = false" class="inline-block h-fit max-w-[14rem] w-full p-3 px-6 rounded-xl hover:opacity-80 transition-all duration-500 bg-zinc-600 mx-auto sm:mx-0">ยกเลิก</button>
            <button type="button" wire:click="waiver()" class="inline-block h-fit max-w-[14rem] w-full p-3 px-6 rounded-xl hover:opacity-80 transition-all duration-500 bg-red-600 mx-auto sm:mx-0">ยืนยันการสละสิทธิ์</button>
          </div>
        </div>
        <div class="absolute h-full w-full backdrop-blur-md"></div>
      </div>
    </div>
  @elseif ($user->registration->result == 1 && $user->registration->confirm->confirm == 0)
    <p class="text-xl md:text-2xl font-bold mb-3 md:mb-2 text-red-600">น้องได้ดำเนินการสละสิทธิ์แล้ว</p>
    <p class="mb-8">ขอขอบคุณในความสนใจต่อ ITCAMP18 แล้วพบกันใหม่ในปีหน้า</p>
  @elseif($user->registration->result == 0 || $user->registration->result == null)
  <img src="{{asset('image/icon/sob.svg')}}" alt="" class="w-16 mx-auto mb-6">
    <p class="text-xl md:text-2xl font-bold mb-3 md:mb-2">ขอแสดงความเสียใจ น้องยังไม่ผ่านการคัดเลือก</p>
    <p class="mb-8">พี่ ๆ ขอขอบคุณน้อง ๆ เป็นอย่างมากที่ให้ความสนใจค่าย ITCAMP 18 ของเรา หวังว่าโอกาสหน้าเราจะได้พบกันอีกน้า</p>
  @elseif($user->registration->result == 2)
    <p class="text-xl md:text-2xl font-bold mb-3 md:mb-2">ขณะนี้มีผู้ยืนยันสิทธิ์ครบจำนวนแล้ว</p>
    <p class="mb-8">พี่ ๆ ขอขอบคุณน้อง ๆ เป็นอย่างมากที่ให้ความสนใจค่าย ITCAMP 18 ของเรา หวังว่าโอกาสหน้าเราจะได้พบกันอีกน้า</p>
  @endif
</div>
