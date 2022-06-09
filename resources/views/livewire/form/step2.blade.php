<div
    class="h-screen bg-gradient-to-b from-black via-[#3d3d3d] to-black flex items-center flex-col"
  >
    <nav
      class="container mx-auto px-5 md:px-32 text-white flex py-8 justify-between items-center"
    >
      <h1 class="font-bold text-xl"><a href="index.html">ITCAMP18</a></h1>
      <ul class="flex space-x-3 items-center">
        <li class="text-xl">สวัสดี, Thanawat</li>
        <li class="text-lg p-5 underline">
          <a href="index.html">ออกจากระบบ</a>
        </li>
      </ul>
    </nav>
    <div class="h-1/5 px-5 md:px-60 w-full md:w-full text-white pb-10">
      <h1 class="text-center text-4xl my-6 font-bold">ข้อมูลส่วนตัว</h1>
      <div class="flex flex-col px-5 md:px-20 lg:px-60">
        <label for="name"
          >ที่อยู่ปัจจุบัน <span class="text-red-500">*</span></label
        >
        <!-- <input
          type="text"
          id="name"
          name="name"
          class="px-3 py-2 border border-white rounded-md bg-transparent outline-non focus:ring-4 focus:ring-white focus:ring-opacity-40"
        /> -->
        <textarea
          name="address"
          id="address"
          cols="10"
          rows="3"
          class="px-3 py-2 border border-white rounded-md bg-transparent outline-non focus:ring-4 focus:ring-white focus:ring-opacity-40"
        ></textarea>
        <span class="text-red-500 -translate-y-2 text-sm mt-3"
          >Invalid firstname format</span
        >
      </div>
      <div class="flex flex-col px-5 md:px-20 lg:px-60">
        <label for="name"
          >โรงเรียน / สถานศึกษา <span class="text-red-500">*</span></label
        >
        <input
          type="text"
          id="name"
          name="name"
          class="px-3 py-2 border border-white rounded-md bg-transparent outline-non focus:ring-4 focus:ring-white focus:ring-opacity-40"
        />
        <span class="text-red-500 -translate-y-2 text-sm mt-3"
          >Invalid lastname format</span
        >
      </div>
      <div class="flex px-5 md:px-20 lg:px-60 gap-3">
        <div class="w-1/2">
          <label for="name"
            >ระดับชั้น <span class="text-red-500">*</span></label
          >
          <input
            type="text"
            id="name"
            name="name"
            class="px-3 py-2 border border-white rounded-md bg-transparent w-full outline-non focus:ring-4 focus:ring-white focus:ring-opacity-40"
          />
          <span class="text-red-500 -translate-y-2 text-sm"
            >Invalid lastname format</span
          >
        </div>
        <div class="w-1/2">
          <label for="name"
            >แผนการเรียน / สาขา <span class="text-red-500">*</span></label
          >
          <input
            type="text"
            id="name"
            name="name"
            class="px-3 py-2 border border-white rounded-md bg-transparent w-full outline-non focus:ring-4 focus:ring-white focus:ring-opacity-40"
          />
          <span class="text-red-500 -translate-y-2 text-sm"
            >Invalid lastname format</span
          >
        </div>
      </div>
      <div
        class="flex px-5 md:px-20 lg:px-60 gap-3 mt-4 h-60 relative flex-col"
      >
        <label for="name">ใบ ปพ.7 <span class="text-red-500">*</span></label>
        <div
          class="relative bg-transparent w-full rounded-md border-dashed border-2 border-white"
        >
          <input
            type="file"
            name="file"
            class="w-full min-h-[15em] block opacity-0 cursor-pointer"
          />
          <!-- Blind เอาไว้ -->
          <div
            class="absolute flex flex-col items-center top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 pointer-events-none"
          >
            <img
              src="https://www.svgrepo.com/show/5500/upload-file.svg"
              alt="file"
              class="w-6"
            />
            <!-- รูปไฟล์ลองแก้  -->
            <p class="mt-1 text-sm text-white">อัปโหลดไฟล์</p>
          </div>
        </div>
      </div>
      <div
        class="w-full flex items-center mt-16 justify-between space-x-10 px-5 md:px-20 lg:px-60 rounded-md pb-10"
      >
        <a
          href="reg1.html"
          class="text-center p-4 mt-5 bg-[#FF5A44] w-full rounded-md font-bold ring-4 ring-[#FF5A44] ring-opacity-30"
        >
          ย้อนกลับ
        </a>
        <a
          href="reg3.html"
          class="text-center p-4 mt-5 bg-[#2FB02C] w-full rounded-md font-bold ring-4 ring-[#18FF22] ring-opacity-30"
        >
          บันทึกและไปต่อ
        </a>
      </div>
    </div>
  </div>
