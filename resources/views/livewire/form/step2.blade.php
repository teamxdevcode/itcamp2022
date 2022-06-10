<div class="h-1/5 px-5 md:px-60 w-full md:w-full text-white pb-10">
    <h1 class="text-center text-4xl my-6 font-bold">ข้อมูลเพิ่มเติม</h1>
    <div class="flex flex-col px-5 md:px-20 lg:px-60">
        <label for="name">โรคประจำตัว <span class="text-red-500">*</span></label>
        <div class="mt-2 flex flex-col">
            <label class="inline-flex items-center mt-3">
                <input type="radio" class="form-radio h-5 w-5 text-white" name="med" value="0" wire:model="regis.has_congenital_disease" /><span class="ml-3 text-white">ไม่มีโรคประจำตัว</span>
            </label>
            <label class="inline-flex items-center mt-2">
                <input type="radio" class="form-radio h-5 w-5 text-blue-600" name="med" value="1" wire:model="regis.has_congenital_disease" /><span class="ml-3 text-white">มีโรคประจำตัว</span>
                <input type="text" id="name" name="name" disabled wire:model="congenital_disease_detail" class="ml-3 focus:outline-none px-3 py-2 border-b border-white bg-transparent outline-non focus:border-none focus:ring-opacity-10" />
            </label>
        </div>
        @error('regis.has_congenital_disease')<span class="text-red-500 -translate-y-2 text-sm mt-3">{{$message}}</span>@enderror
    </div>
    <div class="flex flex-col px-5 md:px-20 lg:px-60">
        <label for="name">แพ้อาหาร <span class="text-red-500">*</span></label>
        <div class="mt-2 flex flex-col">
            <label class="inline-flex items-center mt-3">
                <input type="radio" class="form-radio h-5 w-5 text-white" name="food" value="0" wire:model="regis.has_food_allergic" /><span class="ml-3 text-white">ไม่แพ้</span>
            </label>
            <label class="inline-flex items-center mt-2">
                <input type="radio" class="form-radio h-5 w-5 text-blue-600" name="food" value="1" wire:model="regis.has_food_allergic" /><span class="ml-3 text-white">อาหารที่แพ้</span>
                <input type="text" id="name" name="name" disabled class="ml-3 focus:outline-none px-3 py-2 border-b border-white bg-transparent outline-non focus:border-none focus:ring-opacity-10" />
            </label>
        </div>
        @error('regis.has_food_allergic')<span class="text-red-500 -translate-y-2 text-sm mt-3">{{$message}}</span>@enderror
    </div>
    <div class="flex flex-col px-5 md:px-20 lg:px-60">
        <label for="name">แพ้ยา <span class="text-red-500">*</span></label>
        <div class="mt-2 flex flex-col">
            <label class="inline-flex items-center mt-3">
                <input type="radio" class="form-radio h-5 w-5 text-white" name="decease" value="0" wire:model="regis.has_drug_allergic" /><span class="ml-3 text-white">ไม่แพ้</span>
            </label>
            <label class="inline-flex items-center mt-2">
                <input type="radio" class="form-radio h-5 w-5 text-blue-600" name="decease" value="1" wire:model="regis.has_drug_allergic" /><span class="ml-3 text-white">แพ้ยา</span>
                <input type="text" id="name" name="name" disabled class="ml-3 focus:outline-none px-3 py-2 border-b border-white bg-transparent outline-non focus:border-none focus:ring-opacity-10" />
            </label>
        </div>
        @error('regis.has_drug_allergic')<span class="text-red-500 -translate-y-2 text-sm mt-3">{{$message}}</span>@enderror
    </div>
    <div class="flex flex-col px-5 md:px-20 lg:px-60 relative">
        <label for="name">ไซส์เสื้อ <span class="text-red-500">*</span></label>
        <select wire:model="regis.shirt_size" class="relative w-full my-2 h-10 pl-3 pr-6 py-2 text-base placeholder-gray-600 bg-transparent border rounded-md appearance-none focus:shadow-outline" placeholder="เลือกไซส์เสื้อ">
            <option value="" hidden selected>เลือกไซส์เสื้อ</option>
            @foreach ([['S',33,25],['M',36,27],['L',40,29],['XL',44,29.5],['XXL',48,30],['XXXL',52,32]] as $size)
            <option value="{{$size[0]}}">{{ "{$size[0]} (รอบอก $size[1] นิ้ว ความยาว $size[2] นิ้ว)" }}</option>
            @endforeach
        </select>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" class="absolute fill-white bottom-0 right-64 top-1/3 hidden md:block" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.96967 8.46967C4.26256 8.17678 4.73744 8.17678 5.03033 8.46967L12 15.4393L18.9697 8.46967C19.2626 8.17678 19.7374 8.17678 20.0303 8.46967C20.3232 8.76256 20.3232 9.23744 20.0303 9.53033L12.5303 17.0303C12.2374 17.3232 11.7626 17.3232 11.4697 17.0303L3.96967 9.53033C3.67678 9.23744 3.67678 8.76256 3.96967 8.46967Z" fill="white" />
        </svg>

        @error('regis.shirt_size')<span class="text-red-500 -translate-y-2 text-sm mt-3">{{$message}}</span>@enderror
    </div>
    <div class="flex flex-col px-5 md:px-20 lg:px-60">
        <div for="name">รู้จักค่าย ITCAMP 18 จากไหน
            <span class="text-red-500">*</span>
        </div>
        <div class="flex flex-row flex-1 gap-x-4">
            <div class="flex flex-row gap-x-2 items-center cursor-pointer p-1 select-none">
                <input type="checkbox" id="Facebook" name="vehicle1" value="Facebook" wire:model="known_from">
                <label for="Facebook">Facebook</label>
            </div>
        </div>
        <div class="flex flex-row flex-1 gap-x-4">
            <div class="flex flex-row gap-x-2 items-center cursor-pointer p-1 select-none">
                <input type="checkbox" id="Instagram" name="vehicle1" value="Instagram" wire:model="known_from">
                <label for="Instagram">Instagram</label>
            </div>
        </div>
        <div class="flex flex-row flex-1 gap-x-4">
            <div class="flex flex-row gap-x-2 items-center cursor-pointer p-1 select-none">
                <input type="checkbox" id="Twitter" name="vehicle1" value="Twitter" wire:model="known_from">
                <label for="Twitter">Twitter</label>
            </div>
        </div>
        <div class="flex flex-row flex-1 gap-x-4">
            <div class="flex flex-row gap-x-2 items-center cursor-pointer p-1 select-none">
                <input type="checkbox" id="friends" name="vehicle1" value="เพื่อน" wire:model="known_from">
                <label for="friends">เพื่อน</label>
            </div>
        </div>
        <div class="flex flex-row flex-1 gap-x-4">
            <div class="flex flex-row gap-x-2 items-center cursor-pointer p-1 select-none">
                <input type="checkbox" id="school" name="vehicle1" value="สถานศึกษา" wire:model="known_from">
                <label for="school">สถานศึกษา</label>
            </div>
        </div>
        <div class="flex flex-row flex-1 gap-x-4">
            <div class="flex flex-row gap-x-2 items-center cursor-pointer p-1 select-none">
                <input type="checkbox" id="others" name="vehicle1" value="อื่น ๆ" wire:model="known_from">
                <label for="others">อื่น ๆ</label>
            </div>
        </div>

        <!-- <input
      type="text"
      id="name"
      name="name"
      class="px-3 py-2 border border-white rounded-md bg-transparent outline-non focus:ring-4 focus:ring-white focus:ring-opacity-40"
    /> -->

        @error('regis.known_from')<span class="text-red-500 -translate-y-2 text-sm mt-3">{{$message}}</span>@enderror
    </div>
    <div class="flex flex-col px-5 md:px-20 lg:px-60">
        <label for="name">กิจกรรมที่เข้าร่วม ผลงานที่เคยทำ หรือผลงานที่อยากนำเสนอ
            <span class="text-red-500">*</span></label>
        <!-- <input
        type="text"
        id="name"
        name="name"
        class="px-3 py-2 border border-white rounded-md bg-transparent outline-non focus:ring-4 focus:ring-white focus:ring-opacity-40"
      /> -->
        <textarea name="experience" id="exp" cols="10" rows="3" wire:model="regis.activities_detail" class="px-3 py-2 border border-white rounded-md bg-transparent outline-non focus:ring-4 focus:ring-white focus:ring-opacity-40"></textarea>
        @error('regis.activities_detail')<span class="text-red-500 -translate-y-2 text-sm mt-3">{{$message}}</span>@enderror
    </div>
    <h1 class="text-center text-4xl my-6 font-bold">
        ข้อมูลติดต่อฉุกเฉินผู้ปกครอง (1 คน)
    </h1>
    <div class="flex flex-col px-5 md:px-20 lg:px-60">
        <label for="name">ชื่อจริง <span class="text-red-500">*</span></label>
        <input type="text" id="name" name="name" wire:model="regis.emergency_contact_name" class="px-3 py-2 border border-white rounded-md bg-transparent outline-non focus:ring-4 focus:ring-white focus:ring-opacity-40" />
        @error('regis.emergency_contact_name')<span class="text-red-500 -translate-y-2 text-sm mt-3">{{$message}}</span>@enderror
    </div>
    <div class="flex flex-col px-5 md:px-20 lg:px-60">
        <label for="name">นามสกุล <span class="text-red-500">*</span></label>
        <input type="text" id="name" name="name" wire:model="regis.emergency_contact_surname" class="px-3 py-2 border border-white rounded-md bg-transparent outline-non focus:ring-4 focus:ring-white focus:ring-opacity-40" />
        @error('regis.emergency_contact_surname')<span class="text-red-500 -translate-y-2 text-sm mt-3">{{$message}}</span>@enderror
    </div>
    <div class="flex px-5 md:px-20 lg:px-60 gap-3">
        <div class="w-1/2">
            <label for="name">เบอร์โทรศัพท์ <span class="text-red-500">*</span></label>
            <input type="tel" id="tel" name="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" wire:model="regis.emergency_contact_phone" class="px-3 py-2 border border-white rounded-md bg-transparent w-full outline-non focus:ring-4 focus:ring-white focus:ring-opacity-40" />
            @error('regis.emergency_contact_phone')<span class="text-red-500 -translate-y-2 text-sm mt-3">{{$message}}</span>@enderror
        </div>
        <div class="w-1/2">
            <label for="name">ความเกี่ยวข้อง <span class="text-red-500">*</span></label>
            <input type="text" id="name" name="name" wire:model="regis.emergency_contact_relationship" class="px-3 py-2 border border-white rounded-md bg-transparent w-full outline-non focus:ring-4 focus:ring-white focus:ring-opacity-40" />
            @error('regis.emergency_contact_relationship')<span class="text-red-500 -translate-y-2 text-sm mt-3">{{$message}}</span>@enderror
        </div>
    </div>


    <h1 class="text-center text-4xl my-6 mt-[100px] font-bold">
        เลือกสาขา
    </h1>


    <img src="https://media.discordapp.net/attachments/964882961797349438/984724891708317716/unknown.png" alt="" srcset="">

    <div class="flex flex-col md:flex-row px-5 md:px-20 lg:px-60 mt-5">
        <div class="md:w-1/2">
            <input type="radio" class="" />
            <label for="name">สาขา Content</label>
        </div>

        <div class="md:w-1/2">
            <input type="radio" class="" />
            <label for="name">สาขา Design</label>
        </div>

        <div class="md:w-1/2">
            <input type="radio" class="" />
            <label for="name">สาขา Marketing</label>
        </div>

        <div class="md:w-1/2">
            <input type="radio" class="" />
            <label for="name">สาขา Programming</label>
        </div>
    </div>

    <div class="w-full flex items-center mt-16 justify-between space-x-10 px-5 md:px-20 lg:px-60 rounded-md pb-10">
        <a href="reg1.html" class="text-center p-4 mt-5 bg-[#FF5A44] w-full rounded-md font-bold ring-4 ring-[#FF5A44] ring-opacity-30">
            ย้อนกลับ
        </a>
        <button type="button" wire:click="save" class="text-center p-4 mt-5 bg-[#2FB02C] w-full rounded-md font-bold ring-4 ring-[#18FF22] ring-opacity-30">
            บันทึกและไปต่อ
        </button>
    </div>
</div>