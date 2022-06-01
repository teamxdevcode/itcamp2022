<!-- <div class="w-full flex items-center justify-center flex-col space-y-6">
	<h1 class="text-blue-500 font-bold text-3xl underline underline-offset-8">ลงทะเบียนเข้าค่าย</h1>
	<form action="" class=" bg-white w-3/5">
		<div class="py-5 px-8 flex justify-between items-center rounded-t-md border border-gray-300 shadow-md">
			<ul class="flex space-x-5">
				<li class="px-4 py-2 rounded-md outline outline-offset-2 outline-2 outline-blue-500 bg-blue-500 text-white text-xl">1</li>
				<li class="px-4 py-2 rounded-md border border-blue-500 bg-blue-200 text-white text-xl">2</li>
			</ul>
			<span class="text-xl font-semibold text-blue-500">{{$pages[$currentPage]['heading']}}</span>
		</div>
		@if ($currentPage === 1)
		<div class="px-8 rounded-b-md border-r border-b border-l border-gray-300 shadow-md divide-y">
			<div class="py-10 space-y-10 ">
				<div class="flex justify-between items-center">
					<label for="fname" class="text-xl text-blue-500 w-1/2">ชื่อจริง</label>
					<div class="text-xl w-1/2">
						<input id="fname" type="text" name="firstname" value="Jeremy" class="input-form-reg">
					</div>
				</div>
				<div class="flex justify-between items-center ">
					<label for="lname" class="text-xl text-blue-500 w-1/2">นามสกุล</label>
					<div class="text-xl w-1/2">
						<input id="lname" type="text" class="input-form-reg">
					</div>
				</div>
				<div class="flex justify-between items-center ">
					<label for="nick" class="text-xl text-blue-500 w-1/2">ชื่อเล่น</label>
					<div class="text-xl w-1/2">
						<input id="nick" type=" text" class="input-form-reg">
					</div>
				</div>
			</div>
			<div class="py-10 space-y-10 ">
				<div class="flex justify-between items-center">
					<label for="dateofbirth" class="text-xl text-blue-500 w-1/2">วันเกิด</label>
					<div class="text-xl w-1/2">
						<input id="dateofbirth" type=" text" class="input-form-reg">
					</div>
				</div>
				<div class="flex justify-between items-center ">
					<label for="gender" class="text-xl text-blue-500 w-1/2">เพศ</label>
					<div class="text-xl w-1/2">
						<input id="gender" type="text" class="input-form-reg">
					</div>
				</div>
				<div class="flex justify-between items-center ">
					<label for="bloodgroup" class="text-xl text-blue-500 w-1/2">กรุ๊ปเลือด</label>
					<div class="text-xl w-1/2">
						<input id="bloodgroup" type="text" class="input-form-reg">
					</div>
				</div>
				<div class="flex justify-between items-center ">
					<label for="religion" class="text-xl text-blue-500 w-1/2">ศาสนา</label>
					<div class="text-xl w-1/2">
						<input id="religion" type="text" class="input-form-reg">
					</div>
				</div>
			</div>
		</div>
		@elseif ($currentPage === 2)
		<div class="px-8 rounded-b-md border-r border-b border-l border-gray-300 shadow-md">
			<div class="py-10 space-y-10">
				<div class="flex justify-between items-center">
					<h1 class="text-xl text-blue-500">2</h1>
					<div class="space-x-5 text-xl">
						<button class="px-16 py-3 bg-blue-500 text-white rounded-md outline outline-offset-2 outline-2 outline-blue-500">มี</button>
						<button class="px-16 py-3 bg-blue-200 text-blue-500 rounded-md">ไม่มี</button>
					</div>
				</div>
				<div class="flex justify-between items-center">
					<h1 class="text-xl text-blue-500">2</h1>
					<div class="space-x-5 text-xl">
						<input type="text" class="border-blue-500 border-2 w-full px-3 py-2 rounded-md mr-6">
					</div>
				</div>
			</div>
		</div>
		@elseif ($currentPage === 3)
		<div class="px-8 rounded-b-md border-r border-b border-l border-gray-300 shadow-md">
			<div class="py-10 space-y-10">
				<div class="flex justify-between items-center">
					<h1 class="text-xl text-blue-500">โรคประจำตัว</h1>
					<div class="space-x-5 text-xl">
						<button class="px-16 py-3 bg-blue-500 text-white rounded-md outline outline-offset-2 outline-2 outline-blue-500">มี</button>
						<button class="px-16 py-3 bg-blue-200 text-blue-500 rounded-md">ไม่มี</button>
					</div>
				</div>
				<div class="flex justify-between items-center">
					<h1 class="text-xl text-blue-500">โรคประจำตัว</h1>
					<div class="space-x-5 text-xl">
						<input type="text" class="border-blue-500 border-2 w-full px-3 py-2 rounded-md mr-6">
					</div>
				</div>
			</div>
		</div>
		@endif
	</form>
	<div class="flex items-center justify-between w-3/5">

		@if ($currentPage == 1)
		<div></div>
		@else
		<button wire:click="$set('currentPage', {{$currentPage-1}})" class="px-16 py-3 bg-blue-500 text-white rounded-md outline outline-offset-2 outline-2 outline-blue-500">ย้อนกลับ</button>
		@endif

		@if ($currentPage == count($pages))
		<button type="submit" class="px-16 py-3 bg-blue-500 text-white rounded-md outline outline-offset-2 outline-2 outline-blue-500">ยืนยัน</button>
		@else
		<button wire:click="$set('currentPage', {{$currentPage+1}})" class="px-16 py-3 bg-blue-500 text-white rounded-md outline outline-offset-2 outline-2 hover:outline-blue-500 outline-gray-200 cursor-pointer transition-all ease-in-out duration-200">ต่อไป</button>
		@endif

	</div>
