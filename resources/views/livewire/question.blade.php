<div x-data="app()" x-cloak>
  <div class="max-w-3xl mx-auto px-4 pb-10 md:pt-10 md:pb-16">
    @if ($errors->any)
      {{$errors->first()}}
    @endif

    <div x-show.transition="$wire.step === 3">
      <div
        class="bg-white rounded-lg p-10 flex items-center shadow justify-center"
      >
        <div>
          <svg
            class="mb-4 h-20 w-20 text-green-500 mx-auto"
            viewBox="0 0 20 20"
            fill="currentColor"
          >
            <path
              fill-rule="evenodd"
              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
              clip-rule="evenodd"
            />
          </svg>

          <h2 class="text-2xl mb-4 text-gray-800 text-center font-bold">
            บันทึกคำตอบแล้ว
          </h2>

          {{-- <div class="text-gray-600 mb-8 min-w-full">
            Thank you. We have sent you an email to support@itcamp18.in.th
            Please click the link in the message to activate your account.
          </div> --}}

          <a
            href="{{route('home')}}"
            class="w-40 block mx-auto focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border"
          >
            กลับหน้าหลัก
        </a>
        </div>
      </div>
    </div>

    <div x-show.transition="$wire.step != 3">
      <!-- Top Navigation -->
      <div class="border-b-2 py-4">
        <div
          class="uppercase tracking-wide text-xs font-bold text-gray-500 mb-1 leading-tight"
          x-text="`หน้าที่: ${$wire.step} จาก 2`"
        ></div>
        <div
          class="flex flex-col md:flex-row md:items-center md:justify-between"
        >
          <div class="flex-1">
            <div x-show="$wire.step === 1">
              <div class="text-lg font-bold text-gray-700 leading-tight">
                คำถามส่วนกลาง
              </div>
            </div>

            <div x-show="$wire.step === 2">
              <div class="text-lg font-bold text-gray-700 leading-tight">
                คำถามค่ายย่อย
              </div>
            </div>

            <div x-show="$wire.step === 3">
              <div class="text-lg font-bold text-gray-700 leading-tight">
                ยืนยัน
              </div>
            </div>
          </div>

          <div class="flex items-center md:w-64">
            <div class="w-full bg-white rounded-full mr-2">
              <div
                class="rounded-full bg-green-500 text-xs leading-none h-2 text-center text-white"
                :style="'width: '+ parseInt({{$this->step}} / 2 * 100) +'%'"
              ></div>
            </div>
            <div
              class="text-xs w-10 text-gray-600"
              x-text="parseInt($wire.step / 2 * 100) +'%'"
            ></div>
          </div>
        </div>
      </div>
      <!-- /Top Navigation -->

      <!-- Step Content -->
      <div class="py-10">
        <div x-show.transition.in="$wire.step === 1">
          @foreach ($camp_quizzes as $index => $quiz)
          <div class="mb-5">
            <label for="mainq1" class="font-bold mb-1 text-gray-700 block">{{$index+1}}. {{$quiz['question']}}</label>
            <textarea
              class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
              name="mainq1"
              id="mainq1"
              cols="30"
              rows="8"
              wire:model="camp_quizzes.{{$index}}.answer"
              placeholder="คำตอบโจทย์ข้อที่ {{$index+1}}"
            ></textarea>
          </div>
          @endforeach
        </div>
        <div x-show.transition.in="$wire.step === 2">
          @foreach ($subcamp_quizzes as $index => $quiz)
          <div class="mb-5">
            <p class="font-bold mb-1 text-gray-700 block">{{$index+1}}. {!!$quiz['question']!!}</p>
            @isset($quiz['image'])
              <div class="my-6">
                <a href="{{asset("image/quiz/{$quiz['image']}")}}" target="_blank" class="inline-block"><img src="{{asset("image/quiz/{$quiz['image']}")}}" class="rounded-lg max-h-56"></a>
                <span class="text-gray-500 text-sm mt-1 block">คลิกที่รูปเพื่อดูภาพขนาดใหญ่</span>
              </div>
            @endisset
            <textarea
              class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
              name="mainq1"
              id="mainq1"
              cols="30"
              rows="8"
              wire:model="subcamp_quizzes.{{$index}}.answer"
              placeholder="คำตอบโจทย์ข้อที่ {{$index+1}}"
            ></textarea>
          </div>
          @endforeach
        </div>
      </div>
      <!-- / Step Content -->
    </div>
  </div>

  <!-- Bottom Navigation -->
  <div
    class="fixed bottom-0 left-0 right-0 py-5 bg-white shadow-md"
    x-show="$wire.step != 3"
  >
    <div class="max-w-3xl mx-auto px-4">
      <div class="flex justify-between">
        <div class="w-1/2">
          <button
            x-show="$wire.step > 1"
            @click="$wire.decrement(); document.body.scrollTop = 0;"
            class="w-32 focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border"
          >
            ย้อนกลับ
          </button>
        </div>

        <div class="w-1/2 text-right">
          <button
            x-show="$wire.step < 2"
            @click="$wire.increment(); document.body.scrollTop = 0;"
            class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium"
          >
            ถัดไป
          </button>
          <button
            x-show="$wire.step === 2"
            @click="$wire.submit(); document.body.scrollTop = 0;"
            wire:loading.attr="disabled"
            class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium"
          >
            บันทึกคำตอบ
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- / Bottom Navigation https://placehold.co/300x300/e2e8f0/cccccc -->
</div>
