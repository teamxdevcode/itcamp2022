<div class="h-1/5 px-5 md:px-60 w-full md:w-full text-white pb-10">
    <h1 class="text-center text-4xl my-6 font-bold">ข้อมูลเพิ่มเติม</h1>
    <div class="flex flex-col px-5 md:px-20 lg:px-60">
        <label for="name">โรคประจำตัว <span class="text-red-500">*</span></label>
        <div class="mt-2 flex flex-col">
            <label class="inline-flex items-center mt-3">
                <input type="radio" class="form-radio h-5 w-5 text-white" name="med" checked /><span
                    class="ml-3 text-white">ไม่มีโรคประจำตัว</span>
            </label>
            <label class="inline-flex items-center mt-2">
                <input type="radio" class="form-radio h-5 w-5 text-blue-600" name="med" /><span
                    class="ml-3 text-white">มีโรคประจำตัว</span>
                <input type="text" id="name" name="name" disabled
                    class="ml-3 focus:outline-none px-3 py-2 border-b border-white bg-transparent outline-non focus:border-none focus:ring-opacity-10" />
            </label>
        </div>
        <span class="text-red-500 -translate-y-2 text-sm mt-5">Invalid firstname format</span>
    </div>
    <div class="flex flex-col px-5 md:px-20 lg:px-60">
        <label for="name">แพ้อาหาร <span class="text-red-500">*</span></label>
        <div class="mt-2 flex flex-col">
            <label class="inline-flex items-center mt-3">
                <input type="radio" class="form-radio h-5 w-5 text-white" name="food" checked /><span
                    class="ml-3 text-white">ไม่แพ้</span>
            </label>
            <label class="inline-flex items-center mt-2">
                <input type="radio" class="form-radio h-5 w-5 text-blue-600" name="food" /><span
                    class="ml-3 text-white">อาหารที่แพ้</span>
                <input type="text" id="name" name="name" disabled
                    class="ml-3 focus:outline-none px-3 py-2 border-b border-white bg-transparent outline-non focus:border-none focus:ring-opacity-10" />
            </label>
        </div>
        <span class="text-red-500 -translate-y-2 text-sm mt-5">Invalid firstname format</span>
    </div>
    <div class="flex flex-col px-5 md:px-20 lg:px-60">
        <label for="name">แพ้ยา <span class="text-red-500">*</span></label>
        <div class="mt-2 flex flex-col">
            <label class="inline-flex items-center mt-3">
                <input type="radio" class="form-radio h-5 w-5 text-white" name="decease" checked /><span
                    class="ml-3 text-white">ไม่แพ้</span>
            </label>
            <label class="inline-flex items-center mt-2">
                <input type="radio" class="form-radio h-5 w-5 text-blue-600" name="decease" /><span
                    class="ml-3 text-white">แพ้ยา</span>
                <input type="text" id="name" name="name" disabled
                    class="ml-3 focus:outline-none px-3 py-2 border-b border-white bg-transparent outline-non focus:border-none focus:ring-opacity-10" />
            </label>
        </div>
        <span class="text-red-500 -translate-y-2 text-sm mt-5">Invalid firstname format</span>
    </div>
    <div class="flex flex-col px-5 md:px-20 lg:px-60 relative">
        <label for="name">ไซส์เสื้อ <span class="text-red-500">*</span></label>
        <select
            class="relative w-full my-2 h-10 pl-3 pr-6 py-2 text-base placeholder-gray-600 bg-transparent border rounded-md appearance-none focus:shadow-outline"
            placeholder="เลือกไซส์เสื้อ">
            <option value="" disabled selected>เลือกไซส์เสื้อ</option>
            <option>S (รอบอก 33 นิ้ว ความยาว 25 นิ้ว)</option>
            <option>M (รอบอก 36 นิ้ว ความยาว 27 นิ้ว)</option>
            <option>L (รอบอก 40 นิ้ว ความยาว 29 นิ้ว)</option>
            <option>XL (รอบอก 44 นิ้ว ความยาว 29.5 นิ้ว)</option>
            <option>XXL (รอบอก 48 นิ้ว ความยาว 30 นิ้ว)</option>
            <option>XXXL (รอบอก 52 นิ้ว ความยาว 32 นิ้ว)</option>
        </select>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
            class="absolute fill-white bottom-0 right-64 top-1/3 hidden md:block" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M3.96967 8.46967C4.26256 8.17678 4.73744 8.17678 5.03033 8.46967L12 15.4393L18.9697 8.46967C19.2626 8.17678 19.7374 8.17678 20.0303 8.46967C20.3232 8.76256 20.3232 9.23744 20.0303 9.53033L12.5303 17.0303C12.2374 17.3232 11.7626 17.3232 11.4697 17.0303L3.96967 9.53033C3.67678 9.23744 3.67678 8.76256 3.96967 8.46967Z"
                fill="white" />
        </svg>

        <span class="text-red-500 -translate-y-2 text-sm mt-3">Invalid lastname format</span>
    </div>
    <div class="flex flex-col px-5 md:px-20 lg:px-60">
        <div for="name">รู้จักค่าย ITCAMP 18 จากไหน
            <span class="text-red-500">*</span>
        </div>
        <div class="flex flex-row flex-1 gap-x-4">
            <div class="flex flex-row gap-x-2 items-center cursor-pointer p-1 select-none">
                <input type="checkbox" id="vehicle1" name="vehicle1" value="Facebook">
                <label for="vehicle1">Facebook</label>
            </div>
        </div>
        <div class="flex flex-row flex-1 gap-x-4">
            <div class="flex flex-row gap-x-2 items-center cursor-pointer p-1 select-none">
                <input type="checkbox" id="vehicle1" name="vehicle1" value="Instagram">
                <label for="vehicle1">Instagram</label>
            </div>
        </div>
        <div class="flex flex-row flex-1 gap-x-4">
            <div class="flex flex-row gap-x-2 items-center cursor-pointer p-1 select-none">
                <input type="checkbox" id="vehicle1" name="vehicle1" value="Twitter">
                <label for="vehicle1">Twitter</label>
            </div>
        </div>
        <div class="flex flex-row flex-1 gap-x-4">
            <div class="flex flex-row gap-x-2 items-center cursor-pointer p-1 select-none">
                <input type="checkbox" id="vehicle1" name="vehicle1" value="เพื่อน">
                <label for="vehicle1">เพื่อน</label>
            </div>
        </div>
        <div class="flex flex-row flex-1 gap-x-4">
            <div class="flex flex-row gap-x-2 items-center cursor-pointer p-1 select-none">
                <input type="checkbox" id="vehicle1" name="vehicle1" value="สถานศึกษา">
                <label for="vehicle1">สถานศึกษา</label>
            </div>
        </div>
        <div class="flex flex-row flex-1 gap-x-4">
            <div class="flex flex-row gap-x-2 items-center cursor-pointer p-1 select-none">
                <input type="checkbox" id="vehicle1" name="vehicle1" value="อื่น ๆ">
                <label for="vehicle1">อื่น ๆ</label>
            </div>
        </div>

        <!-- <input
      type="text"
      id="name"
      name="name"
      class="px-3 py-2 border border-white rounded-md bg-transparent outline-non focus:ring-4 focus:ring-white focus:ring-opacity-40"
    /> -->

        <span class="text-red-500 -translate-y-2 text-sm mt-3">Invalid firstname format</span>
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
        <textarea name="experience" id="exp" cols="10" rows="3"
            class="px-3 py-2 border border-white rounded-md bg-transparent outline-non focus:ring-4 focus:ring-white focus:ring-opacity-40"></textarea>
        <span class="text-red-500 -translate-y-2 text-sm mt-3">Invalid firstname format</span>
    </div>
    <h1 class="text-center text-4xl my-6 font-bold">
        ข้อมูลติดต่อฉุกเฉินผู้ปกครอง (1 คน)
    </h1>
    <div class="flex flex-col px-5 md:px-20 lg:px-60">
        <label for="name">ชื่อจริง <span class="text-red-500">*</span></label>
        <input type="text" id="name" name="name"
            class="px-3 py-2 border border-white rounded-md bg-transparent outline-non focus:ring-4 focus:ring-white focus:ring-opacity-40" />
        <span class="text-red-500 -translate-y-2 text-sm mt-3">Invalid firstname format</span>
    </div>
    <div class="flex flex-col px-5 md:px-20 lg:px-60">
        <label for="name">นามสกุล <span class="text-red-500">*</span></label>
        <input type="text" id="name" name="name"
            class="px-3 py-2 border border-white rounded-md bg-transparent outline-non focus:ring-4 focus:ring-white focus:ring-opacity-40" />
        <span class="text-red-500 -translate-y-2 text-sm mt-3">Invalid lastname format</span>
    </div>
    <div class="flex px-5 md:px-20 lg:px-60 gap-3">
        <div class="w-1/2">
            <label for="name">เบอร์โทรศัพท์ <span class="text-red-500">*</span></label>
            <input type="tel" id="tel" name="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                class="px-3 py-2 border border-white rounded-md bg-transparent w-full outline-non focus:ring-4 focus:ring-white focus:ring-opacity-40" />
            <span class="text-red-500 -translate-y-2 text-sm">Invalid lastname format</span>
        </div>
        <div class="w-1/2">
            <label for="name">ความเกี่ยวข้อง <span class="text-red-500">*</span></label>
            <input type="text" id="name" name="name"
                class="px-3 py-2 border border-white rounded-md bg-transparent w-full outline-non focus:ring-4 focus:ring-white focus:ring-opacity-40" />
            <span class="text-red-500 -translate-y-2 text-sm">Invalid lastname format</span>
        </div>
    </div>
    <div class="w-full flex items-center mt-16 justify-between space-x-10 px-5 md:px-20 lg:px-60 rounded-md pb-10">
        <a href="reg1.html"
            class="text-center p-4 mt-5 bg-[#FF5A44] w-full rounded-md font-bold ring-4 ring-[#FF5A44] ring-opacity-30">
            ย้อนกลับ
        </a>
        <a href="reg3.html"
            class="text-center p-4 mt-5 bg-[#2FB02C] w-full rounded-md font-bold ring-4 ring-[#18FF22] ring-opacity-30">
            บันทึกและไปต่อ
        </a>
    </div>
</div>