</div> -->
<div>
	<h1 class="underline decoration-3 underline-offset-2 text-[#0053AD] font-semibold text-center my-12 text-2xl">
		ลงทะเบียนเข้าค่าย
	</h1>
	<div class="w-3/5 min-h-[20em] bg-white mx-auto rounded-md border border-[#ABBED1]">
		<div class="px-6 py-4 flex justify-between items-center border-b border-[#ABBED1]">
			<div class="bg-[#0671E0] aspect-square w-10 rounded-md p-1 flex justify-center items-center text-white font-medium ring-2 ring-offset-1 border-[#4196F0]">
				2
			</div>
			<h2 class="text-[#0671E0] font-medium text-lg">ข้อมูลการศึกษา</h2>
		</div>
		@if ($currentPage == 1)
		<div class="px-6 py-4">
			<h3 class="text-[#4D4D4D] mb-4">กำลังศึกษาอยู่ในระดับ</h3>
			<div class="flex flex-col md:flex-row justify-between space-y-4 md:space-y-0 md:space-x-2">
				<button-wrapper class="relative flex-1 hover:cursor-pointer">
					<div class="relative z-20 bg-[#EEF5FC] border-2 border-[#4196F0] py-2 rounded-md">
						<p class="text-[#4196F0] text-lg font-medium text-center">ม.4</p>
					</div>
					<div class="absolute z-10 bg-[#EEF5FC] top-0 left-0 right-0 bottom-0 transform translate-y-1.5 rounded-md border-[#4196F0] border-2"></div>
				</button-wrapper>
				<button-wrapper class="relative flex-1 hover:cursor-pointer">
					<div class="relative z-20 bg-[#EEF5FC] border-2 border-[#4196F0] py-2 rounded-md">
						<p class="text-[#4196F0] text-lg font-medium text-center">ม.5</p>
					</div>
					<div class="absolute z-10 bg-[#EEF5FC] top-0 left-0 right-0 bottom-0 transform translate-y-1.5 rounded-md border-[#4196F0] border-2"></div>
				</button-wrapper>
				<button-wrapper class="relative flex-1 hover:cursor-pointer">
					<div class="relative z-20 bg-[#EEF5FC] border-2 border-[#4196F0] py-2 rounded-md">
						<p class="text-[#4196F0] text-lg font-medium text-center">ม.6</p>
					</div>
					<div class="absolute z-10 bg-[#EEF5FC] top-0 left-0 right-0 bottom-0 transform translate-y-1.5 rounded-md border-[#4196F0] border-2"></div>
				</button-wrapper>
				<button-wrapper class="relative flex-1 hover:cursor-pointer">
					<div class="relative z-20 bg-[#EEF5FC] border-2 border-[#4196F0] py-2 rounded-md">
						<p class="text-[#4196F0] text-lg font-medium text-center">ปวช.</p>
					</div>
					<div class="absolute z-10 bg-[#EEF5FC] top-0 left-0 right-0 bottom-0 transform translate-y-1.5 rounded-md border-[#4196F0] border-2"></div>
				</button-wrapper>
				<button-wrapper class="relative flex-1 hover:cursor-pointer">
					<div class="relative z-20 bg-[#EEF5FC] border-2 border-[#4196F0] py-2 rounded-md">
						<p class="text-[#4196F0] text-lg font-medium text-center">ปวส.</p>
					</div>
					<div class="absolute z-10 bg-[#EEF5FC] top-0 left-0 right-0 bottom-0 transform translate-y-1.5 rounded-md border-[#4196F0] border-2"></div>
				</button-wrapper>
			</div>

			<div class="mt-10 py-2 flex flex-col md:flex-row justify-between items-center">
				<h3 class="text-[#4D4D4D] font-medium w-full">
					โรงเรียน / สถานศึกษา
				</h3>
				<input type="text" name="school" class="w-full px-2 py-1.5 bg-[#EEF5FC] max-w-[30em] border border-[#4196F0] rounded-md outline-none" />
			</div>
			<div class="py-2 flex flex-col md:flex-row justify-between items-center">
				<h3 class="text-[#4D4D4D] font-medium w-full">แผนการเรียน / สาขา</h3>
				<input type="text" name="school" class="w-full px-2 py-1.5 bg-[#EEF5FC] max-w-[30em] border border-[#4196F0] rounded-md outline-none" />
			</div>
			<div class="w-full h-[1px] bg-[#ABBED1] my-2"></div>
			<h3 class="py-3 text-[#4D4D4D] font-medium">ใบ ปพ. 7</h3>
			<div class="relative bg-[#F5F7FA] w-full rounded-md">
				<input type="file" name="file" class="w-full min-h-[15em] block opacity-0 cursor-pointer" />
				<!-- Blind เอาไว้ -->
				<div class="absolute flex flex-col items-center top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 pointer-events-none">
					<img src="https://www.svgrepo.com/show/5500/upload-file.svg" alt="file" class="w-6" />
					<!-- รูปไฟล์ลองแก้  -->
					<p class="mt-1 text-sm text-[#4196F0]">อัปโหลดไฟล์</p>
				</div>
			</div>
		</div>
		@elseif ($currentPage === 2)
		<div>
			Hello
		</div>
		@endif
	</div>
	<div class="flex items-center justify-between w-3/5 mx-auto mt-10">

		@if ($currentPage == 1)
		<div></div>
		@else
		<button wire:click="$set('currentPage', {{$currentPage-1}})" class="px-16 py-3 bg-blue-500 text-white rounded-md outline outline-offset-2 outline-2 outline-blue-500">ย้อนกลับ</button>
		@endif

		@if ($currentPage == count($pages))
		<button type="submit" class="px-16 py-3 bg-blue-500 text-white rounded-md outline outline-offset-2 outline-2 outline-blue-500">ยืนยัน</button>
		@else
		<button wire:click="$set('currentPage', {{$currentPage+1}})" class="px-16 py-3 bg-blue-500 text-white rounded-md outline outline-offset-2 outline-2 hover:outline-blue-500 outline-gray-200 cursor-pointer transition-all ease-in-out duration-200">ต่อไป</button>
		@endif

	</div>
</div>