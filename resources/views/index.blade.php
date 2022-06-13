@extends('layouts.app')
@section('main')
    <div class="h-full flex items-center justify-center">
      <button
        class="font-semibold py-5 px-6 bg-blue-600 hover:bg-blue-700 transition-all ease-in-out duration-200 rounded-md text-white"
        type="button"
        onclick="toggle()"
      >
        เข้าสู่ระบบด้วย Facebook
      </button>
    </div>
    <div
      class="hidden absolute bg-black/50 h-full w-full flex items-center justify-center"
      id="condition_confirm"
    >
      <span
        class="absolute top-0 right-0 my-5 mx-10 text-white font-bold text-xl cursor-pointer"
        onclick="toggle()"
      >
        X
      </span>
      <form
        action="{{route('auth.login')}}"
        class="bg-white w-full md:w-2/3 h-4/5 mx-5 rounded-md p-6"
      >
        <h1 class="font-bold text-lg md:text-2xl mb-6">
          คุณสมบัติของผู้สมัครเข้าร่วมโครงการ
        </h1>
        <ul class="space-y-6 overflow-y-auto h-2/3 font-light px-4">
          <li>
            1. ผู้สมัครต้องเป็นนักเรียนระดับมัธยมศึกษาตอนปลาย ปวช. ปวส.
            หรือเทียบเท่า เท่านั้น
          </li>
          <li>
            2. ผู้สมัครสามารถเข้าร่วมการอบรมได้ตลอดระยะเวลา 4 วัน 3 คืน
            โดยได้รับการยินยอมจากผู้ปกครอง
          </li>
          <li>
            3. เป็นผู้ที่ได้รับวัคซีน COVID-19 อย่างน้อย 2
            เข็มก่อนวันค่ายอย่างน้อย 14 วัน
            ทั้งนี้ผู้สมัครต้องส่งหลักฐานการได้รับวัคซีนเมื่อถูกร้องขอ
          </li>
          <li>
            4. ไม่อยู่ในกลุ่มเสี่ยงติดเชื้อ COVID-19
            ในช่วงก่อนวันจัดกิจกรรมตามเงื่อนไข ดังนี้
            <ul class="space-y-6 mt-6 list-disc">
              <li class="ml-4 md:ml-6">
                ไม่มีอาการบ่งชี้โรคติดเชื้อไวรัสโคโรนา 2019 (COVID-19) เช่น ไข้
                ไอ มีน้ำมูก เจ็บคอ คอแห้ง อ่อนเพลีย ปวดเมื่อย ท้องเสีย ตาแดง
                ผื่นขึ้น หรือเหงื่อออกตอนกลางคืน
              </li>
              <li class="ml-4 md:ml-6">
                ไม่มีประวัติสัมผัสกับผู้ป่วยที่ยืนยันถึงการเป็นโรคติดเชื้อไวรัสโคโรนา
                2019 (COVID-19) เป็นเวลาอย่างน้อย 14 วัน ก่อนวันจัดกิจกรรม
              </li>
            </ul>
          </li>
          <li>
            5. มีผลตรวจเชื้อเป็นลบเมื่อตรวจเชื้อด้วยชุดตรวจเชื้อ SARS-CoV-2
            (เชื้อก่อโรค COVID-19) แบบตรวจหาแอนติเจนด้วยตนเอง (COVID-19 Antigen
            test self-test kits) ภายใน 72 ชั่วโมง ก่อนวันจัดกิจกรรม
            ทั้งนี้ผู้สมัครต้องส่งผลตรวจเชื้อเมื่อถูกร้องขอ
          </li>
        </ul>
        <div class="flex text-md items-center justify-center">
          <input
            type="checkbox"
            name="condition_confirm_input"
            id="condition_confirm_input"
            class="my-6"
            required
          />
          <label for="condition_confirm_input" class="ml-2 font-light">ยอมรับข้อกำหนดและเงื่อนไขการเข้าร่วมโครงการ</label>
        </div>
        <div class="w-full text-center">
          <button
            type="submit"
            class="text-center bg-blue-500 py-4 px-6 rounded-md text-white"
          >
            ดำเนินการต่อ
          </button>
        </div>
      </form>
    </div>
    <footer class="p-5">
      <div class="text-center text-sm text-gray-500">
        <a href="https://itcamp18.in.th">ITCAMP18</a> © 2022 All Rights
        Reserved. | Development By <a href="https://Osphin.com">Osphin</a>
      </div>
    </footer>
    <script>
      function toggle() {
        var e = document.getElementById("condition_confirm");
        e.classList.toggle("hidden");
      }
      function toggleNav() {
        var e = document.getElementById("navbar");
        e.classList.toggle("hidden");
      }
    </script>
@endsection
