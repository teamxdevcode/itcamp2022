<div class="h-1/5 px-5 md:px-20 xl:px-60 w-full md:w-full text-white pb-10">
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
    <p class="px-5 md:px-20 lg:px-60 my-5">{{ 'Recapchar here' }}</p>
    <div class="w-full flex items-center justify-between space-x-10 px-5 md:px-20 lg:px-60 rounded-md pb-10">
        <a href="reg3.html"
            class="text-center p-4 mt-5 bg-[#FF5A44] w-full rounded-md font-bold ring-4 ring-[#FF5A44] ring-opacity-30">
            ย้อนกลับ
        </a>
        <a href="menu.html"
            class="text-center p-4 mt-5 bg-[#2FB02C] w-full rounded-md font-bold ring-4 ring-[#18FF22] ring-opacity-30">
            บันทึกและไปต่อ
        </a>
    </div>
</div>
