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
<div class="h-1/5 px-5 md:px-20 xl:px-60 w-full md:w-full text-white pb-10">
  <h1 class="text-center text-4xl my-6 font-bold">ข้อมูลส่วนตัว</h1>
  <div class="flex flex-col px-5 md:px-20 lg:px-60">
    <label for="name">ชื่อจริง <span class="text-red-500">*</span></label>
    <input
      type="text"
      id="name"
      name="name"
      class="px-3 py-2 border border-white rounded-md bg-transparent outline-non focus:ring-4 focus:ring-white focus:ring-opacity-40"
    />
    <span class="text-red-500 -translate-y-2 text-sm mt-3"
      >Invalid firstname format</span
    >
  </div>
  <div class="flex flex-col px-5 md:px-20 lg:px-60">
    <label for="name">นามสกุล <span class="text-red-500">*</span></label>
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
      <label for="name">ชื่อเล่น <span class="text-red-500">*</span></label>
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
      <label for="name">เพศ <span class="text-red-500">*</span></label>
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
  <div class="flex px-5 md:px-20 lg:px-60 gap-3 mt-1">
    <div class="w-1/2">
      <label for="name">วันเกิด <span class="text-red-500">*</span></label>
      <input
        type="date"
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
        >กรุ๊ปเลือด <span class="text-red-500">*</span></label
      >
      <select
        class="relative w-full h-10 pl-3 pr-6 py-2 text-base placeholder-gray-600 bg-transparent border rounded-md appearance-none focus:shadow-outline"
        placeholder="เลือกกรุ๊ปเลือด"
      >
        <option value="" disabled selected class="text-gray-300">
          เลือกกรุ๊ปเลือด
        </option>
        <option>A</option>
        <option>B</option>
        <option>AB</option>
        <option>O</option>
      </select>
      <span class="text-red-500 -translate-y-2 text-sm"
        >Invalid lastname format</span
      >
    </div>
  </div>
  <div class="flex px-5 md:px-20 lg:px-60 gap-3 mt-1">
    <div class="w-1/2">
      <label for="name"
        >เบอร์โทรศัพท์ <span class="text-red-500">*</span></label
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
      <label for="name">ศาสนา <span class="text-red-500">*</span></label>
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
  <div class="flex flex-col px-5 md:px-20 lg:px-60 mt-1">
    <label for="name">อีเมล <span class="text-red-500">*</span></label>
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
  <div
    class="w-full flex items-center justify-center px-5 md:px-20 lg:px-60 rounded-md pb-10"
  >
    <a
      href="reg2.html"
      class="text-center p-4 mt-5 bg-[#2FB02C] w-full rounded-md font-bold ring-4 ring-[#18FF22] ring-opacity-30"
    >
      บันทึกและไปต่อ
    </a>
  </div>
</div>
</div>
