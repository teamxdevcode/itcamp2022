<div class="h-1/5 px-5 md:px-20 xl:px-60 w-full md:w-full text-white pb-10">
    @php
    $type = 4
    @endphp

    @switch($type)
    @case(1)
    @include("sub-camp.web")
    @break

    @case(2)
    @include("sub-camp.data")
    @break

    @case(3)
    @include("sub-camp.network")
    @break

    @case(4)
    @include("sub-camp.game")
    @break

    @default
    @endswitch

    <div class="w-full flex items-center mt-16 justify-between space-x-10 px-5 md:px-20 lg:px-60 rounded-md pb-10">
        <a href="reg1.html" class="text-center p-4 mt-5 bg-[#FF5A44] w-full rounded-md font-bold ring-4 ring-[#FF5A44] ring-opacity-30">
            ย้อนกลับ
        </a>
        <a href="reg3.html" class="text-center p-4 mt-5 bg-[#2FB02C] w-full rounded-md font-bold ring-4 ring-[#18FF22] ring-opacity-30">
            บันทึกและไปต่อ
        </a>
    </div>
</div>