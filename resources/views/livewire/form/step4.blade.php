<div class="h-1/5 px-5 md:px-20 xl:px-60 w-full md:w-full text-white pb-10">
    @switch($type)
        @case('data')
            <h1 class="text-center text-4xl my-6 font-bold">
                คำถามค่าย WEB
            </h1>

            <div class="flex flex-col px-5 md:px-20 lg:px-60">
                <label for="name">1. UX / UI มีความแตกต่างกันอย่างไร ยกตัวอย่างของ UX ที่ดีและ UI ที่ดีของ Website มาอย่างละ 2
                    ข้อ ?<span class="text-red-500">*</span></label>
                <textarea name="address" id="address" cols="10" rows="3"
                    class="px-3 py-2 border border-white rounded-md bg-transparent outline-non focus:ring-4 focus:ring-white focus:ring-opacity-40"></textarea>
                <span class="text-red-500 -translate-y-2 text-sm mt-3">Invalid firstname format</span>
            </div>

            <div class="flex flex-col px-5 md:px-20 lg:px-60">
                <label for="name">2. ถ้าหากให้พัฒนาเว็บไซต์ขึ้นมา 1 เว็บไซต์ที่เกี่ยวกับนโยบายของผู้ว่ากทม ฯ คนปัจจุบัน
                    จะพัฒนาเว็บไซต์สำหรับนโยบายข้อไหน เพราะเหตุใด ?<span class="text-red-500">*</span></label>
                <textarea name="address" id="address" cols="10" rows="3"
                    class="px-3 py-2 border border-white rounded-md bg-transparent outline-non focus:ring-4 focus:ring-white focus:ring-opacity-40"></textarea>
                <span class="text-red-500 -translate-y-2 text-sm mt-3">Invalid firstname format</span>
            </div>

            <div class="flex flex-col px-5 md:px-20 lg:px-60">
                <label for="name">3. เคยมีประสบการณ์การเขียนเว็บไซต์อย่างไรบ้าง ชอบ Framework หรือ Libraries ตัวใดเป็นพิเศษ
                    เพราะเหตุใด จงอธิบายโดยสังเขป ?<span class="text-red-500">*</span></label>
                <textarea name="address" id="address" cols="10" rows="3"
                    class="px-3 py-2 border border-white rounded-md bg-transparent outline-non focus:ring-4 focus:ring-white focus:ring-opacity-40"></textarea>
                <span class="text-red-500 -translate-y-2 text-sm mt-3">Invalid firstname format</span>
            </div>

            <div class="flex flex-col px-5 md:px-20 lg:px-60">
                <label for="name">4. จงเขียน flowchart การทำงานของ code นี้ รวมถึงผลลัพธ์ที่จะแสดงออกมา โดยสามารถเขียนลงใน
                    lucidchart และ
                    แนบ link มาได้ ? <span class="text-red-500">*</span></label>
                <textarea name="address" id="address" cols="10" rows="3"
                    class="px-3 py-2 border border-white rounded-md bg-transparent outline-non focus:ring-4 focus:ring-white focus:ring-opacity-40"></textarea>
                <span class="text-red-500 -translate-y-2 text-sm mt-3">Invalid firstname format</span>
            </div>

            <div class="flex flex-col px-5 md:px-20 lg:px-60">
                <label for="name">5. จงเขียน function getSum ที่จะรับ array [‘h3llo’, ‘w0rld’, ‘th1s’, ‘is’, ‘w3bt0pi4’]
                    เข้ามาและ return ผลรวมของตัวเลขทั้งหมดที่แทรกอยู่ภายในคำแต่ละคำ จงนำคำตอบในข้อข้างบนมาต่อท้ายคำว่า Webtopia
                    โดยใช้คำสั่งใน javascript ?<span class="text-red-500">*</span></label>
                <textarea name="address" id="address" cols="10" rows="3"
                    class="px-3 py-2 border border-white rounded-md bg-transparent outline-non focus:ring-4 focus:ring-white focus:ring-opacity-40"></textarea>
                <span class="text-red-500 -translate-y-2 text-sm mt-3">Invalid firstname format</span>
            </div>
        @break

        @case(2)
        @break

        @default
    @endswitch

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
