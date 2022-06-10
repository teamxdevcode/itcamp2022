<div class="h-1/5 px-5 md:px-20 xl:px-60 w-full md:w-full text-white pb-10">
    <h1 class="text-center text-4xl my-6 font-bold">ข้อมูลส่วนตัว</h1>
    <div class="flex flex-col px-5 md:px-20 lg:px-60">
        <label for="name">ชื่อจริง <span class="text-red-500">*</span></label>
        <input type="text" id="name" name="name" wire:model="regis.name"
            class="px-3 py-2 border border-white rounded-md bg-transparent outline-non focus:ring-4 focus:ring-white focus:ring-opacity-40"/>
            @error('regis.name')<span class="text-red-500 -translate-y-2 text-sm mt-3">{{$message}}</span>@enderror
    </div>
    <div class="flex flex-col px-5 md:px-20 lg:px-60">
        <label for="name">นามสกุล <span class="text-red-500">*</span></label>
        <input type="text" id="name" name="name" wire:model="regis.surname"
            class="px-3 py-2 border border-white rounded-md bg-transparent outline-non focus:ring-4 focus:ring-white focus:ring-opacity-40" />
        @error('regis.surname')<span class="text-red-500 -translate-y-2 text-sm mt-3">{{$message}}</span>@enderror
    </div>
    <div class="flex px-5 md:px-20 lg:px-60 gap-3">
        <div class="w-1/2">
            <label for="name">ชื่อเล่น <span class="text-red-500">*</span></label>
            <input type="text" id="name" name="name" wire:model="regis.nickname"
                class="px-3 py-2 border border-white rounded-md bg-transparent w-full outline-non focus:ring-4 focus:ring-white focus:ring-opacity-40" />
                @error('regis.nickname')<span class="text-red-500 -translate-y-2 text-sm mt-3">{{$message}}</span>@enderror
        </div>
        <div class="w-1/2">
            <label for="name">เพศ <span class="text-red-500">*</span></label>
            <input type="text" id="name" name="name" wire:model="regis.gender"
                class="px-3 py-2 border border-white rounded-md bg-transparent w-full outline-non focus:ring-4 focus:ring-white focus:ring-opacity-40" />
                @error('regis.gender')<span class="text-red-500 -translate-y-2 text-sm mt-3">{{$message}}</span>@enderror
        </div>
    </div>
    <div class="flex px-5 md:px-20 lg:px-60 gap-3 mt-1">
        <div class="w-1/2">
            <label for="name">วันเกิด <span class="text-red-500">*</span></label>
            <input type="date" id="name" name="name" wire:model="regis.birth"
                class="px-3 py-2 border border-white rounded-md bg-transparent w-full outline-non focus:ring-4 focus:ring-white focus:ring-opacity-40" />
                @error('regis.birth')<span class="text-red-500 -translate-y-2 text-sm mt-3">{{$message}}</span>@enderror
        </div>
        <div class="w-1/2">
            <label for="name">กรุ๊ปเลือด <span class="text-red-500">*</span></label>
            <select
              wire:model="regis.blood_type"
                class="relative w-full h-10 pl-3 pr-6 py-2 text-base placeholder-gray-600 bg-transparent border rounded-md appearance-none focus:shadow-outline"
                placeholder="เลือกกรุ๊ปเลือด">
                <option value="" hidden selected class="text-gray-300">
                    เลือกกรุ๊ปเลือด
                </option>
                @foreach (['A','B','AB','O'] as $type)
                  <option value="{{$type}}" @selected($regis->blood_type === $type)>{{$type}}</option>
                @endforeach
            </select>
            @error('regis.blood_type')<span class="text-red-500 -translate-y-2 text-sm mt-3">{{$message}}</span>@enderror
        </div>
    </div>
    <div class="flex px-5 md:px-20 lg:px-60 gap-3 mt-1">
        <div class="w-1/2">
            <label for="name">เบอร์โทรศัพท์ <span class="text-red-500">*</span></label>
            <input type="text" id="name" name="name" wire:model="regis.phone"
                class="px-3 py-2 border border-white rounded-md bg-transparent w-full outline-non focus:ring-4 focus:ring-white focus:ring-opacity-40" />
            @error('regis.phone')<span class="text-red-500 -translate-y-2 text-sm mt-3">{{$message}}</span>@enderror
        </div>
        <div class="w-1/2">
            <label for="name">ศาสนา <span class="text-red-500">*</span></label>
            <input type="text" id="name" name="name" wire:model="regis.religion"
                class="px-3 py-2 border border-white rounded-md bg-transparent w-full outline-non focus:ring-4 focus:ring-white focus:ring-opacity-40" />
                @error('regis.religion')<span class="text-red-500 -translate-y-2 text-sm mt-3">{{$message}}</span>@enderror
        </div>
    </div>
    <div class="flex flex-col px-5 md:px-20 lg:px-60 mt-1">
        <label for="name">อีเมล <span class="text-red-500">*</span></label>
        <input type="text" id="name" name="name" wire:model="regis.email"
            class="px-3 py-2 border border-white rounded-md bg-transparent outline-non focus:ring-4 focus:ring-white focus:ring-opacity-40" />
            @error('regis.email')<span class="text-red-500 -translate-y-2 text-sm mt-3">{{$message}}</span>@enderror
    </div>
    <div class="flex flex-col px-5 md:px-20 lg:px-60">
        <label for="name">ที่อยู่ปัจจุบัน <span class="text-red-500">*</span></label>
        <!-- <input
        type="text"
        id="name"
        name="name"
        class="px-3 py-2 border border-white rounded-md bg-transparent outline-non focus:ring-4 focus:ring-white focus:ring-opacity-40"
      /> -->
        <textarea name="address" id="address" cols="10" rows="3" wire:model="regis.address"
            class="px-3 py-2 border border-white rounded-md bg-transparent outline-non focus:ring-4 focus:ring-white focus:ring-opacity-40"></textarea>
            @error('regis.address')<span class="text-red-500 -translate-y-2 text-sm mt-3">{{$message}}</span>@enderror
    </div>
    <div class="flex flex-col px-5 md:px-20 lg:px-60">
        <label for="name">โรงเรียน / สถานศึกษา <span class="text-red-500">*</span></label>
        <input type="text" id="name" name="name" wire:model="regis.school"
            class="px-3 py-2 border border-white rounded-md bg-transparent outline-non focus:ring-4 focus:ring-white focus:ring-opacity-40" />
            @error('regis.school')<span class="text-red-500 -translate-y-2 text-sm mt-3">{{$message}}</span>@enderror
    </div>
    <div class="flex px-5 md:px-20 lg:px-60 gap-3">
        <div class="w-1/2">
            <label for="name">ระดับชั้น <span class="text-red-500">*</span></label>
            <input type="text" id="name" name="name" wire:model="regis.education_level"
                class="px-3 py-2 border border-white rounded-md bg-transparent w-full outline-non focus:ring-4 focus:ring-white focus:ring-opacity-40" />
                @error('regis.education_level')<span class="text-red-500 -translate-y-2 text-sm mt-3">{{$message}}</span>@enderror
        </div>
        <div class="w-1/2">
            <label for="name">แผนการเรียน / สาขา <span class="text-red-500">*</span></label>
            <input type="text" id="name" name="name" wire:model="regis.education_program"
                class="px-3 py-2 border border-white rounded-md bg-transparent w-full outline-non focus:ring-4 focus:ring-white focus:ring-opacity-40" />
                @error('regis.education_program')<span class="text-red-500 -translate-y-2 text-sm mt-3">{{$message}}</span>@enderror
        </div>
    </div>
    <div class="flex px-5 md:px-20 lg:px-60 gap-3 mt-4 h-60 relative flex-col">
        <label for="name">ใบ ปพ.7 <span class="text-red-500">*</span></label>
        <div class="relative bg-transparent w-full rounded-md border-dashed border-2 border-white">
            <input type="file" name="file" class="w-full min-h-[15em] block opacity-0 cursor-pointer" wire:model="regis.education_certificate"/>
            <!-- Blind เอาไว้ -->
            <div
                class="absolute flex flex-col items-center top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 pointer-events-none">
                <img src="https://www.svgrepo.com/show/5500/upload-file.svg" alt="file" class="w-6" />
                <!-- รูปไฟล์ลองแก้  -->
                <p class="mt-1 text-sm text-white">อัปโหลดไฟล์</p>
            </div>
        </div>
        @error('regis.education_certificate')<span class="text-red-500 -translate-y-2 text-sm mt-3">{{$message}}</span>@enderror
    </div>
    <div class="w-full flex items-center mt-16 justify-between space-x-10 px-5 md:px-20 lg:px-60 rounded-md pb-10">
        <button href="reg2.html" wire:click="save"
            class="text-center p-4 mt-5 bg-[#2FB02C] w-full rounded-md font-bold ring-4 ring-[#18FF22] ring-opacity-30">
            บันทึกและไปต่อ
    </button>
    </div>
</div>
