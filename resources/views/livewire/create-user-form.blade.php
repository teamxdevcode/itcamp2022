<div class="mb-10">
  <h1 class="underline decoration-3 underline-offset-2 text-[#0053AD] font-semibold text-center my-12 text-2xl">
    ลงทะเบียนเข้าค่าย
  </h1>
  @if($errors->any())
    @foreach ($errors->all() as $error)
      <p>{{$error}}</p>
    @endforeach
  @endif
  <form class="w-4/5 min-h-[20em] bg-white mx-auto rounded-md border border-[#ABBED1]">
    <div class="px-6 py-4 flex justify-between items-center border-b border-[#ABBED1] flex-col-reverse md:flex-row">
      <div class="flex space-x-3">
        <button type="button" wire:click="selectPage(1)" class="step-btn {{$currentPage===1 ? 'step-sel' : 'step-non'}}">
          1
        </button>
        <button type="button" wire:click="selectPage(2)" class="step-btn {{$currentPage===2 ? 'step-sel' : 'step-non'}}">
          2
        </button>
        <button type="button" wire:click="selectPage(3)" class="step-btn {{$currentPage===3 ? 'step-sel' : 'step-non'}}">
          3
        </button>
        <button type="button" wire:click="selectPage(4)" class="step-btn {{$currentPage===4 ? 'step-sel' : 'step-non'}}">
          4
        </button>
        <button type="button" wire:click="selectPage(5)" class="step-btn {{$currentPage===5 ? 'step-sel' : 'step-non'}}">
          5
        </button>
      </div>
      <h2 class="text-[#0671E0] font-medium text-lg mb-5 md:m-0">{{$pages[$currentPage]['heading']}}</h2>
    </div>
    @if ($currentPage == 1)
    <div class="px-6 py-4 rounded-b-md border-r border-b border-l border-gray-300 shadow-md divide-y">
      <div class="space-y-5">
        <div class="flex justify-between items-center">
          <label for="fname" class="text-[#4D4D4D] font-medium">ชื่อจริง</label>
          <div class="w-2/3 md:w-1/2">
            <input id="fname" type="text" name="firstname" value="Jeremy" class="input-form-reg" wire:model.lazy="formData.1.name">
          </div>
        </div>
        <div class="flex justify-between items-center ">
          <label for="lname" class="text-[#4D4D4D] font-medium">นามสกุล</label>
          <div class="w-2/3 md:w-1/2">
            <input id="lname" type="text" class="input-form-reg" wire:model.lazy="formData.1.surname">
          </div>
        </div>
        <div class="flex justify-between items-center pb-12">
          <label for="nick" class="text-[#4D4D4D] font-medium">ชื่อเล่น</label>
          <div class="w-2/3 md:w-1/2">
            <input id="nick" type=" text" class="input-form-reg" wire:model.lazy="formData.1.nickname">
          </div>
        </div>
      </div>
      <div class="py-10 space-y-5 ">
        <div class="flex justify-between items-center">
          <label for="dateofbirth" class="text-[#4D4D4D] font-medium">วันเกิด</label>
          <div class="w-2/3 md:w-1/2">
            <input id="dateofbirth" type="date" class="input-form-reg" wire:model.lazy="formData.1.birth">
          </div>
        </div>
        <div class="flex justify-between items-center ">
          <label for="gender" class="text-[#4D4D4D] font-medium">เพศ</label>
          <div class="w-2/3 md:w-1/2">
            <input id="gender" type="text" class="input-form-reg" wire:model.lazy="formData.1.gender">
          </div>
        </div>
        <div class="flex justify-between items-center ">
          <label for="bloodgroup" class="text-[#4D4D4D] font-medium">กรุ๊ปเลือด</label>
          <div class="w-2/3 md:w-1/2">
            <input id="bloodgroup" type="text" class="input-form-reg" wire:model.lazy="formData.1.blood_type">
          </div>
        </div>
        <div class="flex justify-between items-center ">
          <label for="religion" class="text-[#4D4D4D] font-medium">ศาสนา</label>
          <div class="w-2/3 md:w-1/2">
            <input id="religion" type="text" class="input-form-reg" wire:model.lazy="formData.1.religion">
          </div>
        </div>
      </div>
    </div>
    @elseif ($currentPage === 2)
    <div class="px-6 py-4 rounded-b-md border-r border-b border-l border-gray-300 shadow-md">
      <div class="space-y-5">
        <div class="">
          <div class="flex justify-center items-start flex-col space-y-5 ">
            <label for="fname" class="text-[#4D4D4D] font-medium">ที่อยู่ปัจจุบัน</label>
            <div class="w-full">
              <textarea id="fname" type="text" name="firstname" value="Jeremy" class="textarea-from-reg" rows="7" cols="100" wire:model.lazy="formData.2.address"></textarea>
            </div>
          </div>
          <div class="flex justify-between ">
            <div class="flex justify-between items-start flex-col w-1/3 mr-5">
              <label for="bloodgroup" class="text-[#4D4D4D] font-medium">จังหวัด</label>
              <div class="w-2/3 md:w-full">
                <input id="bloodgroup" type="text" class="w-full px-2 py-1.5 bg-[#EEF5FC] border border-[#4196F0] rounded-md outline-none" wire:model.lazy="formData.2.province">
              </div>
            </div>
            <div class="flex justify-between items-start flex-col w-1/3 mr-5">
              <label for="bloodgroup" class="text-[#4D4D4D] font-medium">อำเภอ/เขต</label>
              <div class="w-2/3 md:w-full">
                <input id="bloodgroup" type="text" class="w-full px-2 py-1.5 bg-[#EEF5FC] border border-[#4196F0] rounded-md outline-none" wire:model.lazy="formData.2.district">
              </div>
            </div>
            <div class="flex justify-between items-start flex-col w-1/3 ">
              <label for="bloodgroup" class="text-[#4D4D4D] font-medium">ตำบล/แขวง</label>
              <div class="w-2/3 md:w-full">
                <input id="bloodgroup" type="text" class="w-full px-2 py-1.5 bg-[#EEF5FC] border border-[#4196F0] rounded-md outline-none" wire:model.lazy="formData.2.subdistrict">
              </div>
            </div>
          </div>
        </div>
        <div class="py-4 ">
          <h3 class="text-[#0053AD] mb-4 text-xl">ช่องทางการติดต่อ</h3>
          <div class="py-2 flex flex-col md:flex-row justify-between items-center">
            <h3 class="text-[#4D4D4D] font-medium w-full">
              เบอร์โทรศัพท์
            </h3>
            <input type="text" name="school" class="w-full px-2 py-1.5 bg-[#EEF5FC] max-w-[30em] border border-[#4196F0] rounded-md outline-none" wire:model.lazy="formData.2.phone"/>
          </div>
          <div class="py-2 flex flex-col md:flex-row justify-between items-center">
            <h3 class="text-[#4D4D4D] font-medium w-full">อีเมล</h3>
            <input type="text" name="school" class="w-full px-2 py-1.5 bg-[#EEF5FC] max-w-[30em] border border-[#4196F0] rounded-md outline-none" wire:model.lazy="formData.2.email"/>
          </div>
        </div>
      </div>
    </div>
    @elseif ($currentPage === 3)
    <div class="px-6 py-4">
      <h3 class="text-[#4D4D4D] mb-4">กำลังศึกษาอยู่ในระดับ</h3>
      <div class="flex flex-col md:flex-row justify-between space-y-4 md:space-y-0 md:space-x-2">
        <button type="button" wire:click="$set('formData.3.education_level', 'ม.4')" class="relative flex-1 hover:cursor-pointer">
          <div class="relative z-20 bg-[#EEF5FC] border-2 border-[#4196F0] py-2 rounded-md">
            <p class="text-[#4196F0] text-lg font-medium text-center">ม.4</p>
          </div>
          <div class="absolute z-10 bg-[#EEF5FC] top-0 left-0 right-0 bottom-0 transform translate-y-1.5 rounded-md border-[#4196F0] border-2">
          </div>
        </button>
        <button type="button" wire:click="$set('formData.3.education_level', 'ม.5')" class="relative flex-1 hover:cursor-pointer">
          <div class="relative z-20 bg-[#EEF5FC] border-2 border-[#4196F0] py-2 rounded-md">
            <p class="text-[#4196F0] text-lg font-medium text-center">ม.5</p>
          </div>
          <div class="absolute z-10 bg-[#EEF5FC] top-0 left-0 right-0 bottom-0 transform translate-y-1.5 rounded-md border-[#4196F0] border-2">
          </div>
        </button>
        <button type="button" wire:click="$set('formData.3.education_level', 'ม.6')" class="relative flex-1 hover:cursor-pointer">
          <div class="relative z-20 bg-[#EEF5FC] border-2 border-[#4196F0] py-2 rounded-md">
            <p class="text-[#4196F0] text-lg font-medium text-center">ม.6</p>
          </div>
          <div class="absolute z-10 bg-[#EEF5FC] top-0 left-0 right-0 bottom-0 transform translate-y-1.5 rounded-md border-[#4196F0] border-2">
          </div>
        </button>
        <button type="button" wire:click="$set('formData.3.education_level', 'ปวช.')" class="relative flex-1 hover:cursor-pointer">
          <div class="relative z-20 bg-[#EEF5FC] border-2 border-[#4196F0] py-2 rounded-md">
            <p class="text-[#4196F0] text-lg font-medium text-center">ปวช.</p>
          </div>
          <div class="absolute z-10 bg-[#EEF5FC] top-0 left-0 right-0 bottom-0 transform translate-y-1.5 rounded-md border-[#4196F0] border-2">
          </div>
        </button>
        <button type="button" wire:click="$set('formData.3.education_level', 'ปวส.')" class="relative flex-1 hover:cursor-pointer">
          <div class="relative z-20 bg-[#EEF5FC] border-2 border-[#4196F0] py-2 rounded-md">
            <p class="text-[#4196F0] text-lg font-medium text-center">ปวส.</p>
          </div>
          <div class="absolute z-10 bg-[#EEF5FC] top-0 left-0 right-0 bottom-0 transform translate-y-1.5 rounded-md border-[#4196F0] border-2">
          </div>
        </button>
      </div>

      <div class="mt-10 py-2 flex flex-col md:flex-row justify-between items-center">
        <h3 class="text-[#4D4D4D] font-medium w-full">
          โรงเรียน / สถานศึกษา
        </h3>
        <input type="text" name="school" class="w-full px-2 py-1.5 bg-[#EEF5FC] max-w-[30em] border border-[#4196F0] rounded-md outline-none" wire:model.lazy="formData.3.school" />
      </div>
      <div class="py-2 flex flex-col md:flex-row justify-between items-center">
        <h3 class="text-[#4D4D4D] font-medium w-full">แผนการเรียน / สาขา</h3>
        <input type="text" name="school" class="w-full px-2 py-1.5 bg-[#EEF5FC] max-w-[30em] border border-[#4196F0] rounded-md outline-none" wire:model.lazy="formData.3.program" />
      </div>
      <div class="w-full h-[1px] bg-[#ABBED1] my-2"></div>
      <h3 class="py-3 text-[#4D4D4D] font-medium">ใบ ปพ. 7</h3>
      <div class="relative bg-[#F5F7FA] w-full rounded-md">
        <input type="file" name="file" class="w-full min-h-[15em] block opacity-0 cursor-pointer" wire:model.lazy="formData.3.certificate7" />
        <!-- Blind เอาไว้ -->
        <div class="absolute flex flex-col items-center top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 pointer-events-none">
          <img src="https://www.svgrepo.com/show/5500/upload-file.svg" alt="file" class="w-6" />
          <!-- รูปไฟล์ลองแก้  -->
          <p class="mt-1 text-sm text-[#4196F0]">อัปโหลดไฟล์</p>
        </div>
      </div>
    </div>
    @elseif ($currentPage === 4)
    <div class="divide-y px-6">
      <div class="py-4">
        <div class="flex justify-between items-center ">
          <label for="disease" class="w-1/2">โรคประจำตัว</label>
          <div class="flex w-1/2 space-x-5 py-2">

            <button type="button" wire:click="$set('formData.4.congenital_disease.has', 'false')" class="relative flex-1 hover:cursor-pointer">
              <div class="relative z-20 bg-[#EEF5FC] border-2 border-[#4196F0] py-2 rounded-md">
                <p class="text-[#4196F0] text-lg font-medium text-center">ไม่มี</p>
              </div>
              <div class="absolute z-10 bg-[#EEF5FC] top-0 left-0 right-0 bottom-0 transform translate-y-1.5 rounded-md border-[#4196F0] border-2">
              </div>
            </button>
            <button type="button" wire:click="$set('formData.4.congenital_disease.has', 'true')" class="relative flex-1 hover:cursor-pointer">
              <div class="relative z-20 bg-[#EEF5FC] border-2 border-[#4196F0] py-2 rounded-md">
                <p class="text-[#4196F0] text-lg font-medium text-center">มี</p>
              </div>
              <div class="absolute z-10 bg-[#EEF5FC] top-0 left-0 right-0 bottom-0 transform translate-y-1.5 rounded-md border-[#4196F0] border-2">
              </div>
            </button>
          </div>
        </div>
        <div class="flex justify-between items-center py-2 mt-3">
          <label for="disease_details" class="w-1/2">รายละเอียดโรค</label>
          <div class="flex w-1/2 space-x-5">
            <input type="text" name="disease_details" class="w-full px-2 py-1.5 bg-[#EEF5FC] border border-[#4196F0] rounded-md outline-none" wire:model.lazy="formData.4.congenital_disease.detail" />
          </div>
        </div>
      </div>
      <div class="py-4">
        <div class="flex justify-between items-center ">
          <label for="disease" class="w-1/2">สิ่งที่แพ้ / อาหารที่แพ้</label>
          <div class="flex w-1/2 space-x-5 py-2">

            <button type="button" wire:click="$set('formData.4.allergic.has', 'false')" class="relative flex-1 hover:cursor-pointer">
              <div class="relative z-20 bg-[#EEF5FC] border-2 border-[#4196F0] py-2 rounded-md">
                <p class="text-[#4196F0] text-lg font-medium text-center">ไม่มี</p>
              </div>
              <div class="absolute z-10 bg-[#EEF5FC] top-0 left-0 right-0 bottom-0 transform translate-y-1.5 rounded-md border-[#4196F0] border-2">
              </div>
            </button>
            <button type="button" wire:click="$set('formData.4.allergic.has', 'true')" class="relative flex-1 hover:cursor-pointer">
              <div class="relative z-20 bg-[#EEF5FC] border-2 border-[#4196F0] py-2 rounded-md">
                <p class="text-[#4196F0] text-lg font-medium text-center">มี</p>
              </div>
              <div class="absolute z-10 bg-[#EEF5FC] top-0 left-0 right-0 bottom-0 transform translate-y-1.5 rounded-md border-[#4196F0] border-2">
              </div>
            </button>
          </div>
        </div>
        <div class="flex justify-between items-center py-2 mt-3">
          <label for="disease_details" class="w-1/2">สิ่งที่แพ้</label>
          <div class="flex w-1/2 space-x-5">
            <input type="text" name="disease_details" class="w-full px-2 py-1.5 bg-[#EEF5FC] border border-[#4196F0] rounded-md outline-none" wire:model.lazy="formData.4.allergic.detail" />
          </div>
        </div>
      </div>

      <div class="py-4">
        <div class="flex justify-between items-center py-2">
          <label for="disease_details" class="w-1/2">ไซส์เสื้อ</label>
          <div class="flex w-1/2 space-x-5">
            <input type="text" name="disease_details" class="w-full px-2 py-1.5 bg-[#EEF5FC] border border-[#4196F0] rounded-md outline-none" wire:model.lazy="formData.4.shirt_size" />
          </div>
        </div>
      </div>
    </div>
    @elseif ($currentPage === 5)
    <div class="divide-y px-6">
      <div class="py-4">
        <div class="flex justify-center items-start flex-col space-y-5 ">
          <label for="fname" class="text-[#4D4D4D] font-medium">กิจกรรมที่เข้าร่วมหรือผลงานที่เคยทำ หรือผลงานที่อยากนำเสนอ</label>
          <div class="w-full">
            <textarea id="fname" type="text" name="firstname" value="Jeremy" class="textarea-from-reg" rows="7" cols="100" wire:model.lazy="formData.5.question"></textarea>
          </div>
        </div>
      </div>
      <div class="py-4">
        <h1 class="text-[#0671E0] font-medium text-lg my-3">ข้อมูลติดต่อฉุกเฉินผู้ปกครอง (1 คน)</h1>
        <div class="flex justify-between items-center py-2">
          <label for="disease_details" class="w-1/2">ชื่อจริง</label>
          <div class="flex w-1/2 space-x-5">
            <input type="text" name="disease_details" class="w-full px-2 py-1.5 bg-[#EEF5FC] border border-[#4196F0] rounded-md outline-none" wire:model.lazy="formData.5.emergency_contact.name" />
          </div>
        </div>
        <div class="flex justify-between items-center py-2">
          <label for="disease_details" class="w-1/2">นามสกุล</label>
          <div class="flex w-1/2 space-x-5">
            <input type="text" name="disease_details" class="w-full px-2 py-1.5 bg-[#EEF5FC] border border-[#4196F0] rounded-md outline-none" wire:model.lazy="formData.5.emergency_contact.surname" />
          </div>
        </div>
        <div class="flex justify-between items-center py-2">
          <label for="disease_details" class="w-1/2">เบอร์โทรศัพท์</label>
          <div class="flex w-1/2 space-x-5">
            <input type="text" name="disease_details" class="w-full px-2 py-1.5 bg-[#EEF5FC] border border-[#4196F0] rounded-md outline-none" wire:model.lazy="formData.5.emergency_contact.phone" />
          </div>
        </div>
        <div class="flex justify-between items-center py-2">
          <label for="disease_details" class="w-1/2">ความเกี่ยวข้อง</label>
          <div class="flex w-1/2 space-x-5">
            <input type="text" name="disease_details" class="w-full px-2 py-1.5 bg-[#EEF5FC] border border-[#4196F0] rounded-md outline-none" wire:model.lazy="formData.5.emergency_contact.relationship" />
          </div>
        </div>

      </div>

    </div>

    @endif
  </form>
  <div class="flex items-center justify-between w-4/5 mx-auto py-10">
    @if ($currentPage == 1)
      <div></div>
    @else
      <button wire:click="previousPage" class="px-16 py-3 bg-blue-500 text-white rounded-md outline outline-offset-2 outline-2 hover:outline-blue-500 transition-all cursor-pointer">ย้อนกลับ</button>
    @endif

    @if ($currentPage == count($pages))
      <button type="submit" wire:click="save" class="cursor-pointer px-16 py-3 bg-blue-500 text-white rounded-md outline outline-offset-2 outline-2 outline-blue-500">ยืนยัน</button>
    @else
      <button wire:click="nextPage" class="px-16 py-3 bg-blue-500 text-white rounded-md outline outline-offset-2 outline-2 hover:outline-blue-500 outline-gray-200 cursor-pointer transition-all ease-in-out duration-200">ต่อไป</button>
    @endif
  </div>
</div>
