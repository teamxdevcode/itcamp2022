<form wire:submit.prevent="submit" class="flex flex-col gap-y-4">
  <h1 class="text-xl mb-4">กรอกข้อมูลเพื่อดำเนินการยืนยันสิทธิ์</h1>
  <x-confirmation-page.input icon="Badge" id="confirm.nickname" label="ชื่อเล่น" type="text"></x-confirmation-page.input>
  <x-confirmation-page.input icon="receipt" id="transfer_statement" label="หลักฐานการโอนเงิน" type="file">
    <div class="mb-2 text-start text-sm text-amber-500 flex flex-col gap-1">
      <span class="block">ชำระเงินค่าสมัครจำนวน <span class="underline">500 บาท</span></span>
      <p>
        บัญชีธนาคารกรุงเทพ<br>
        เลขที่บัญชี 040-8-094209<br>
        ชื่อบัญชี พิมพ์ชนก บุญทองนุ่ม
      </p>
      <span class="block">รองรับไฟล์รูปภาพนามสกุล .jpg, .jpeg, .png เท่านั้น</span>
    </div>
  </x-confirmation-page.input>
  <x-confirmation-page.input icon="schedule" id="confirm.transfer_at" label="เวลาทำรายการโอนเงิน" type="datetime-local"></x-confirmation-page.input>
  <x-confirmation-page.input icon="assignment_ind" id="identity_card" label="สำเนาบัตรประชาชนผู้สมัคร" type="file">
    <div class="mb-2 text-start text-sm text-amber-500 flex flex-col gap-1">
      <p>
        ลงชื่อสำเนาถูกต้องพร้อมกำกับว่า "ใช้สำหรับสมัครค่าย ITCAMP ครั้งที่ 18 เท่านั้น"
      </p>
      <a href="{{asset('image/identity-card-example.jpg')}}" target="_blank" class="inline-flex w-fit items-center gap-1 hover:opacity-80 transition-all"><span class="underline">ตัวอย่างสำเนาบัตรประชาชน</span> <span class="material-symbols-outlined text-sm">link</span></a>
      <span class="block">รองรับไฟล์รูปภาพนามสกุล .jpg, .jpeg, .png เท่านั้น</span>
    </div>
  </x-confirmation-page.input>
  <x-confirmation-page.input icon="Vaccines" id="vaccine_certificate" label="เอกสารหมอพร้อม (ฉีดวัคซีนอย่างน้อย 2 เข็มขึ้นไป)" type="file">
    <div class="mb-2 text-start text-sm text-amber-500 flex flex-col gap-1">
      <a href="{{asset('image/vaccine-certificate-example.jpg')}}" target="_blank" class="inline-flex w-fit items-center gap-1 hover:opacity-80 transition-all"><span class="underline">ตัวอย่างเอกสารหมอพร้อม</span> <span class="material-symbols-outlined text-sm">link</span></a>
      <span class="block">รองรับไฟล์รูปภาพนามสกุล .jpg, .jpeg, .png เท่านั้น</span>
    </div>
  </x-confirmation-page.input>
  <div class="flex flex-col justify-start text-start gap-y-1 w-full text-lg">
    <p class="text-base flex gap-1 items-center">
      <span class="material-symbols-outlined text-[1.25rem]">restaurant</span>
      ข้อจำกัดด้านอาหาร (หากมี)
      @error('food_restrictions')
        <span class="text-xs text-red-600">{{$message}}</span>
      @enderror
    </p>
    <label for="food_restrictions_1" class="text-start">
      <input type="checkbox" wire:model.defer="food_restrictions" name="food_restrictions" id="food_restrictions_1" value="อาหารฮาลาล">
      รับประทานอาหารฮาลาล
    </label>
    <label for="food_restrictions_2" class="text-start">
      <input type="checkbox" wire:model.defer="food_restrictions" name="food_restrictions" id="food_restrictions_2" value="อาหารมังสวิรัติ">
      รับประทานอาหารมังสวิรัติ
    </label>
    <label for="food_restrictions_3" class="text-start">
      <input type="checkbox" wire:model.defer="food_restrictions" name="food_restrictions" id="food_restrictions_3" value="อาหารเจ">
      รับประทานอาหารเจ
    </label>
    <label for="food_restrictions_4" class="text-start">
      <input type="checkbox" wire:model.defer="food_restrictions" name="food_restrictions" id="food_restrictions_4" value="ไม่กินเผ็ด">
      ไม่กินเผ็ด
    </label>
  </div>
  <button wire:loading.attr="disabled" type="submit" class="bg-green-700 border border-green-800 rounded-lg px-4 py-2 mb-6 mt-4 hover:bg-green-600 transition-all disabled:bg-green-700/50 disabled:cursor-not-allowed">ยืนยันสิทธิ์</button>
</form>
